<!doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta http-equiv ="X-UA-Compatible" content ="IE =edge">
        <meta name ="viewport" content ="width =device-width,
 initial-scale =1">
        <title>Documento sem título</title>
        <link href ="../../css/bootstrap.css" rel ="stylesheet">
        <link href ='http://fonts.googleapis.com/css?family =Open+Sans' rel ='stylesheet' type ='text/css'>

            <?php 

			 session_start();
			  if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true)) {
				   unset($_SESSION['username']);
				    unset($_SESSION['password']);
					 header('location:login_adm.php'); 
				   } //$logado = $_SESSION['login']; 
				   
	$pegaid = (int) $_GET['id'];
    $id = "$pegaid";
	include("conexao.php");
	
	$nome_aluno = mysql_query("SELECT id,firstname, lastname FROM mdl_user	WHERE id = '".$id."' ") or die(mysql_error());	
		while ($row = mysql_fetch_array($nome_aluno)) {
		   $_SESSION['nome'] = $row['firstname'];
		   $_SESSION['sobrenome'] = $row['lastname'];
		}
	
			?>

    </head>

<body>

<br />
<div class="col-xs-12 col-sm-6 col-md-12">
	<div class"container-fluid">
      <div class="container-fluid bg-green">
                <div class="row">
<div class="col-xs-6 col-sm-3 bg-grey"> <center><img src="../../img/mba.png" height="72"></center></div>
<div class="col-xs-6 col-sm-2 bg-green"><center><button type="button" class="btn btn-default navbar-btn" id="btn_cicloI" >Ciclo - Inovação, Propriedade Intelectual e Transferência de Tecnologia</button></center></div>
<div class="col-xs-6 col-sm-2 bg-green"><center><button type="button" class="btn btn-default navbar-btn" id="btn_cicloII" >Ciclo - Pesquisa, Desenvolvimento e Produção em Saúde</button></cente>        </div>
<div class="col-xs-6 col-sm-2 bg-green"><center><button type="button" class="btn btn-default navbar-btn" id="btn_cicloIII" >Ciclo - Parcerias, Negócios, Financiamento e Gestão de Projetos Inovadores</button></cente>        </div>
<div class="col-xs-6 col-sm-2 bg-green"><p class='text-center'><div class="logado">Olá <?php echo $_SESSION['nome'] ." ".$_SESSION['sobrenome'] ?></div></div>
<div class="col-xs-6 col-sm-1 bg-green"><p class='text-center'><button type="button" class="btn btn-default navbar-btn" id="logout" >Sair</button></p></div>
                </div>
            </div>

  <?php
		echo "<div id='ciclo0' class='esconder'>";	
		echo "</div>";


	$cons = mysql_query("SELECT 
	a.id,
	a.firstname,
	a.username,
	a.password,
	
	b.userid,
	c.userid,
	d.userid 
	
	FROM mdl_user a 
	INNER JOIN ciclo_1 b on a.id = b.userid 
	INNER JOIN ciclo_2 c on a.id = c.userid 
	INNER JOIN ciclo_3 d on a.id = d.userid
		
	WHERE a.id = '" . $id . "'") or die(mysql_error());
		
	$rows_cons = mysql_num_rows($cons);

	if ($rows_cons > 0) {
			
		$result = mysql_query("SELECT 
mdl_user.id,
mdl_user.firstname,
mdl_user.username,
mdl_user.password,

ciclo_1.n1,
ciclo_1.n2,
ciclo_1.n3,
ciclo_1.n4,
ciclo_1.n5,
ciclo_1.n6,
ciclo_1.n7,
ciclo_1.n8,
ciclo_1.n9,
ciclo_1.n10,
ciclo_1.n11,
ciclo_1.n12,
ciclo_1.n13,
ciclo_1.n14,
ciclo_1.n15,
ciclo_1.n16,
ciclo_1.n17,
ciclo_1.n18,
ciclo_1.n19,
ciclo_1.n20,
ciclo_1.n21,
ciclo_1.n22,
ciclo_1.n23,
ciclo_1.n24,
ciclo_1.n25,
ciclo_1.n26,
ciclo_1.n27,
ciclo_1.n28,
ciclo_1.n29,
ciclo_1.n30,
ciclo_1.n31,
ciclo_1.n32,
ciclo_1.n33,
ciclo_1.n34,
ciclo_1.n35,
ciclo_1.n36,
ciclo_1.n37,
ciclo_1.n38,
ciclo_1.n39,
ciclo_1.n40,
ciclo_1.n41,
ciclo_1.n42,
ciclo_1.f13,
ciclo_1.f14,
ciclo_1.f15,
ciclo_1.f16,
ciclo_1.f17,
ciclo_1.f18,
ciclo_1.f19,
ciclo_1.f20,
ciclo_1.f21,
ciclo_1.f22,
ciclo_1.f23,
ciclo_1.f24,
ciclo_1.f25,
ciclo_1.f26,
ciclo_1.f27,
ciclo_1.f28,
ciclo_1.f29,
ciclo_1.f30,
ciclo_1.f31,
ciclo_1.f32,
ciclo_1.f33,
ciclo_1.f34,
ciclo_1.f35,
ciclo_1.f36,
ciclo_1.f37,
ciclo_1.f38,
ciclo_1.f39,
ciclo_1.f40,
ciclo_1.f41,
ciclo_1.f42,
ciclo_1.prova,
ciclo_1.game,
ciclo_1.frequencia_final,
ciclo_1.media_ciclo,
ciclo_1.nota_m1,
ciclo_1.nota_m2,
ciclo_1.nota_m3,
ciclo_1.nota_m4,
ciclo_1.nota_m5,
ciclo_1.nota_m6,
ciclo_1.frequencia_m1,
ciclo_1.frequencia_m2,
ciclo_1.frequencia_m3,
ciclo_1.frequencia_m4,
ciclo_1.frequencia_m5,
ciclo_1.frequencia_m6
 

FROM mdl_user 
INNER JOIN ciclo_1 ON mdl_user.id = ciclo_1.userid  
WHERE mdl_user.id= '" . $id . "'") or die(mysql_error());

		echo "<div id='ciclo1' class='esconder'>";
		
            echo "<div class='title'>Ciclo - Inovação, Propriedade Intelectual e Transferência de Tecnologia</div>";
		include("tabela.php");
		echo "</div>";

		$result = mysql_query("SELECT 
mdl_user.id,
mdl_user.firstname,
mdl_user.username,
mdl_user.password,

ciclo_2.n1,
ciclo_2.n2,
ciclo_2.n3,
ciclo_2.n4,
ciclo_2.n5,
ciclo_2.n6,
ciclo_2.n7,
ciclo_2.n8,
ciclo_2.n9,
ciclo_2.n10,
ciclo_2.n11,
ciclo_2.n12,
ciclo_2.n13,
ciclo_2.n14,
ciclo_2.n15,
ciclo_2.n16,
ciclo_2.n17,
ciclo_2.n18,
ciclo_2.n19,
ciclo_2.n20,
ciclo_2.n21,
ciclo_2.n22,
ciclo_2.n23,
ciclo_2.n24,
ciclo_2.n25,
ciclo_2.n26,
ciclo_2.n27,
ciclo_2.n28,
ciclo_2.n29,
ciclo_2.n30,
ciclo_2.n31,
ciclo_2.n32,
ciclo_2.n33,
ciclo_2.n34,
ciclo_2.n35,
ciclo_2.n36,
ciclo_2.n37,
ciclo_2.n38,
ciclo_2.n39,
ciclo_2.n40,
ciclo_2.n41,
ciclo_2.n42,
ciclo_2.f13,
ciclo_2.f14,
ciclo_2.f15,
ciclo_2.f16,
ciclo_2.f17,
ciclo_2.f18,
ciclo_2.f19,
ciclo_2.f20,
ciclo_2.f21,
ciclo_2.f22,
ciclo_2.f23,
ciclo_2.f24,
ciclo_2.f25,
ciclo_2.f26,
ciclo_2.f27,
ciclo_2.f28,
ciclo_2.f29,
ciclo_2.f30,
ciclo_2.f31,
ciclo_2.f32,
ciclo_2.f33,
ciclo_2.f34,
ciclo_2.f35,
ciclo_2.f36,
ciclo_2.f37,
ciclo_2.f38,
ciclo_2.f39,
ciclo_2.f40,
ciclo_2.f41,
ciclo_2.f42,
ciclo_2.prova,
ciclo_2.game,
ciclo_2.frequencia_final,
ciclo_2.media_ciclo ,
ciclo_2.nota_m1,
ciclo_2.nota_m2,
ciclo_2.nota_m3,
ciclo_2.nota_m4,
ciclo_2.nota_m5,
ciclo_2.nota_m6,
ciclo_2.frequencia_m1,
ciclo_2.frequencia_m2,
ciclo_2.frequencia_m3,
ciclo_2.frequencia_m4,
ciclo_2.frequencia_m5,
ciclo_2.frequencia_m6

FROM mdl_user 
INNER JOIN ciclo_2 ON mdl_user.id = ciclo_2.userid 
WHERE mdl_user.id= '" . $id . "'") or die(mysql_error());

		echo "<div id='ciclo2' class='esconder'>";
            echo "<div class='title'><em>Ciclo - Pesquisa, Desenvolvimento e Produção em Saúde</em></div>";
		include("tabela.php");
		echo "</div>";

		$result = mysql_query("SELECT 
mdl_user.id,
mdl_user.firstname,
mdl_user.username,
mdl_user.password,

ciclo_3.n1,
ciclo_3.n2,
ciclo_3.n3,
ciclo_3.n4,
ciclo_3.n5,
ciclo_3.n6,
ciclo_3.n7,
ciclo_3.n8,
ciclo_3.n9,
ciclo_3.n10,
ciclo_3.n11,
ciclo_3.n12,
ciclo_3.n13,
ciclo_3.n14,
ciclo_3.n15,
ciclo_3.n16,
ciclo_3.n17,
ciclo_3.n18,
ciclo_3.n19,
ciclo_3.n20,
ciclo_3.n21,
ciclo_3.n22,
ciclo_3.n23,
ciclo_3.n24,
ciclo_3.n25,
ciclo_3.n26,
ciclo_3.n27,
ciclo_3.n28,
ciclo_3.n29,
ciclo_3.n30,
ciclo_3.n31,
ciclo_3.n32,
ciclo_3.n33,
ciclo_3.n34,
ciclo_3.n35,
ciclo_3.n36,
ciclo_3.n37,
ciclo_3.n38,
ciclo_3.n39,
ciclo_3.n40,
ciclo_3.n41,
ciclo_3.n42,
ciclo_3.f13,
ciclo_3.f14,
ciclo_3.f15,
ciclo_3.f16,
ciclo_3.f17,
ciclo_3.f18,
ciclo_3.f19,
ciclo_3.f20,
ciclo_3.f21,
ciclo_3.f22,
ciclo_3.f23,
ciclo_3.f24,
ciclo_3.f25,
ciclo_3.f26,
ciclo_3.f27,
ciclo_3.f28,
ciclo_3.f29,
ciclo_3.f30,
ciclo_3.f31,
ciclo_3.f32,
ciclo_3.f33,
ciclo_3.f34,
ciclo_3.f35,
ciclo_3.f36,
ciclo_3.f37,
ciclo_3.f38,
ciclo_3.f39,
ciclo_3.f40,
ciclo_3.f41,
ciclo_3.f42,
ciclo_3.prova,
ciclo_3.game,
ciclo_3.frequencia_final,
ciclo_3.media_ciclo,
ciclo_3.nota_m1,
ciclo_3.nota_m2,
ciclo_3.nota_m3,
ciclo_3.nota_m4,
ciclo_3.nota_m5,
ciclo_3.nota_m6,
ciclo_3.frequencia_m1,
ciclo_3.frequencia_m2,
ciclo_3.frequencia_m3,
ciclo_3.frequencia_m4,
ciclo_3.frequencia_m5,
ciclo_3.frequencia_m6

FROM mdl_user 
INNER JOIN ciclo_3 ON mdl_user.id = ciclo_3.userid 
WHERE mdl_user.id= '" . $id . "'") or die(mysql_error());

		echo "<div id='ciclo3' class='esconder'>";
            echo "<div class='title'><em>Ciclo - Parcerias, Negócios, Financiamento e Gestão de Projetos Inovadores</em></div>";
		include("tabela.php");

		echo "</div>";
					
	} else {
		echo "<p style='margin-top:200px'>Dados não Cadastrados</p>";
		
	}

    ?>
                         
     </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 col-sm-3"><img src="../../img/fundacao_logo.png" style=""></div>
                    <div class="col-xs-6 col-sm-3"><img src="../../img/IB_logo.png"></div>
                    <div class="col-xs-6 col-sm-6"><span style="font-size:11px">Instituto Butantan<br />
                                                    Av. Vital Brasil, 1500<br />
                                                    Butantã - São Paulo SP<br />
                                                    05503-900<br />
                                                    (+55 11) 2627-9300</span>
                                                    </div>
                </div>
            </div>
        </footer>
   </div>
</body>
    
    <script src ="../../js/bootstrap.min.js"></script>
    <script src ="../../js/jquery.min.js"></script>
		<script>
    
            function myFunction() {
                window.print();
            }
    
        </script>
	<script>
	$("#ciclo0").show();
	
    $(document).ready(function(){
        
        $("#btn_cicloI").click(function(){
			$("#ciclo0").hide();
             $("#ciclo2").hide();
             $("#ciclo3").hide();
             
             $("#ciclo1").show();
        });
        
        $("#btn_cicloII").click(function(){
			$("#ciclo0").hide();
             $("#ciclo3").hide();
             $("#ciclo1").hide();
             
             $("#ciclo2").show();
        });
        
        $("#btn_cicloIII").click(function(){
			$("#ciclo0").hide();
             $("#ciclo1").hide();
             $("#ciclo2").hide();
             
             $("#ciclo3").show();
        });
       
        
    });
    </script>
</body>
</html>