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
$mat1 = array();
		  $l = count($mat[0]);
		  $h = count($mat);
		  $c = 0;
		 if($h >= $l)
		 {
			for ($i = 0; $i < $l + 1; $i++) {
				$mat1[$i] = array();
				for ($j = 0; $j < $h - 1; $j++) {
					$mat1[$i][$j] = 0;
				}
			}
			
			while($c < $l*$h )
			for($i =0; $i < $h; $i++)
			{

				for($j =0; $j < $l; $j++)
				{
					$mat1[$j][$i] = $mat[$i][$j];
				}
				$c+= $l;
			}
			
			
		for($i = 0; $i < $h-1;$i++)
		{
		for($j = 0; $j < $l +1; $j++)
		{
			echo $mat1[$i][$j]." ";
		}
		 echo '<br/>';
		}
		 echo '<br/>';
				
		 } 
		 else{
			 for ($i = 0; $i < $h +1; $i++) {
				$mat1[$i] = array();
				for ($j = 0; $j < $l - 1; $j++) {
					$mat1[$i][$j] = 0;
				}
			}
			while($c < $l*$h )
			for($i =0; $i < $h; $i++)
			{

				for($j =0; $j < $l; $j++)
				{
					$mat1[$j][$i] = $mat[$i][$j];
				}
				$c+= $l;
			}
			
			for($i = 0; $i < $h+1;$i++)
			{
			 for($j = 0; $j < $l - 1; $j++)
				{
				 echo $mat1[$i][$j]." ";
				}
				 echo '<br/>';
			}
				 echo '<br/>';
		 } 
			 
		
function array_transpose($array) {
  return call_user_func_array('array_map', array_merge([null], $array));
}
		$t = array_transpose($mat);
		for($i = 0; $i < count($t); $i++)
		{
			echo implode(" ",$t[$i]).'<br/>';
		}
		
?>