<?php
if(isset ($_GET['Rdbf']))
{
$sesso = "♀";
}
if(isset ($_GET['Rdbm']))
{
$sesso = "♂";
}

$c = $_GET['txtcognome'];
$n = $_GET['txtnome'];
$e = $_GET['Nmbeta'];
$email = $_REQUEST['txtemail'];
$prefix = $_GET['prefix'];
$number = $_GET['txtcell'];
$cell = $prefix.$number;
$cp = $_GET['capelli'];
$co = $_GET['occhi'];
$P = $_GET['Nmbpeso'];
$H = $_GET['Nmbaltezza'];
$mission = $_GET['txtmissione'];
$bio = $_REQUEST['textA'];

$result = array("sesso" => $sesso ,"cognome" => $c,"nome" =>$n ,"eta" =>$e ,"email" =>$email,
"cellulare" =>$cell,"capelli" => $cp,"occhi" =>$co,"peso" =>$P,"altezza" =>$H,"missione" =>$mission,"bio" =>$bio);

echo "<table border ='1' bgcolor='Green'>";
echo "<tr>";   
echo "<th>Sesso</th>";
echo "<th>Cognome</th>";
echo "<th>Nome</th>";
echo "<th>Età</th>";
echo "<th>Email</th>";
echo "<th>Cellulare</th>";
echo "<th>Capelli</th>";
echo "<th>Occhi</th>";
echo "<th>Peso</th>";
echo "<th>Altezza</th>";
echo "<th>Missione</th>";
echo "<th>Bio</th>";
echo "</tr>";
while($row = $result)
{
	echo "<tr>";
	echo "<td>".$row['sesso']."</td>";
	echo "<td>".$row['cognome']."</td>";
	echo "<td>".$row['nome']."</td>";
	echo "<td>".$row['eta']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['cellulare']."</td>";
	echo "<td>".$row['capelli']."</td>";
	echo "<td>".$row['occhi']."</td>";
	echo "<td>".$row['peso']."</td>";
	echo "<td>".$row['altezza']."</td>";
	echo "<td>".$row['missione']."</td>";
	echo "<td>".$row['bio']."</td>";
	echo "</tr>";
	break;
}
echo "</table> <br>";
?>