<?php
$codfisc = "ZZLNDR02B20A859K";
$codfisc = str_split($codfisc); 
$char = $codfisc[15]; 
function CarattereControllo($char, $codfisc)
{
$Pari = array('0','1','2', '3', '4', '5', '6', '7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$Dispari = array("1","0","5", "7", "9", "13", "15", "17","19","21","1","0","5","7","9","13","15","17","19","21","2","4","18","20","11","3","6","8","12","14","16","10","22","25","24","23");
$alfabeto = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$somma = 0;
for($i = 0; $i < count($codfisc)-1; $i++)
{
   if($i % 2 != 0)
   {
    for($j = 0; $j < count($Pari); $j++)
        if($codfisc[$i] == $Pari[$j])
          {
			  if(ord($Pari[$j]) >=48 and ord($Pari[$j]) <= 57)
			  {$somma += $j;break;}
			   else{$somma += $j - 10 ;break;}
		  }
          
   }
   else{
    for($j = 0; $j < count($Pari); $j++)
        if($codfisc[$i] == $Pari[$j]) 
          {$somma += intval($Dispari[$j]);break;}
          
   }  
}
$r = $somma % 26;
$ch = $alfabeto[$r];
if($char == $ch)
{return "VALIDO";}else{return "NON VALIDO";}
}
printf("%s\n", CarattereControllo($char, $codfisc));
?>