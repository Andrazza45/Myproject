<?php

if (file_exists("medie.csv")) {
    echo "Il file CSV esiste";
   } else {fopen("medie.csv","w");}

$file = fopen("dati.csv", "r");
while(($data = fgets($file)) !== false) {
 $array = explode(";",$data);
 $media = 0;
 for($i = 0; $i < count($array);$i++)
 {
    $media += $array[$i];
 }
 fopen("medie.csv","w");
 file_put_contents ('medie.csv',sprintf("%.4e",$media/count($array)).'\n');
}
fclose($file);

$str = "";
while(($data = fgets($file)) !== false) {
    $str.= $data;
}
fclose($file);
echo $str;







?>