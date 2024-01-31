<?php
include "Studenti.php";
class ICT extends Studente
{
    private $mat;
    private $anno;

    public function ICT($cognome,$nome,$email,$classe,$mat,$anno)
    {

        $this -> mat = $mat;
        $this -> anno = $anno;

        parent::Studente($cognome,$nome,$email,$classe);
    }
	public function ToString()
	{
		return  'Cognome: '.$this->cognome.' Nome: '.$this->nome.' Email: '.$this->email.' Classe: '.$this->classe.' Matricola: '.$this->mat.' Anno: '.$this->anno.'<br/>';
	}
	
	public function main(ICT $o)
	{
	echo $o->ToString();	
		
	$o ->AddEsame("Fisica");
    if(Count($o ->AddVoto(8))-1 != -1)
    {
     echo "Voto Aggiunto!";
    }
    else{echo "Array Pieno!";}
    echo '<br/>';
	if($o ->set_voto("B",8) == 1)
	   echo "Voto settatto correttamente";
    else{echo "Opereazione fallita";}
	echo '<br/>';
    if($o ->MediaVotiEsami() != -1.0)
    {
    echo printf("La Media dei voti è: %.1f",$o ->MediaVotiEsami());
    }else{echo "Non ci sono voti!";}
	}
}

$ict = new ICT("Azzalin","Andrea","andrea.azzalin02@gmail.com","3B","icts22-24.230",2022);
$ict->main($ict);
?>