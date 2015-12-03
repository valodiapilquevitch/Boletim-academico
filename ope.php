<?php 

include 'conexao.php';
session_start();


$login = $_POST['login'];
$senha = $_POST['senha'];

if (!empty($login) && !empty($senha)) {

	$result = mysql_query("SELECT DISTINCT mdl_user.password, mdl_role_assignments.roleid FROM mdl_user INNER JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid WHERE username = '{$login}' AND roleid IN ('5') ");
	
	while($row = mysql_fetch_array($result))
	{
		$hash = $row['password'];
		if (crypt($senha, $hash) === $hash) 
		{
			$_SESSION['login']=$login;
			$_SESSION['senha']=$senha;
			header('location:index.php');
		} else 
		{
			header('location:login.php');
		}
	}

}  else 
		{
			header('location:login.php');
		}
 ?>
	