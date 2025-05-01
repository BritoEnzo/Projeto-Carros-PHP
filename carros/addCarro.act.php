<?php
    @session_start();
    require('connect.php');
    extract($_POST);
    $msg = "";
    $destino = "location:addCarro.php";
    
    
    if(mysqli_query($con,"INSERT INTO `tb_carros` (`codigo`, `montadora`, `modelo`, `cor`, `ano`, `valor`) VALUES (NULL, '$montadora', '$modelo', '$cor', '$ano', '$valor');")){
        $msg = "<p class='certo'>Registro Criado com sucesso</p>";
    }else{
        $msg = "<p class='erro'>Erro no registro</p>";
    }

    $_SESSION['msg']=$msg;

    header ($destino);

