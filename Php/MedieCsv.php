<?php

if (file_exists("medie.csv")) {
    echo "Il file CSV esiste <br/>";
   } else {fopen("medie.csv","w");}

$file = fopen("dati.csv", "r");
$temp = "";
while(($data = fgets($file)) !== false) {
 $array = explode(";",$data,76);
 $media = 0;
 for($i = 0; $i < count($array);$i++)
 {
    $media += $array[$i];
 }
 $temp .= sprintf("%.4e",$media/count($array))."\n";
 $f = fopen("medie.csv", "w");
 fwrite ($f,$temp);
 fclose($f);
}
$temp = "";
fclose($file);
$file = fopen("medie.csv", "r");
$str = "";
while(($data = fgets($file)) !== false) {
    $str.= $data.'<br/><br/>';
}
fclose($file);
echo $str;







?>