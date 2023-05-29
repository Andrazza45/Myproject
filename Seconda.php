<?php
include("prima.php");
$name = "world";
echo '<br/>';
printf("Hello  %s \n", $name);
sprintf("Hello %s",$name);
echo '<br>';
echo sprintf("%b", 32);
echo '<br>';
echo Conversioni(32,'B').'<br/>';
//matrice trasporta 
$mat = [
		[2,4],
		[24,6],
		[4,12]
		];
?>