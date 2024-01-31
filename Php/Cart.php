<?php
namespace Cart;
require "Product.php";
require "Functions.php";

use Functions\Tastiera as keyboard;

class Cart
{
    protected $products = [];

    public function Cart(){}


    public function Add(){
		
	$t = new keyboard();
	
    $Cod = $t->InserisciIntero("Inserisci il codice del prodotto:");
	$Prezzo = $t->InserisciDouble("Inserisci il Prezzo:");
	$Q =  $t->InserisciIntero("Inserisci una quantità:");
	echo "Inserisci la Descrizione:";
	$Desc = readline();
	echo "Inserisci il suo Nome:";
	$Nome = readline();
	$Prov = $t->InserisciIntero("Inserisci il codice Prov:");
	$Categoria = $t->InserisciIntero("Inserisci il codice categoria:");
	$p = new Product($Cod,$Prezzo,$Q,$Desc,$Nome,$Prov,$Categoria);
	array_push($this->products,$p);
	}
	
    public function AddQ($product,$q){
	for($i = 0; $i < count($this->products);$i++)
	{
		if($this->products[$i]->getCodice() == $product)
		{
		$aumento = $this->products[$i]->getQuantitaOrdinata + $q;
		$this->products[$i]->setQuantitaOrdinata($aumento);
		return 1;
		}	
	}
		return -1;
	}
	
    public function RemoveAll(){
	for($i = 0; $i < count($this->products);$i++)
	{
		array_pop($this->products[$i]);
	}
	
	}
	
    public function Remove($product){
		
	for($i = 0; $i < count($this->products);$i++)
	{
		if($this->products[$i]->getCodice() == $product)
		{
		array_pop($this->products[$i]);
		return 1;
		}
	}
	return -1;
	}
	public static function main(Cart $o)
	{
	    $t = new keyboard();
		$menu = "";
		$menu .= "1.Aggiungi Prodotto <br/>"."2.Modifica quantità <br/>"."3.Svuota il carrello <br/>"."4.Rimuovi prodotto <br/>"."5.Termina Programma <br/>";
		$opt = "-1";
		echo $menu;
		while($opt != 5)
		{
		$opt = readline("Scegli un opzione:");
		$opt = intval($opt);
		if($opt == -1)
		{
		switch($opt)
		{
			case 1:$o->Add();echo "Prodotto Aggiunto!";break;
			
			case 2:
					 $prodotto = $t->InserisciIntero("A quale prodotto desideri modificare la quantità?");
					 $q = $t->InserisciIntero("Inserisci quantità:");
					 if($o->AddQ($prodotto,$q)== 1)
					 {echo "Quantità del prodotto ".$prodotto." modificata con successo.";}
					  else{echo "Prodotto non trovato.";}
					  break;
			
			case 3:$o->RemoveAll();echo "Carrello Vuoto!";break;
			
			case 4:
					 $prodotto = $t->InserisciIntero("Quale prodotto vuoi rimuovere?");
					 if($o->Remove($prodotto)== 1)
					 {echo "Prodotto ".$prodotto." eliminato con successo.";}
					 else{echo "Operazione fallita";}
					 break;
			
			case 5:echo "Programma Terminato!";break;
			default:echo "Opzione non valida.";break;
		}
		}
		}	 
	}
	
}
//Program 
$cart1 = new Cart();
$cart1->main($cart1);

?>