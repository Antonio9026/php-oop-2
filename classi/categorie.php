<?php 

class Categoria{

    private $nome;
    private $icona;


  public function __construct($nome,$icona) {
  
  }

  public function getNome(){
    return $this->nome;
   }
   public function setNome($nome){
     $this->nome = $nome;
     return $this;
   }
   
}