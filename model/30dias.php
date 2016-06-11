<?php

$dados[0] = array(
    'data'=>'10/06/2016', 
    'descricao'=>'mcdonalds', 
    'categoria'=>'refeição', 
    'tipo'=>'D', 
    'valor'=>24.89);
$dados[1] = array(
    'data'=>'10/06/2016', 
    'descricao'=>'estacionamento', 
    'categoria'=>'veiculo', 
    'tipo'=>'D', 
    'valor'=>8.00);
$dados[2] = array(
    'data'=>'24/06/2016', 
    'descricao'=>'gasolina', 
    'categoria'=>'veiculo', 
    'tipo'=>'D', 
    'valor'=>70.43);


echo json_encode($dados);