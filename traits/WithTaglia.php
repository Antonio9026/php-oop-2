<?php
trait WithTaglia
{
    private $peso;

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        if ($peso <= 1) {
            throw new Exception("prodotto non disponibile");
        }
        $this->peso = $peso;
        return $this;
    }
}
