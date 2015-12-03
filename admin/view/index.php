<?php
if(!file_exists("config.php"))
{
	header("location: ./install.php");
	die;
}

			 session_start();
			  if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true)) {
				   unset($_SESSION['username']);
				    unset($_SESSION['password']);
					 header('location:login_adm.php'); 
				   } //$logado = $_SESSION['login']; 
				   
				   
				   
if (!empty($_GET["file"]))
{
	$f = $_GET["file"];
	
	$f = str_replace(".php","",$f);
	
	// remote file inclusion attempt fix
	if (strpos($f,".")!==false)
		die("+1 for you");
		
	$f = "demos/$f.php";

	if (!file_exists($f))
		die("+1 for you");

	$code = file_get_contents($f);
	
	// removed db settings
	$code = preg_replace("/mysql_connect(.*)/i","mysql_connect('localhost','user','pass');",$code);
	
	highlight_string($code);
	echo "<br>&nbsp;";
	die;
}	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Boletim Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
	body {
		padding-top: 60px;
		padding-bottom: 40px;
	}
	.sidebar-nav {
		padding: 9px 0;
	}
	.nav
	{
		margin-bottom:10px;
	}	
	.accordion-inner a {
		font-size: 13px;
		font-family:tahoma;
	}
	.alert {
		padding:8px 14px 8px 14px;
	}
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

<div class="header">
<p><strong>MBA Gestão da Inovação em Saúde</strong> 
	<a href="demos/Atualiza-Alunos/atualiza_alunos.php">
		<span style="margin-left:750px; color:#7AC143; cursor:pointer">
			<strong>
				<u>Atualizar Alunos</u>
			</strong>
		</span>
	</a> 

<a href="logout.php">
		<span style="margin-left:50px; color:#7AC143; cursor:pointer">
			<strong>
				<u>Sair</u>
			</strong>
		</span>
	</a>
</p>
</div>

	<?php 
	function dirToArray($dir) 
	{
		$result = array();
		$cdir = scandir($dir);
		foreach ($cdir as $key => $value)
		{
		  if (!in_array($value,array(".","..","temp")) && strpos($value,"_") === false)
		  {
			 if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
			 {
				$result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
			 }
			 else
			 {
				$result[] = $value;
			 }
		  }
		}

		return $result;
	}
	$samples = dirToArray("demos");

	if (!isset($_GET["filter"]))
		$_GET["filter"] = "free";

	?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">

			<div class="accordion" id="accordion_menu">
					<?php 
					foreach($samples as $k=>$v) 
					{
						if (is_numeric($k)) continue;
						$folder = ucwords($k);

						$show = 0;
						foreach($v as $f) 
						{
							if (!(filesize("demos/$k/$f") < 12))
								$show = 1;
						}

						if ($show == 0 && $_GET["filter"] == "free")
							continue;

						?>
						<div class="accordion-group">
						<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_menu" href="#collapse<?php echo $k?>">
						  <strong><?php echo $folder;?></strong>
						</a>
						</div>	
						<div id="collapse<?php echo $k?>" class="accordion-body collapse">
							<div class="accordion-inner">
								<?php
								foreach($v as $f) 
								{
									$fname = str_replace(".php","",$f);
									$fname = str_replace("-"," ",$fname);
									$fname = ucwords($fname);

									//file_put_contents("demos/$k/$f","");
									
									$ver = "";
									if (filesize("demos/$k/$f") < 12)
									{
										if ($_GET["filter"] == "free")
											continue;

										$url = "http://www.phpgrid.org/demo/demos/$k/$f";
										$fname .= " <font color='red'>*</font>";
										$ver .= "jQuery('#div_version').html('(*) Available in Licensed Version. Currently loaded from www.phpgrid.org');";
										$ver .= "jQuery('#span_version').show();";										
									}
									else
									{
										$url = "demos/$k/$f";
										$ver .= "jQuery('#span_version').hide();";
									}

									echo "<a href='$url' onclick=\"$ver;jQuery('#code').load('index.php?file=/$k/$f'); $('#grid-demo-tabs a:first').tab('show');\" target='demo_frame'> $fname </a><br/>";
								}
								?>
                                
							</div>
                            
						</div>
                        				
						</div>
                        				
						<?php
					}
					?>
                    <img src="logo_top.png">
			</div>	  

        </div><!--/span-->
		
        <div class="span10">
          <div class="row-fluid">
            <div class="span12">

				
				<div class="tab-content" id="grid-demo-tabs-content">
				  
					<div id="demo" class="tab-pane fade in active">
				
						<iframe onload="iframeLoaded(this)" name="demo_frame" frameborder="0" width="100%" height="550" src="demos/usuarios/alunos.php"></iframe>
					</div>
				  
					<div id="code" class="tab-pane fade">
                   
					</div>
				</div>

            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
		
		  
      </div><!--/row-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script>
		
			$('#grid-demo-tabs a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
			})
			
			jQuery('#code').load('index.php?file=/editing/index.php');

			function iframeLoaded(iFrameID) 
			{
				if(iFrameID) 
				{
			        iFrameID.height = "600px";
					if(iFrameID.contentDocument){
						iFrameID.height = iFrameID.contentDocument.body.offsetHeight + 35;
					} else {
						iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + 45 + "px";
					}
				}
				
				if (!stop)
				setTimeout(function(){iframeLoaded(iFrameID,1);},1000);
			}
		</script>
    </div><!--/.fluid-container-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-50875146-1', 'phpgrid.org');
	  ga('send', 'pageview');
	</script>

  </body>
</html>
