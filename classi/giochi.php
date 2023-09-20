<?php

class Giochi extends Prodotti {
    private $img;
    private $colore;


    public function __construct($titolo,$peso,$prezzo,$img,$colore,$categoria) {
        parent::__construct($titolo,$peso,$prezzo,$categoria);

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
