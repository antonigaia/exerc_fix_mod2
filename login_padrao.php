<?php

    # Variaveis de controle
    $userReal = "admin@admin.com";
    $passReal = "admin";

    # Recebendo os dados do formulário
    $username = $_POST["username"];
    $password = $_POST['password'];    

    # 1º teste: testar o email:
    if($username != $userReal){
        header("location: index.php?msg=access_error");
    }elseif($password != $passReal){
        header("location: index.php?msg=access_error");
    }else{
        //echo "Acesso permitido!";
        header("location: home.php");
    }

?>