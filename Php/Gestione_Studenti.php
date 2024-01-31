<?php


public class Studente{
const MAX_ESAMI = 20;
protected $nome = "";
protected $cognome = "";
protected $email = "";
protected $voti = [null,null,null];// Si può sostituire l'array con un'array associativo
protected $esami = ["A","B","PHP_Programming"];
protected $classe = "";

public function Studente($Cognome, $Nome, $Email, $Classe)
{
$this -> nome = $Nome;
$this -> cognome = $Cognome;
$this -> email = $Email;
$this -> classe = $Classe;
}
public function AddEsame($esame)
{
	if(count($this ->esami) < Studente ::MAX_ESAMI)
    {
    array_push($this ->esami, $esame);
	array_push($this ->voti, null);
	}
    return $this ->esami;
}


public function AddVoto($voto)
{
    if($this ->voti[count($this ->voti)- 1] == 0)
    {
    array_push($this ->voti, $voto);
	return $this ->voti;
	}
    else{$array = [];return $array;}
}
//Da fare
public function set_voto($esame,$voto)
{
	$index = -1;
	for($i = 0; $i < count($this->esami);$i++)
	{
		if($this->esami[$i] == $esame)
		{
			$index = $i;
			$i = count($this->esami);
		}
	}
	if($index != -1)
	  {$this ->voti[$index] = $voto;return 1;}
	else{
	return $index;}
}




public function MediaVotiEsami()
{
 if(Count($this ->voti) != 0)
 {
 $media = 0;
 $c = 0;
 for($i = 0; $i < count($this ->voti);$i++)
    {
		if($this ->voti[$i] != null)
		{
        $media += $this ->voti[$i];
		$c++;
		}
    } 
 return $media /$c;
}else{return -1.0;}
}

public function __getNome()
{
    return $this->nome;
}

public function __getCognome()
{
    return $this->cognome;
}

public function __getVoti()
{
    return $this->voti;
}

public function __getClasse()
{
    return $this->classe;
}

public function __toString()
{
	$s = "";
    $s .= $this->nome.$this->cognome.$this->classe."<br/>"."Voti:"."<br/>";
	for($i = 0; $i < count($this ->voti);$i++)
	{
		$s .= $this ->voti[$i]."<br/>";
	}
	return $s;
} 
public abstract function main(ICT $o);
// {
	// $o ->AddEsame("Fisica");
    // if(Count($o ->AddVoto(8))-1 != -1)
    // {
     // echo "Voto Aggiunto!";
    // }
    // else{echo "Array Pieno!";}
    // echo '<br/>';
	// if($o ->set_voto("B",8) == 1)
	   // echo "Voto settatto correttamente";
    // else{echo "Opereazione fallita";}
	// echo '<br/>';
    // if($o ->MediaVotiEsami() != -1.0)
    // {
    // echo printf("La Media dei voti è: %.1f",$o ->MediaVotiEsami());
    // }else{echo "Non ci sono voti!";}
// }
}



// $s = new Studente("Azzalin","Andrea","andrea.azzalin02@gmail.com","3B");
// $s->main($s);

?>