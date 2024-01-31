<?php
class Product {
  private $codice;
  private $prezzo;
  private $quantitaOrdinata;
  private $descrizione;
  private $nomeP;
  private $idProv;
  private $categoria;
  
  public function __construct($codice, $prezzo, $quantitaOrdinata, $descrizione, $nomeP, $idProv, $categoria) {
    $this->codice = $codice;
    $this->prezzo = $prezzo;
    $this->quantitaOrdinata = $quantitaOrdinata;
    $this->descrizione = $descrizione;
    $this->nomeP = $nomeP;
    $this->idProv = $idProv;
    $this->categoria = $categoria;
  }
  
  // Metodi getter e setter per accedere e modificare le proprietà private della classe
  
  public function getCodice() {
    return $this->codice;
  }
  
  public function setCodice($codice) {
    $this->codice = $codice;
  }
  
  public function getPrezzo() {
    return $this->prezzo;
  }
  
  public function setPrezzo($prezzo) {
    $this->prezzo = $prezzo;
  }
  
  public function getQuantitaOrdinata() {
    return $this->quantitaOrdinata;
  }
  
  public function setQuantitaOrdinata($quantitaOrdinata) {
    $this->quantitaOrdinata = $quantitaOrdinata;
  }
  
  public function getDescrizione() {
    return $this->descrizione;
  }
  
  public function setDescrizione($descrizione) {
    $this->descrizione = $descrizione;
  }
  
  public function getNomeP() {
    return $this->nomeP;
  }
  
  public function setNomeP($nomeP) {
    $this->nomeP = $nomeP;
  }
  
  public function getIdProv() {
    return $this->idProv;
  }
  
  public function setIdProv($idProv) {
    $this->idProv = $idProv;
  }
  
  public function getCategoria() {
    return $this->categoria;
  }
  
  public function setCategoria($categoria) {
    $this->categoria = $categoria;
  }
}



?>
