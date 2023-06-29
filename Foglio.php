
<?php
 class Foglio
{

    private  $path_csv;
    private  $path;

    public function Set_path($path):void
    {
        $this->path = $path;
    }


    public function Set_pathcsv($path_csv):void
    {
        $this->path_csv = $path_csv;
    }


    public function leggi_file_csv(): string
    {
        $file = fopen($this->path_csv, "r");
        $str = "";
        while(($data = fgets($file)) !== false) {
        
        $str .= $data;
        }
        fclose($file);
        return $str;
    }


    
    public function Scrivi_Medie(): void
    {   
        $media = 0;
        $file = $this->leggi_file_csv($this->path_csv);
        $riga = explode("\n", $file);
        for($i = 0; $i < count($riga);$i++)
        {
            $array = explode(";", $riga[$i]);
            for($j = 0; $j < count($array);$j++)
            {
             $media += $array[$j];
            }
            $filew = fopen($this->path,"w");
            file_put_contents ($this->path,sprintf("%.4e",$media/count($array)).'\n');
            fclose($filew);
        }

      }
      public function MediaMensile(): float
      {   
          $media = 0;
          $i = 0;
          $filew = fopen($this->path,"w");
          while(($data = fgets($filew)) !== false) {
          {
            $media += float_val($data);
            $i+=1;
          }
          fclose($filew);
          return $media/$i;
        }
        
    }
}

?>