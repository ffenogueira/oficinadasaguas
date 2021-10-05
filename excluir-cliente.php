<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $id = $_GET["id"];
        
            include_once 'conexao.php';
            
            $sql = "delete from cliente where idcliente = ".$id;
            
            if(mysqli_query($con, $sql)){
                $msg = "Cliente excluído com sucesso!";
            }else{
                $msg = "Erro ao excluir cliente";
            }
            mysqli_close($con);            
        ?>
            <script>
                alert('<?php echo $msg; ?>');
                location.href = "index.php";
            </script>
        
    </body>
</html>
