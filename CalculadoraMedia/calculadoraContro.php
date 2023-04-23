<?php
require_once './calculadoraEntidade.php'; //juntar a execução do objeto que está no arquivo Entidade.
$nota1 = @$_POST['nota1']; //recebendo o valor digitado pelo usuário pelo formulário.
$nota2 = @$_POST['nota2']; //recebendo o valor digitado pelo usuário pelo formulário.
$operacao = @$_POST['operacao']; //faz a operação dos dados digitados pelo usuário.
$nome = @$_POST['nome'];

$calculadora = new Calculadora(); //instanciando o objeto para utilizar.

$calculadora->setNota1($nota1); //envia o valor1 para o objeto na memória.
$calculadora->setNota2($nota2); //envia o valor2 para o objeto na memória.

switch($operacao){
    case 'calcular':
        $calculadora->calcular();
    break;


    default: 
    break;
}
echo 'Nome: '.$nome;
echo '<span style="margin-left:150px; ">Média é: ' . $calculadora->getTotal();

if($calculadora->getTotal() < 4){
    echo '<span style="margin-left:150px; ">Reprovado';
}elseif($calculadora->getTotal() >= 4 && $calculadora->getTotal() < 6 ){
    echo '<span style="margin-left:150px; ">Exame final';
}else{
    echo '<span style="margin-left:150px; ">Aprovado';
}



?>