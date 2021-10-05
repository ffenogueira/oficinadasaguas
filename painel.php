<?php 
    include_once 'autenticacao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container">
            
            <h1>Painel do Sistema</h1>
            <br>
            <h4>Seja bem vindo(a): <?php echo $_SESSION["nome"]; ?></h4>
            
            <h2>Menu</h2>
            
            <?php 
                if($_SESSION["perfil"] == "adm"){
                    include_once 'menu-adm.php';                 
                }elseif($_SESSION["perfil"] == "user"){
                    include_once 'menu-user.php';                 
                }
            ?>
            
            
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
