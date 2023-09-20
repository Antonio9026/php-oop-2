<?php

class Giochi extends Prodotti {
    private $img;
    private $colore;


    public function __construct($titolo,$peso,$prezzo,$img,$colore) {
        parent::__construct($titolo,$peso,$prezzo);

        $this->setImg($img);
        $this->setColore($colore);
    }

    public function getImg(){
        return $this->img;

    }
    public function setImg($img){
        $this->img = $img;
        return $this;
    }
    public function getColore(){
        return $this->colore;

    }
    public function setColore($colore){
        $this->colore = $colore;
        return $this;
    }

}
$gioco1 = new Giochi("Palla da fiuto",200,"15.99","https://m.media-amazon.com/images/I/61RKXiv7IrL._AC_SL1001_.jpg","multicolor");
var_dump($gioco1);
?>