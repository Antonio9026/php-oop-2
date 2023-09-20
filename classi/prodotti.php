<?php
require_once __DIR__ . "/categorie.php";


class Prodotti{
   private $titolo;
   private $peso;
   private $prezzo;
   private $categoria;


   public function __construct($titolo,$peso,$prezzo, $categoria) {

   
    $this->setTitolo($titolo);
    $this->setPeso($peso);
    $this->setPrezzo($prezzo);
    $this->setCategoria($categoria);
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
    return $this->prezzo;
   }
   public function setPrezzo($prezzo){
     $this->prezzo = $prezzo;
     return $this;
   }
   public function getCategoria(){
    return $this->categoria;
   }
   public function setCategoria($categoria){
     $this->categoria = $categoria;
     return $this;
   }
 

}



?>
