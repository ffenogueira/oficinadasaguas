<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $marca = $_POST["marca"];
            
            include_once 'conexao.php';
                        
            $sql = "update cliente set nome = '".$nome."', endereco = '".$endereco."', telefone = '".$telefone."', marca = '".$marca."' 
            where idcliente = ".$id;
                        
            if(mysqli_query($con, $sql)){
                $msg = "Atualizado com sucesso!";
            }else{
                $msg = "Erro ao atualizar!";
            }            
            mysqli_close($con);
        ?>
        
        <script>
            alert('<?php echo $msg; ?>');
            location.href="consultar-cliente.php"; //redirecionamento em javascript 
        </script>
        
        
        
    </body>
</html>
