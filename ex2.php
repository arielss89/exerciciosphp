<?php

	$n = $_POST['nome'];
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	echo 'Su nombre es '.$n.' e sua média na disciplina de programação em php é: '. ($n1+$n2)/2;
	
?>