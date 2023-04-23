<?php

class Calculadora{
    private $nota1; 
    private $nota2;
    private $total;

    public function setNota1($parametro_nota1){
        $this->nota1 = $parametro_nota1;
    }
    public function setNota2($parametro_nota2){
        $this->nota2 = $parametro_nota2;
    }
    public function calcular(){
        $this->total =($this->nota1 + $this->nota2)/2;
    }
    public function getTotal(){
        return $this->total;

    }

}

?>