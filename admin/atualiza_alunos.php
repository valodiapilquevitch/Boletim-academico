<?php

 include '../conexao.php';
	/*	
	$pegaAluno = mysql_query('SELECT DISTINCT a.id, b.roleid FROM mdl_user a INNER JOIN mdl_role_assignments b ON a.id = b.userid WHERE roleid = '5' order by id asc ');
	while($num_rows = mysql_fetch_array($pegaAluno)){
	Mysql
	*/

//Mysqli
	$sql = "SELECT DISTINCT a.id, b.roleid FROM mdl_user a INNER JOIN mdl_role_assignments b ON a.id = b.userid WHERE roleid = '5' order by id asc ";
	$query = $mysqli->query($pegaAluno);
	while ($num_rows = $query->mysqli_fetch_array()) {	
	$userid = $num_rows["id"];
		
		$ciclo1    = "INSERT INTO ciclo_1 (`userid`)
				SELECT * FROM (SELECT '$userid') AS tmp
				WHERE NOT EXISTS (
				SELECT userid FROM ciclo_1 WHERE userid = '$userid') LIMIT 1;";
		
		$ciclo2    = "INSERT INTO ciclo_2 (`userid`)
				SELECT * FROM (SELECT '$userid') AS tmp
				WHERE NOT EXISTS (
				SELECT userid FROM ciclo_2 WHERE userid = '$userid') LIMIT 1;";
		
		$ciclo3    = "INSERT INTO ciclo_3 (`userid`)
				SELECT * FROM (SELECT '$userid') AS tmp
				WHERE NOT EXISTS (
				SELECT userid FROM ciclo_3 WHERE userid = '$userid') LIMIT 1;";		
}

echo 'Dados Atualizados <br />';
echo '<a href="javascript:history.back(1)">Voltar</a>';
?>
