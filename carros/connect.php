<?php

    if(!$con = mysqli_connect('localhost','root','','bd_carros')){
        echo "Erro ao se conectar ao banco de dados";
    }
    mysqli_query($con, "Set NAMES utf8");


