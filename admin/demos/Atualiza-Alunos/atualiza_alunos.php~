<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect("localhost", "mba", "Mba123#") or die("Opps some thing went wrong - mysql_connect");
	//	$conn = mysql_connect("localhost", "root", "") or die("Opps some thing went wrong - mysql_connect");
	mysql_select_db("moodle")or die("Opps some thing went wrong - mysql_select_db");
	
$pegaAluno = mysql_query('SELECT DISTINCT a.id, b.roleid FROM mdl_user a INNER JOIN mdl_role_assignments b ON a.id = b.userid WHERE roleid = 5 order by id asc');
while($num_rows = mysql_fetch_array($pegaAluno)){
	
		$userid = $num_rows["id"];
		
	$ciclo1    = mysql_query("INSERT INTO ciclo_1 (`userid`)
							SELECT * FROM (SELECT '$userid') AS tmp
							WHERE NOT EXISTS (
							SELECT userid FROM ciclo_1 WHERE userid = '$userid') LIMIT 1;");
							
	$ciclo2    = mysql_query("INSERT INTO ciclo_2 (`userid`)
							SELECT * FROM (SELECT '$userid') AS tmp
							WHERE NOT EXISTS (
							SELECT userid FROM ciclo_2 WHERE userid = '$userid') LIMIT 1;");
							
	$ciclo3    = mysql_query("INSERT INTO ciclo_3 (`userid`)
							SELECT * FROM (SELECT '$userid') AS tmp
							WHERE NOT EXISTS (
							SELECT userid FROM ciclo_3 WHERE userid = '$userid') LIMIT 1;");		
}
echo 'Dados Atualizados <br />';
echo '<a href="javascript:history.back(1)">Voltar</a>';
?>
