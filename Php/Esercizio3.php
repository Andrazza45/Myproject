<?php
$a = 9;
$b = 3;
echo $a > 10 ?: 'Minore uguale';

$ruolo = "nothing";
$utente = "nothing";
$ruolo = isset($utente) ? $utente : 'ospite';


$a = 'b';
$b = 'c';
$c = 'd';
$result = $a;

// echo 1 <=> 1 . '<br/>';//0
// echo 3 <=> 4 . '<br/>';//-1 controlla se è maggiore
// echo 2 <=> 1 . '<br/>';//1

// $a != "" ?? $result = $a; 
// $b != "" ?? $result = $b; 
// $c != "" ?? $result = $c; 

echo '<br/>';
$numero = 80;
$ris = 1;
$str ="";
$prec = 1;
for($i = 0; $i <= $numero; $i++ )
{
 if($i < 2)
 {
 $ris += $i;
 
 }

 if($i == 2)
 {
	 $prec = $ris - $prec;
 }
 if($i >= 2)
 {
	 $ris += $prec;
	 $prec = $ris - $prec;
 }
 if($i != $numero)
 {
    $str .= $ris.',';
 }
 else{
    $str .= $ris.'.';
     }
}
echo $str.'<br/>';


bcadd(3,6,$numero);
$week = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
for($i = 0; $i < count($week); $i ++)
{
    printf("Il valore di week[%d] è %s\n",$i,$week[$i]);
}
?>