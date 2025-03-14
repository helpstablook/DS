<?php
    //captura o valor usando $_GET
    //atribui em variaveis
    //$nome = $_GET['usuario'];
    //$email = $_GET['email'];
    //exibe os dados
    //echo '<h3>Bem vindo, '.$nome.'</h3>
    //<h4>Seu e-mail: '.$email.'</h4>';
    //captura o valor usando $_POST
    //atribui em variaveis
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    //exibe os dados
    echo '<h3>Bem vindo, '.$nome.'</h3>
    <h4>Seu e-mail: '.$email.'</h4>';
?>
