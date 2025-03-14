<?php
header("charset=utf-8");
//coletar os dados e atribuir em variaveis
if(isset($_POST['n1'])&& $_POST['n1']!==''){
    if(isset($_POST['n2'])&& $_POST['n2']!==''){
        if(isset($_POST['n3'])&& $_POST['n3']!==''){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
   
    //calcular a media
            $media = ($n1+$n2+$n3)/3;
    //exibir a media
            echo 'Sua média é: '.number_format($media, 2, ",",".");
        }else{
            echo 'Todas as notas são obrigatórias';
        }
    }else{
        echo 'Todas as notas são obrigatórias';
    }
    
}else{
    echo 'Todas as notas são obrigatórias';
}
?>