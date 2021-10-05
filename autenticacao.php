<?php

    session_start(); 
    
    //se NÃO(!) existir a sessao nome, destroi a sessão e redireciona para a in
    if(!isset($_SESSION["nome"])){
        session_destroy();            
        $msg = "Acesso negado!";    
        header("location:index.php?msg=".$msg);
    }
    
?>