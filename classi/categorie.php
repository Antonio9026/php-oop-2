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

