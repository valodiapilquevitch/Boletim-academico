<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$conn = mysql_connect("localhost", "root", "") or die("Opps some thing went wrong - mysql_connect");
//		$conn = mysql_connect("localhost", "root", "") or die("Opps some thing went wrong - mysql_connect");
	mysql_select_db("moodle")or die("Opps some thing went wrong - mysql_select_db");
?>