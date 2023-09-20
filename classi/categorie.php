<?php 

class Categoria{

    private $nome;
    private $icona;


  public function __construct($nome,$icona) {
    $this->setNome($nome);
    $this->setIcona($icona);
  }

  public function getNome(){
    return $this->nome;
   }
   public function setNome($nome){
     $this->nome = $nome;
     return $this;
   }
   public function getIcona(){
    return $this->icona;
   }
   public function setIcona($icona){
     $this->icona = $icona;
     return $this;
   }

  
}
$Cane = new Categoria("cane"," <i class='fa-solid fa-dog'></i> ");
var_dump($Cane);
$Gatto = new Categoria("gatto","<i class='fa-solid fa-cat'></i>");
var_dump($Gatto);
