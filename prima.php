<?php
#phpinfo();
echo "hello world <br/>";
define('versione', "kappa");
echo versione;
echo"<br/>";
echo "File     : ".__FILE__."<br/>";
echo "Directory: ".__DIR__."<br/>";
echo "Linea    : ".__LINE__."<br/>";
echo "Max   :".PHP_INT_MAX."<br/>";
echo "Min   :".PHP_INT_MIN."<br/>";
echo  (234 + 45.6);
echo (1234 - 23.12);
for ($i = 6789, $j = 0; $i > 0 ; $j ++)
{
    $i -= 123;
}
echo $j;
for($i = 234, $j = 0; $i < 3451; $j++ )
{
    $i += $i;
}
echo $i;

for($i = 3452, $j = 0; $i > 0; $j++)
{
  $i -= 245;
  $r = $i;
}
echo $r;
$array = [12,45,37,24];
$ris = ""
for($i = 0;$i < $array.Length;$i++)
    {
     if($i % 2 == 0)
        {ris += ($array[i]).ToString();}
    }
echo $ris;
function int Conversioni($decimale,$tipo)
{
    switch($tipo)
    {
        case 'O':
                 for($i = $decimale, $j = 0; $i > 0; $j++)
                 {
                    $i -= 2;
                    $r = ;
                 }
                 break;
        case 'B':

                 break;
        case 'F':

                 break;
    }
}
$s = "Nel mezzo del cammino di nostra vita";

$str = "";
for($i = 0; $i < $s.Length;$i++)
{

    $s[i + 1].ucfirst();

    $str += $s;
}
echo $str;
 ?>