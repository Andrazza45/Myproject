
<?php
 class Foglio
{

    private  $path_csv;
    private  $path;
	private $name;
	public function Foglio($path_csv, $path,$i)
	{
		
	if (file_exists($path)) {
    echo "";
   } else {fopen($path,"w");}
   
   	if (file_exists($path_csv)) {
    echo "";
   } else {fopen($path_csv,"w");}
   
   
		$this->path_csv = $path_csv;
		$this->path = $path;
		$this->name = 'Foglio '.$i;
	}
	public function get_pathcsv()
    {
        return $this->path_csv;
    }

    public function set_path($path)
    {
        $this->path = $path;
    }


    public function set_pathcsv($path_csv)
    {
        $this->path_csv = $path_csv;
    }


    public function leggi_file_csv()
    {
        $file = fopen($this->path_csv, "r");
        $str = "";
        while(($data = fgets($file)) !== false) {
        
        $str .= $data."\n";
        }
        fclose($file);
        return $str;
    }


    
    public function scrivi_Medie()
    {   
		$temp = file_get_contents($this->path);
		$temp .= $this->name."\n";
        $media = 0;
        $file = $this->leggi_file_csv($this->path_csv);
        $riga = explode(";\n", $file,9999);
		$filew = fopen($this->path,"w");
        for($i = 0; $i < count($riga);$i++)
        {
			$media = 0;
            $array = explode(";", $riga[$i],100);
            for($j = 0; $j < count($array);$j++)
            {
             $media += $array[$j];
            }
			$temp .= sprintf("%.2f",$media/count($array))."\n";
        }
		    fwrite ($filew,$temp);
			fclose($filew);
      }
	  
      public function mediaGiornaliera()
      {   
          $media = 0;
          $i = 0;
		  $ok = "";
          $file = fopen($this->path,"r");
          while(($data = fgets($file)) !== false) 
          { 
		    if(substr($data,0,8) == $this->name)
			{
				$ok = "ok";
			}
			if($ok == "ok" && substr($data,0,8) != $this->name)
			{
            $media += floatval($data);
			$i+=1;
			if(substr($data,0,6) == "Foglio")
			{
				$ok = "";
			}
            }
			
          }
          fclose($file);
          return $media/$i;
        
        
    }
}

?>