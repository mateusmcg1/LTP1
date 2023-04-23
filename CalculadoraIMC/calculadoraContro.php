<?php
require_once './calculadoraEntidade.php'; //juntar a execução do objeto que está no arquivo Entidade.
$peso = @$_POST['peso']; //recebendo o valor digitado pelo usuário pelo formulário.
$altura = @$_POST['altura']; //recebendo o valor digitado pelo usuário pelo formulário.
$operacao = @$_POST['operacao']; //faz a operação dos dados digitados pelo usuário.

$calculadora = new Calculadora(); //instanciando o objeto para utilizar.

$calculadora->setPeso($peso); //envia o valor1 para o objeto na memória.
$calculadora->setAltura($altura); //envia o valor2 para o objeto na memória.

switch($operacao){
    case 'calcular':
        $calculadora->calcular();
    break;


    default: 
    break;
}

echo '<span style="margin-left:150px; ">IMC é:' . $calculadora->getTotal();

if($calculadora->getTotal() < 17){
    echo '<span style="margin-left:150px; ">Muito abaixo do peso';
}elseif($calculadora->getTotal() >= 17 && $calculadora->getTotal() < 18.49){
    echo '<span style="margin-left:150px; ">Abaixo do peso';
}elseif($calculadora->getTotal() >= 18.5 && $calculadora->getTotal() < 24.99){
    echo '<span style="margin-left:150px; ">Peso normal';
}elseif($calculadora->getTotal() >= 25 && $calculadora->getTotal() < 29.99){
    echo '<span style="margin-left:150px; ">Acima do peso';
}elseif($calculadora->getTotal() >= 30 && $calculadora->getTotal() < 34.99){
    echo '<span style="margin-left:150px; ">Obesidaded 1';
}elseif($calculadora->getTotal() >= 35 && $calculadora->getTotal() < 39.99){
    echo '<span style="margin-left:150px; ">Obesidade 2';
}else{
    echo '<span style="margin-left:150px; ">Obesidade 3';
}



?>