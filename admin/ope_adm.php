<?php 

include '../conexao.php';
session_start();

$username = $_POST['username'];
$passCard = $_POST['passCard'];

$result = mysql_query("SELECT DISTINCT mdl_user.password, mdl_role_assignments.roleid FROM mdl_user INNER JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid WHERE username = '{$username}' AND roleid IN ('1,2,3') ");
while($row = mysql_fetch_array($result)){
	$hash = $row['password'];
	

	if (crypt($passCard, $hash) === $hash) {

		$_SESSION['username']=$username;
		$_SESSION['password']=$passCard;


		header('location:index.php');



	} else {
		echo 'Senha incorreta!';

	}
	
}
 ?>
	