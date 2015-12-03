<?php
	include 'conexao.php';
	$query = mysql_query("select firstname, lastname, email from mdl_user") or die(mysql_error());
	
	echo '<form action="test.php">';
		echo '<select>';
			while ($row = mysql_fetch_array($query)){
			echo '<option value ="'.$row[email] .'">' . $row[firstname] . ' '. $row[lastname] . '</option>';		
			}
		echo '</select>';
		echo '<input type="submit" value="editar">';
	echo '</form>';
?>