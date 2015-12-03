<?php

$nota_m1_1 = "1.0";
$nota_m1_2 = "2.0";
$nota_m1_3 = "2.0";
$nota_m1_4 = "2.0";
$nota_m1_5 = "2.0";
$nota_m1_6 = "1.0";
		

$totalM1 = $nota_m1_1 + $nota_m1_2 + $nota_m1_3 + $nota_m1_4 + $nota_m1_5 + $nota_m1_6 ;

echo "NOTA MÓDULO 1= ". $totalM1 ;

echo "<hr />";

$nota_m2_1 = "1.0";
$nota_m2_2 = "2.0";
$nota_m2_3 = "2.0";
$nota_m2_4 = "2.0";
$nota_m2_5 = "2.0";
$nota_m2_6 = "1.0";
		

$totalM2 = $nota_m2_1 + $nota_m2_2 + $nota_m2_3 + $nota_m2_4 + $nota_m2_5 + $nota_m2_6 ;

echo "NOTA MÓDULO 2= ". $totalM2 ;

echo "<hr />";

$total_ciclo = ($totalM1 + $totalM2) / 2;
echo "TOTAL DO CICLO =  <strong>". $total_ciclo."</strong>" ;

?>