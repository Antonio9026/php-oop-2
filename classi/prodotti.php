<?php
require_once __DIR__ . "/categorie.php";

class Prodotti{
   private $titolo;
   private $peso;
   private $prezzo;


   public function __construct($titolo,$peso,$prezzo) {

   
    $this->setTitolo($titolo);
    $this->setPeso($peso);
    $this->setPrezzo($prezzo);
   
   }

   public function getPeso(){
    return $this->peso;
   }
   public function setPeso($peso){
     $this->peso = $peso;
     return $this;
   }


   public function getTitolo(){
    return $this->titolo;
   }
   public function setTitolo($titolo){
     $this->titolo = $titolo;
     return $this;
   }

  

   public function getPrezzo(){
    return $this->titolo;
   }
   public function setPrezzo($prezzo){
     $this->prezzo = $prezzo;
     return $this;
   }

 

}


 $prodotto1 = new Prodotti( "prodotto1",40, 25);
var_dump($prodotto1)

?>
