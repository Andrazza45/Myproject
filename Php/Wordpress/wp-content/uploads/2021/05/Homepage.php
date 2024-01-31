<?php
// Start the session
session_start();
?>


<?php
$Matricola = $_SESSION["Matricola"] ;
$testo = "Benvenuto $Matricola nella homepage";
 
$myconn = mysqli_connect('localhost', 'root', '', 'comunicati');
$result= mysqli_query($myconn,"SELECT matricola, oggetto, datarichiesta, codsettoredest, testo FROM richiesta WHERE matricola = '$Matricola'");
$result = mysqli_fetch_assoc($result);
//visualizzazione delle richieste del suo settore, le sue risposte e quelle date dai suo colleghi
//mettere un check sulle richieste con risposta
?>

<HTML>
<HEAD>
<TITLE>Homepage</TITLE>
</HEAD>
<BODY>
<H3>
<?php
 echo $testo;
 $Table="<table border='1' bgcolor='Grey'>";
$Table= $Table  . "<tr>   <th>Mie richieste</th>";
$Table= $Table  . "       <th>Mie Risposte</th>   </tr>";

//.........
			$Table= $Table . "</table>";
			echo $Table;
?>
</H3>
<a href="http://localhost/Richiesta.php">Richiesta</a>
</BODY>
</HTML>