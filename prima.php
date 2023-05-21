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
// echo "Min   :".PHP_INT_MIN.'<br/>';
echo "Size   :".PHP_INT_SIZE."<br/>";

echo  (234 + 45.6).'<br/>';
echo (1234 - 23.12).'<br/>';
for ($i = 6789, $j = 0; $i > 0 ; $j ++)
{
    $i -= 123;
}
echo $j.'<br/>';
for($i = 234, $j = 0; $j < 3451; $j++ )
{
    $i += $i;
}
echo $i.'<br/>';

for($i = 3452, $j = 0; $i > 0; $j++)
{
  $i -= 245;
  if($i > 0)
  {
  $r = $i;
  }
}
echo $r.'<br/>';

$ris = 345;
for($i = 2; $i < 12;$i++)
{
	for($j = 0;$j < 345; $j++)
	{
		$ris += $ris;
	}
}
echo $ris.'<br/>';


$array = [12,45,37,24];
$ris = "";
for($i = 0;$i <count($array);$i++)
    {
     if($array[$i] % 2 == 0)
        {$ris .='|'.$array[$i].'|';}
    }
echo $ris.'<br/>';
function Conversioni($decimale,$tipo)
{
	$str = "";
    switch($tipo)
    {
        case 'O':
				 $j = 0;
				 $r = 0;

				 while($decimale > 0)
				 {
                 for($i = $decimale ; $i - 8 >= 0; $j++)
                 {
					
                    $i -= 8;
                    if($i >= 0)
					{$r = $i;}
				
				 } 
				 if($decimale - 8 >= 0)
				 {$str .= strval($r);}
				 else{$str .= strval($decimale);}
				 $decimale = $j;
				 $j = 0;
				 }
				 $str = strrev($str);
                 break;
        case 'B':
				 $j = 0;
				 $r = 0;
				 while($decimale != 1)
				 {
                 for($i = $decimale ; $i > 0; $j++)
                 {
					
                    $i -= 2;
                    if($i >= 0)
					{$r = $i;}
				
				 } 
				 
				 $str .=strval($r);
				 $decimale -= $j;
				 $j = 0;
				 }
				 $str .= strval(1);
				 $str = strrev($str);
                 break;
        case 'F':
				 $j = 0;
				 $r = 0;

				 while($decimale > 0)
				 {
                 for($i = $decimale ; $i - 16 >= 0; $j++)
                 {
					
                    $i -= 16;
                    if($i >= 0)
					{$r = $i;}
				
				 } 
				 if($decimale - 16 >= 0)
				 {$str .= strval($r).'-';}
				 else{$str .= strval($decimale);}
				 $decimale = $j;
				 $j = 0;
				 }
				 $ex = explode('-',$str,strlen($str));
				 $str = "";
				 for($i = 0; $i < count($ex); $i++)
				 {
					 switch($ex[$i])
					 {
						 case 10:
								 $str .= 'A';
								 break;
						 case 11:
								 $str .= 'B';
								 break;
						 case 12:
								 $str .= 'C';
								 break;
						 case 13:
								 $str .= 'D';
								 break;
						 case 14:
								 $str .= 'E';
								 break;
						 case 15:
								 $str .= 'F';
								 break;
						 default:
								 $str .= strval($ex[$i]);
								 break;
					 }
				 }
				 $str = strrev($str);
                 break;
				 
		case 'Trig':
					$cos = sqrt(1 - pow(sin($decimale),2));
					$str = strval($cos);
					break;
		default: return 'Tipo di conversione inesistente!';break;
    }
	return $str;
}
echo Conversioni(121,'B').'<br/>';
echo Conversioni(7321,'O').'<br/>';
echo Conversioni(432,'F').'<br/>';
echo Conversioni(0.94,'Trig').'<br/>';

$s = "Nel mezzo del cammino di nostra vita";

$str = "";
$s = explode(' ', $s,strlen($s));
for($i = 0; $i <count($s);$i++)
{

    $s[$i] = ucfirst($s[$i]);

    $str .= $s[$i];
}
echo $str;
 ?>