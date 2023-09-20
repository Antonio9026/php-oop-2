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
$gioco1 = new Giochi("Palla da fiuto",200,15.99,"https://m.media-amazon.com/images/I/61RKXiv7IrL._AC_SL1001_.jpg","multicolor",$Cane);
var_dump($gioco1);
$gioco2 = new Giochi("Eroga snack",320,12.58,"https://m.media-amazon.com/images/I/81ErEO46o8L._AC_SL1500_.jpg","azzurro",$Cane);
$gioco3 = new Giochi("Tiragraffi ad albero per gatti, ",00,50.99,"https://m.media-amazon.com/images/I/81ErEO46o8L._AC_SL1500_.jpg","beige",$Gatto);
$gioco4 = new Giochi("Trixie Spielmaus",0.2,1.79,"https://m.media-amazon.com/images/I/814W5ruzwpL._AC_SL1500_.jpg","grigio",$Gatto);
?>