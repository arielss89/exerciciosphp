<?php

	$bm = $_POST['bm'];
	$bn = $_POST['bn'];
	$h = $_POST['h'];
	$aTrapezio = (($bm+$bn)/2)*$h;
	echo 'A altura do trapezio é '. $aTrapezio;
	
?>