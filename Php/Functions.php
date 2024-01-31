<?php
namespace Functions {

class Tastiera {

public function InserisciIntero($str) {
$intero = "";
$criterio = false;
$count = 0;
while($criterio == false) {
echo($str);
$intero = readline();
$chr = str_split($intero);
for($i = 0; $i < count($chr); $i ++) {
if($chr[$i] == '-') {
$count += 1;
}
if(ord($chr[$i]) >= 48 and ord($chr[$i]) <= 57 and $count == 0 or $count == 1 ) {
$criterio = true;
}
else {
$criterio = false;
$i = count($chr);
}
}
}
return intval($intero);
}

public function InserisciDouble($str) {
$criterio = false;
$nd = "";
while($criterio == false) {
echo($str);
$nd = readline();
$count = 0;
$chr = str_split($nd);
for($i = 0; $i < count($chr); $i ++) {
if($chr[$i] == '.') {
$count += 1;
}
if(ord($chr[$i]) >= 48 and ord($chr[$i]) <= 57 and $count == 1 ) {
$criterio = true;
}
else {
$criterio = false;
$i = count($chr);
}
}
}
return floatval($nd);
}

}

}
?>