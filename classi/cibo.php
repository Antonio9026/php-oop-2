<?php

class Cibo extends Prodotti {
    private $img;
    private $descrizione;
   private $scadenza;



public function __construct($titolo,$descrizione,$peso,$prezzo,$img,$scadenza,$categoria) {

    parent::__construct($titolo,$peso,$prezzo,$categoria);
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

?>