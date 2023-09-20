<?php

class Cibo extends Prodotti {
    private $img;
   private $scadenza;



public function __construct($titolo,$peso,$prezzo,$img,$scadenza) {

    parent::__construct($titolo,$peso,$prezzo);
  $this->setImg($img);
  $this->setScadenza($scadenza);
}


public function getImg(){

    return $this->img;
}
public function setImg($img){
    $this->img = $img;
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
$cibo1 = new Cibo("crocchette",4,24.99,"https://zooplanet.it/wp-content/uploads/2020/11/Cibo-per-cani-1.png","26/02/90");
var_dump($cibo1)
?>