<?php
require_once __DIR__ . "/categorie.php";
require_once "./traits/WithTaglia.php";

class Prodotti{
    use WithTaglia;
   private $titolo;
   private $prezzo;
   private  $categoria;
  //  private $peso;



   public function __construct($titolo,$peso,$prezzo, $categoria) {

   
    $this->setTitolo($titolo);
    $this->setPrezzo($prezzo);
    $this->setCategoria($categoria);
    $this->setPeso($peso);
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
