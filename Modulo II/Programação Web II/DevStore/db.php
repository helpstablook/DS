<?php
// servidor do banco
$host = "localhost";
// usuario do mysql que vai acessar o banco
$user = "root";
//senha do usuario
$password = "";
//nome do banco
$dbname = "devstore";
//tenta conectar
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",
    $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch(PDOExcepition $e){
    die("Falha na conexão: ".$e->getMessage());
}
?>