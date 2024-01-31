<?php
/**
 * Classe di esempio
 * @author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
//declare(strict_types=1);

class Studente {
    public $nome;
    public $cognome;
    public $email;
    public $dataDiNascita;
    protected $corsi = [];

    public function Studente($Nome,$Cognome,$Email,$DataDiNascita)
    {
        $this ->nome = $Nome;
        $this ->cognome = $Cognome;
        $this ->email = $Email;
        $this ->dataDiNascita = $DataDiNascita;
    }



    public function addCorso($corso)
    {
        if (!isset($this->corsi[$corso])) {
            $this->corsi[$corso] = 0;
        }

    }

    public function addVotoEsame($corso,$voto)
    {
        if (isset($this->corsi[$corso])) {
            $this->corsi[$corso] = $voto;
        }
    }

    public function getMediaEsami()
    {
        if (empty($this->corsi)) {
            return null;
        }
        return array_sum($this->corsi) / count($this->corsi);
    }
}