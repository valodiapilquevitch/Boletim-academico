<?php

while($num_rows = mysql_fetch_array($result)){
// - variaveis de frequencia vinda do Banco de dados

        @$userid = @$num_rows["id"];
        
        @$frequencia_m1_participacao = @$num_rows['f13'];
        @$frequencia_m2_participacao = @$num_rows['f14'];
        @$frequencia_m3_participacao = @$num_rows['f15'];
        @$frequencia_m4_participacao = @$num_rows['f16'];
        @$frequencia_m5_participacao = @$num_rows['f17'];
        @$frequencia_m6_participacao = @$num_rows['f18'];
        
		@$frequencia_m1_gameficada = @$num_rows['f19'];
        @$frequencia_m2_gameficada = @$num_rows['f20'];
        @$frequencia_m3_gameficada = @$num_rows['f21'];
        @$frequencia_m4_gameficada = @$num_rows['f22'];
        @$frequencia_m5_gameficada = @$num_rows['f23'];
        @$frequencia_m6_gameficada = @$num_rows['f24'];

        @$frequencia_m1_conferencia = @$num_rows['f25'];
        @$frequencia_m2_conferencia = @$num_rows['f26'];
        @$frequencia_m3_conferencia = @$num_rows['f27'];
        @$frequencia_m4_conferencia = @$num_rows['f28'];
        @$frequencia_m5_conferencia = @$num_rows['f29'];
        @$frequencia_m6_conferencia = @$num_rows['f30'];
        
        @$frequencia_m1_game = @$num_rows['f31'];
        @$frequencia_m2_game = @$num_rows['f32'];
        @$frequencia_m3_game = @$num_rows['f33'];
        @$frequencia_m4_game = @$num_rows['f34'];
        @$frequencia_m5_game = @$num_rows['f35'];
        @$frequencia_m6_game = @$num_rows['f36'];
        
        @$frequencia_m1_tcc = @$num_rows['f37'];
        @$frequencia_m2_tcc = @$num_rows['f38'];
        @$frequencia_m3_tcc = @$num_rows['f39'];
        @$frequencia_m4_tcc = @$num_rows['f40'];
        @$frequencia_m5_tcc = @$num_rows['f41'];
        @$frequencia_m6_tcc = @$num_rows['f42'];

        
         // - variaveis de notas do Banco de dados
         
        @$nota_m1_individual = @$num_rows['n1'];
        @$nota_m2_individual = @$num_rows['n2'];
        @$nota_m3_individual = @$num_rows['n3'];
        @$nota_m4_individual = @$num_rows['n4'];
        @$nota_m5_individual = @$num_rows['n5'];
        @$nota_m6_individual = @$num_rows['n6'];
        
        @$nota_m1_grupo = @$num_rows['n7'];
        @$nota_m2_grupo = @$num_rows['n8'];
        @$nota_m3_grupo = @$num_rows['n9'];
        @$nota_m4_grupo = @$num_rows['n10'];
        @$nota_m5_grupo = @$num_rows['n11'];
        @$nota_m6_grupo = @$num_rows['n12'];
        
        @$nota_m1_participacao = @$num_rows['n13'];
        @$nota_m2_participacao = @$num_rows['n14'];
        @$nota_m3_participacao = @$num_rows['n15'];
        @$nota_m4_participacao = @$num_rows['n16'];
        @$nota_m5_participacao = @$num_rows['n17'];
        @$nota_m6_participacao = @$num_rows['n18'];
        
        @$nota_m1_gameficada = @$num_rows['n19'];
        @$nota_m2_gameficada = @$num_rows['n20'];
        @$nota_m3_gameficada = @$num_rows['n21'];
        @$nota_m4_gameficada = @$num_rows['n22'];
        @$nota_m5_gameficada = @$num_rows['n23'];
        @$nota_m6_gameficada = @$num_rows['n24'];

        @$nota_m1_conferencia = @$num_rows['n25'];
        @$nota_m2_conferencia = @$num_rows['n26'];
        @$nota_m3_conferencia = @$num_rows['n27'];
        @$nota_m4_conferencia = @$num_rows['n28'];
        @$nota_m5_conferencia = @$num_rows['n29'];
        @$nota_m6_conferencia = @$num_rows['n30'];
        
        @$nota_m1_game = @$num_rows['n31'];
        @$nota_m2_game = @$num_rows['n32'];
        @$nota_m3_game = @$num_rows['n33'];
        @$nota_m4_game = @$num_rows['n34'];
        @$nota_m5_game = @$num_rows['n35'];
        @$nota_m6_game = @$num_rows['n36'];
        
        @$nota_m1_tcc = @$num_rows['n37'];
        @$nota_m2_tcc = @$num_rows['n38'];
        @$nota_m3_tcc = @$num_rows['n39'];
        @$nota_m4_tcc = @$num_rows['n40'];
        @$nota_m5_tcc = @$num_rows['n41'];
        @$nota_m6_tcc = @$num_rows['n42'];
		
        @$prova = @$num_rows['prova'];
        @$game = @$num_rows['game'];
		@$media_ciclo = @$num_rows['media_ciclo'];
        
        @$frequencia_final = @$num_rows['frequencia_final'];
		
		@$nota_m1 = @$num_rows['nota_m1'];
		@$frequencia_m1 = @$num_rows['frequencia_m1'];
		@$nota_m2 = @$num_rows['nota_m2'];
		@$frequencia_m2 = @$num_rows['frequencia_m2'];
		@$nota_m3 = @$num_rows['nota_m3'];
		@$frequencia_m3 = @$num_rows['frequencia_m3'];
		@$nota_m4 = @$num_rows['nota_m4'];
		@$frequencia_m4 = @$num_rows['frequencia_m4'];
		@$nota_m5 = @$num_rows['nota_m5'];
		@$frequencia_m5 = @$num_rows['frequencia_m5'];
		@$nota_m6 = @$num_rows['nota_m6'];
		@$frequencia_m6 = @$num_rows['frequencia_m6'];
		
		
		};

        echo "<table class='table table-condensed table-responsive'>";
        echo "<tbody>";
        
        //CABEÇALHO DO BOLETIM
		echo "<tr>";
			
			echo " 		<td><p class='text-center'> Descrição</p></td>";
			echo " 		<td><p class='text-center'> Composição da nota (%)</p></td>";
			echo " 		<td><p class='text-center'> Composição da nota (0-10)</p></td>";
			echo " 		<td><p class='text-center'> Frequência</p></td>";	
			
			echo " 		<td><p class='text-center'> Módulo 1</p></td>";
			echo " 		<td><p class='text-center'> F<br />%</p></td>";
			echo " 		<td><p class='text-center'> Módulo 2</p></td>";
			echo " 		<td><p class='text-center'> F<br />%</p></td>";	
			echo " 		<td><p class='text-center'> Módulo 3</p></td>";
			echo " 		<td><p class='text-center'> F<br />%</p></td>";	
			echo " 		<td><p class='text-center'> Módulo 4</p></td>";
			echo " 		<td><p class='text-center'> F<br />%</p></td>";	
			echo " 		<td><p class='text-center'> Módulo 5</p></td>";
			echo " 		<td><p class='text-center'> F<br />%</p></td>";	
			echo " 		<td><p class='text-center'> Módulo 6</p></td>";
			echo " 		<td><p class='text-center'> F<br />%</p></td>";	
			
			echo "      <td colspan ='2'>Prova (55%) <br /> Game (45%)</p></td>";
			echo " 		<td><p class='text-center'> Média</p></td>";
			echo " 		<td><p class='text-center'> Frequência</p></td>";
		echo "</tr>";
    
        echo "<tr>";
        echo "<td colspan ='20' style ='font-size:16px; color:#7cba46; padding-left:10px; padding-top: 5px' ><div align ='left'><em>Presencial</em></p></td>";
        echo "</tr>";
    
        //ATIVIDADE INDIVIDUAL
    
        echo "<tr>";
        echo " 		<td><p class='text-center'> Individual</p></td>";
        echo "      <td rowspan ='3'>55 %</p></td>";
        echo "      <td rowspan ='3'>5,5</p></td>";
		
        echo "      <td rowspan ='3'>55% proporcional às 20 horas de aula </p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_individual. "</p></td>";				
        echo " 		<td rowspan ='3'><p class='text-center'> ".@$frequencia_m1_participacao."</p></td>";				
        echo " 		<td><p class='text-center'> ".@$nota_m2_individual."</p></td>";		
        echo " 		<td  rowspan ='3'><p class='text-center'> ".@$frequencia_m2_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m3_individual."</p></td>";		
        echo " 		<td  rowspan ='3'><p class='text-center'> ".@$frequencia_m3_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m4_individual."</p></td>";		
        echo " 		<td  rowspan ='3'><p class='text-center'> ".@$frequencia_m4_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m5_individual."</p></td>";		
        echo " 		<td  rowspan ='3'><p class='text-center'> ".@$frequencia_m5_participacao."</p></td>";
		echo " 		<td><p class='text-center'>".@$nota_m6_individual."</p></td>";
		echo " 		<td  rowspan ='3'><p class='text-center'>".@$frequencia_m6_participacao."</p></td>";		
			
        echo "      <td rowspan ='3' colspan='2'>PROVA <br /> ".@$prova." </p></td>";
        echo "      <td rowspan ='8'>".@$media_ciclo."</p></td>";
        echo "      <td rowspan ='8'>".@$frequencia_final."</p></td>";
        echo "</tr>";
    
        //ATIVIDADE EM GRUPO
        
        echo "<tr>";
        echo " 		<td><p class='text-center'> Em grupo</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_grupo."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m2_grupo."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m3_grupo."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m4_grupo."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m5_grupo."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m6_grupo."</p></td>";
        echo "</tr>";
    
        //PARTICIPAÇÃO
        
        echo "<tr>";
        echo " 		<td><p class='text-center'> Participação </p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m2_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m3_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m4_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m5_participacao."</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m6_participacao."</p></td>";
        echo "</tr>";
    
        echo "<tr>";
        echo "<td colspan ='18'  style = 'font-size:16px; color:#7cba46;  padding-left:10px; padding-top: 5px; height:10px !important'><div align ='left'><em>À distância</em></p></td>";
        echo "</tr>";
    
        //ATIVIDADE GAMEFICADA
        
        echo "<tr>";
        echo " 		<td><p class='text-center'> Atividade</p></td>";
        echo "      <td rowspan ='4'>45%</p></td>";
        echo "      <td rowspan ='4'>4,5</p></td>";
        echo "      <td rowspan ='4'>45% proporcional ao número de atividades</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_gameficada."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m1_gameficada."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m2_gameficada."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m2_gameficada."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m3_gameficada."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m3_gameficada."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m4_gameficada."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m4_gameficada."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m5_gameficada."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m5_gameficada."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m6_gameficada."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m6_gameficada."</p></td>";
        echo "      <td rowspan ='4' colspan='2'>GAME <br />".@$game."</p></td>";
        echo "</tr>";
    
        //WEB CONFERENCIA
        
        echo "<tr>";
        echo "     <td>Web conferência</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_conferencia."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m1_conferencia."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m2_conferencia."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m2_conferencia."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m3_conferencia."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m3_conferencia."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m4_conferencia."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m4_conferencia."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m5_conferencia."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m5_conferencia."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m6_conferencia."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m6_conferencia."</p></td>";
        echo "</tr>";
    
        //GAME
        
        echo "<tr>";
        echo "     <td>Game</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_game."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m1_game."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m2_game."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m2_game."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m3_game."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m3_game."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m4_game."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m4_game."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m5_game."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m5_game."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m6_game."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m6_game."</p></td>";
        echo "</tr>";
    
        //TCC
        
        echo "<tr>";
        echo "     <td>TCC</p></td>";
        echo " 		<td><p class='text-center'> ".@$nota_m1_tcc."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m1_tcc."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m2_tcc."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m2_tcc."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m3_tcc."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m3_tcc."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m4_tcc."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m4_tcc."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m5_tcc."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m5_tcc."</p></td>";	
        echo " 		<td><p class='text-center'> ".@$nota_m6_tcc."</p></td>";
        echo " 		<td><p class='text-center'> ".@$frequencia_m6_tcc."</p></td>";
        echo "</tr>";

		echo "<tr>";
        echo "<td colspan ='20'  style ='font-size:16px; color:#7cba46; padding-left:10px; padding-top: 5px'><div align ='left'><em>Médias por Módulos</em></p></td>";
        echo "</tr>";
		
		echo "<tr>";
				echo " 		<td colspan='4'><p class='text-left' style='margin-left:10px;'>Notas</p></td>";
				if ($nota_m1 < '7.0'){
				echo " 		<td><p class='text-center'><p class='text-center'><span style='color:red'>".@$nota_m1."</span></p></td>";
				} else {
				echo " 		<td><p class='text-center'><p class='text-center'>".@$nota_m1."</p></td>";
				}

				echo " 		<td><p class='text-center'>".@$frequencia_m1."</p></td>";
				
				if ($nota_m2 < '7.0'){
				echo " 		<td><p class='text-center'><p class='text-center'><span style='color:red'>".@$nota_m2."</span></p></td>";
				} else {
				echo " 		<td><p class='text-center'><p class='text-center'>".@$nota_m2."</p></td>";
				}
				echo " 		<td><p class='text-center'>".@$frequencia_m2."</p></td>";
				
				if ($nota_m3 < '7.0'){
				echo " 		<td><p class='text-center'><p class='text-center'><span style='color:red'>".@$nota_m3."</span></p></td>";
				} else {
				echo " 		<td><p class='text-center'><p class='text-center'>".@$nota_m3."</p></td>";
				}

				echo " 		<td><p class='text-center'>".@$frequencia_m3."</p></td>";
				
				if ($nota_m4 < '7.0'){
				echo " 		<td><p class='text-center'><p class='text-center'><span style='color:red'>".@$nota_m4."</span></p></td>";
				} else {
				echo " 		<td><p class='text-center'><p class='text-center'>".@$nota_m4."</p></td>";
				}

				echo " 		<td><p class='text-center'>".@$frequencia_m4."</p></td>";

				if ($nota_m5 < '7.0'){
				echo " 		<td><p class='text-center'><p class='text-center'><span style='color:red'>".@$nota_m5."</span></p></td>";
				} else {
				echo " 		<td><p class='text-center'><p class='text-center'>".@$nota_m5."</p></td>";
				}

				echo " 		<td><p class='text-center'>".@$frequencia_m5."</p></td>";

				if ($nota_m6 < '7.0'){
				echo " 		<td><p class='text-center'><p class='text-center'><span style='color:red'>".@$nota_m6."</span></p></td>";
				} else {
				echo " 		<td><p class='text-center'><p class='text-center'>".@$nota_m6."</p></td>";
				}

				echo " 		<td><p class='text-center'>".@$frequencia_m6."</p></td>";
				echo " 		<td colspan='4'><p class='text-center'></p></td>";
        echo "</tr>";
		
        echo " </tbody>";
        echo "</table>";

?>