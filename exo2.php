<?php

	$pays_franco= array("France","Belgique","Monaco","Suisse","Luxembourgh");
	$bool=false;
	$pays=readline("TU VIENS D'OU WESH ????????        \n");
	foreach($pays_franco as $index => $payf){
		if($payf==$pays){
			$bool=true;
			break;
		}
	}
	if($bool){
		echo "tu parles français wesh!\n";
	} else {
		echo "ovazy boloss\n";
	}
?>
