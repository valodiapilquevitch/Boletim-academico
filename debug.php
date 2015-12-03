 <?php
 session_start();
			  if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
				  
				   unset($_SESSION['login']);
				    unset($_SESSION['senha']);
					 header('location:login.php'); 
				   } //$logado = $_SESSION['login'];
				   
				   
				   
				   echo $_SESSION['login'] ;
				   
include("conexao.php");		

$cons = mysql_query("SELECT 
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
ciclo_1.f1,
ciclo_1.f2,
ciclo_1.f3,
ciclo_1.f4,
ciclo_1.f5,
ciclo_1.f6,
ciclo_1.f7,
ciclo_1.f8,
ciclo_1.f9,
ciclo_1.f10,
ciclo_1.f11,
ciclo_1.f12,
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
ciclo_1.media_ciclo 

FROM mdl_user 
INNER JOIN ciclo_1 ON mdl_user.id = ciclo_1.userid  
WHERE username = '". $_SESSION['login'] ."'");
	
	echo '<br /> variavel $cons ';
	
	echo '<br /><br /><br />';
	echo $cons;
	
	
$result = mysql_num_rows($cons);
if ($result == 1){
	echo 'OK';
} else {
	echo 'falho';
}
	
	   
			?>
            
            
            
            
