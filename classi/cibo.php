<?php

class Cibo extends Prodotti {
    private $img;
    private $descrizione;
   private $scadenza;



public function __construct($titolo,$descrizione,$peso,$prezzo,$img,$scadenza) {

    parent::__construct($titolo,$peso,$prezzo);
  $this->setImg($img);
  $this->setDescrizione($descrizione);
  $this->setScadenza($scadenza);
}


public function getImg(){

    return $this->img;
}
public function setImg($img){
    $this->img = $img;
    return $this;
}
public function getDescrizione(){

    return $this->scadenza;
}
public function setDescrizione($descrizione){
    $this->descrizione = $descrizione;
    return $this;
}
public function getScadenza(){

    return $this->scadenza;
}
public function setScadenza($scadenza){
    $this->scadenza = $scadenza;
    return $this;
}

}
$cibo1 = new Cibo("Purina Pro Plan"," Light Sterilised All Size Adult Crocchette Cani",14,53.99,"https://m.media-amazon.com/images/I/71duEL4dP6L.__AC_SX300_SY300_QL70_ML2_.jpg","26/02/2030");
var_dump($cibo1);
$cibo2 = new Cibo("Stuzzy","Cibo Umido per Cani Adulti al Gusto Agnello e Risoin Pezzi ",3.3,18.70,"https://m.media-amazon.com/images/I/71681lYCO2L._AC_SL1500_.jpg","26/02/2030");
var_dump($cibo2);
$cibo3 = new Cibo("Venandi Animal","Cibo secco per gatti Premium Salmone senza cereali con un sacco di salmone fresco",1.5,17.62,"https://m.media-amazon.com/images/I/61Td69cmbKL._AC_SL1500_.jpg","26/02/2030");
var_dump($cibo3);
$cibo4 = new Cibo("Purina Felix","Le Ghiottonerie Cibo Umido per Gatti con Manzo, Pollo, Merluzzo e Tonno,",4.2,36.99,"https://m.media-amazon.com/images/I/61Td69cmbKL._AC_SL1500_.jpg","26/02/2030");
var_dump($cibo4);
?>