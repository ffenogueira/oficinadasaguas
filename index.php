<?php 
    session_start();
    //se o usuário já estiver logado, redireciona para o painel 
    //ao invés de exibir novamente a tela de login
    if(isset($_SESSION["nome"])){
        header("location:painel.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        
        <div  style=" width:400px; height:450px ; margin-top: 20px; text-align: center; border: 5px #269abc solid"    class="container">
            <br>
        <img  style="width: 300px; height: 200px;"src="onlinelogomaker-052416-0126.png">
        <br>
        <br>
        <br>

            
            <form action="verificar-login.php" method="post">
                <label>
                    Login:<br>
                    <input type="text" name="login" class="form-control" required>
                </label>
                <br>
                
                <label>
                    Senha:<br>
                    <input type="password" name="senha" class="form-control" required>
                </label>
                <br>
                
                <input type="submit" value="Entrar" class="btn btn-primary">
            </form>
            
            
            <?php 
                if(isset($_GET["msg"])){
                    echo $_GET["msg"];                     
                }
            ?>
            
            
        </div>
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
