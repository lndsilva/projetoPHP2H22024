<?php

	echo "Escolha: </br>"; 
	echo "1-Banana </br> 2-Laranja </br> 3-Abacaxi </br> 4-Sair </br></br>"; 

	$op = 3;
	$esc = 'Você escolheu ';

	switch ($op) {
		case 1: echo "$esc Banana";			
		break;
		case 2: echo "$esc Laranja";			
		break;
		case 3: echo "$esc Abacaxi";			
		break;			
		default: echo "Sair";		
		break;
	}

 ?>