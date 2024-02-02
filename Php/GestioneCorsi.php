<?php
class GestioneCorsi implements CorsiInterface
{
    protected $corsi = [];
    protected $nomi = [];
    public function getMediaCorsi(): float
    {   $media = 0;
        for($i = 0; $i < count($this ->corsi); $i++)
        {
            $media += $this ->corsi[$i];
        }
        return $media/ count($this ->corsi);
    }
    public function addCorso(string $corso): bool
    {
        array_push($this ->nomi,$corso);
        array_push($this ->corsi,null);
        return true;
    }
    public function getCorsi(): array
    {
        return $this ->nomi;
    }
    public function addVoto(string $corso, int $voto): bool
    {
        $index = 0;
        for($i = 0; $i <  $this ->corsi;$i++)
        {
            if($this ->corsi[$i] == $corso)
            {
                $index = $i;
            }
        }
        $this ->corsi[$index] = $voto;
        return true;
    }
}
?>