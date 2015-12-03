<?php
/**
 * PHP Grid Component
 *
 * @author Abu Ghufran <gridphp@gmail.com> - http://www.phpgrid.org
 * @version 1.5.2
 * @license: see license.txt included in package
 */

// include db config
include_once("../../config.php");

// set up DB
mysql_connect(PHPGRID_DBHOST, PHPGRID_DBUSER, PHPGRID_DBPASS);
mysql_select_db(PHPGRID_DBNAME);

// include and create object
include(PHPGRID_LIBPATH."inc/jqgrid_dist.php");

$g = new jqgrid();

// set table for CRUD operations
$g->table = "ciclo_2";
$g->select_command = "SELECT DISTINCT
a.id,
a.firstname,
a.lastname,


b.userid,
b.n7,
b.n8,
b.n9,
b.n10,
b.n11,
b.n12,

c.roleid 

FROM mdl_user a LEFT JOIN ciclo_2 b ON a.id = b.userid
LEFT JOIN mdl_role_assignments c

ON a.id = c.userid

WHERE roleid = '5' ";
	
$grid["caption"] = "Notas Ciclo 2 - Em Grupo";
$grid["form"]["position"] = "center";
$grid["autowidth"] = true;
$grid["autoresize"] = true; // responsive effect
$g->set_options($grid);

$col = array();
$col["title"] = "Userid"; // caption of column
$col["name"] = "userid"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = false;
$col["hidden"] = true;
$col["width"] = "20";
$cols[] = $col;

$col = array();
$col["title"] = "Firstname"; // caption of column
$col["name"] = "firstname"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "Lastname"; // caption of column
$col["name"] = "lastname"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = false;
$cols[] = $col;

$col = array();
$col["title"] = "Módulo 01"; // caption of column
$col["name"] = "n7"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = true;
$col["required"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Módulo 02"; // caption of column
$col["name"] = "n8"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Módulo 03"; // caption of column
$col["name"] = "n9"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = true;
$col["editoptions"] = array("defaultValue" => "Default Company");
$cols[] = $col;

$col = array();
$col["title"] = "Módulo 04"; // caption of column
$col["name"] = "n10"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = true;
$col["editoptions"] = array("defaultValue" => "Default Company");
$cols[] = $col;

$col = array();
$col["title"] = "Módulo 05"; // caption of column
$col["name"] = "n11"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = true;
$col["editoptions"] = array("defaultValue" => "Default Company");
$cols[] = $col;

$col = array();
$col["title"] = "Módulo 06"; // caption of column
$col["name"] = "n12"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias)
$col["editable"] = true;
$col["editoptions"] = array("defaultValue" => "Default Company");
$cols[] = $col;


$g->set_columns($cols);

$g->set_actions(array(
		"add"=>true, // allow/disallow add
		"edit"=>true, // allow/disallow edit
		"delete"=>false, // allow/disallow delete
		"clone"=>true, // allow/disallow delete
		"rowactions"=>true, // show/hide row wise edit/del/save option
		"search" => "advance", // show single/multi field search condition (e.g. simple or advance)
		"showhidecolumns" => false
)
);
// render grid
$out = $g->render("list1");

$themes = array("black-tie","blitzer","cupertino","dark-hive","dot-luv","eggplant","excite-bike","flick","hot-sneaks","humanity","le-frog","mint-choc","overcast","pepper-grinder","redmond","smoothness","south-street","start","sunny","swanky-purse","trontastic","ui-darkness","ui-lightness","vader");
$i = rand(0,8);

// if set from page
if (is_numeric($_GET["themeid"]))
	$i = $_GET["themeid"];
else
	$i = 14;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Grid Control Demos | www.phpgrid.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" media="screen" href="../../lib/js/themes/<?php echo $themes[$i] ?>/jquery-ui.custom.css">
	<link rel="stylesheet" type="text/css" media="screen" href="../../lib/js/jqgrid/css/ui.jqgrid.css">
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="../../lib/js/jqgrid/css/ui.bootstrap.jqgrid.css">	
	<script src="../../lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="../../lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="../../lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="../../lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>

  </head>

  <body>
      <div class="row-fluid">
        <div class="span12">
			<div style="margin-top:10px">
				<form method="get">
				Escolha o Tema de sua preferência: <select name="themeid" onchange="form.submit()">
					<?php foreach($themes as $k=>$t) { ?>
						<option value=<?php echo $k?> <?php echo ($i==$k)?"selected":""?>><?php echo ucwords($t)?></option>
					<?php } ?>
				</select> - 
				
				</form>
				<?php echo $out?>
			</div>					
        </div><!--/span-->
      </div><!--/row-->
  </body>
</html>
