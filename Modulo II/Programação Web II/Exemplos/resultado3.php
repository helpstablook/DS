<?php
//declaação variaveis para base, altura e pegar os valores
$base = $_GET['base'];
$altura = $_GET['altura'];
//callcula a area
$area = $base * $altura;
//exibe a area do retangulo
echo '<h1> Área: '.$area.'</h1>';
?>