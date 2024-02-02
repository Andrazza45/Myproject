<?php
include "Studente.php";
$s = new Studente("Andrea","Azzalin","andrea.azzalin@gmail.com","20/02/2002");
$s ->addCorso("PHP_programming");

var_dump($s);

?>