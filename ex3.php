<?php

	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$resultado = $n1+($n2*0.4);
	echo 'Seu salário é: '.$n1.' e seu salário mais sua comissão é: '. $resultado;
	
?>