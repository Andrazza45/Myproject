<?php
require "Foglio.php";
class Collezione
{
	
	private $Fogli = [];
	
	public function init($arr)
	
	{
		$this->Fogli = $arr;
	}
	public function Fogli()
	
	{
		return $this->Fogli;
	}
	

	public function add_foglio($path_csv)
	{
	 $f = new Foglio($path_csv,"medie.csv",count($this->Fogli));
	 $f->scrivi_Medie();
	 array_push($this->Fogli,$f);
	 $serializedData = serialize($this->Fogli);
	 file_put_contents('Fogli.dat', $serializedData);
	}
	public function remove_foglio($path)
	{
	 for($i = 0; $i < count($this->Fogli);$i++)
	 {
		 if($this->Fogli[$i]->get_pathcsv() == $path)
		 {
			 array_pop($this->Fogli[$i]);
	         $serializedData = serialize($this->Fogli);
	         file_put_contents('Fogli.dat', $serializedData);
		 }
	 }
	}
	//modifica
	
	public function avg_fogli()
	{
	 $media = 0;
	 for($i = 0; $i < count($this->Fogli);$i++)
	 {
		 $media += $this->Fogli[$i]->mediaGiornaliera();
	 }
	 return $media /count($this->Fogli);
	}	
	public static function Program(Collezione $c)
	{
		 
	 $serializedData = file_get_contents('Paths.dat');
	 $init = json_decode($serializedData);
	 //echo implode(",",$init);
	 
	 if (file_exists('Fogli.dat')) {
     echo "";
     } else {$file = fopen('Fogli.dat',"w");fwrite($file,"a:0:{}");fclose($file);}
	 
	 $serializedData = file_get_contents('Fogli.dat');
	 $fogli = unserialize($serializedData);
	 //echo count($fogli);
	 
	 if(count($fogli) == 0)
	 {
	 for($i = 0; $i < count($init);$i++)
	 {
		 //Aggiungo Foglio
		 $c->add_foglio($init[$i]);
	 }
	 
	 }
	 else
	 {		
	  $c->init($fogli);
	  $file = fopen('medie.csv','w');
	  fwrite($file,"");
	  fclose($file);
	  for($i = 0; $i < count($fogli);$i++)
	  {
		  $fogli[$i]->scrivi_Medie();
	  }
	 }
	 
	  echo 'La media di tutti i fogli è: '. round($c->avg_fogli(),2);
	}
	
}
$c = new Collezione();
$c->Program($c);
//echo var_dump($c->Fogli());
?>