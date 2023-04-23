<?php

class Calculadora{
    private $total; 
    private $peso;
    private $altura;

    public function setPeso($parametro_peso){
        $this->peso = $parametro_peso;
    }
    public function setAltura($parametro_altura){
        $this->altura = $parametro_altura;
    }
    public function calcular(){
        $this->total = $this->peso / ($this->altura*$this->altura);
    }
    public function getTotal(){
        return $this->total;

    }

}

?>