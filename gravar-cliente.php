<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            //resgatando os dados do form
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $marca = $_POST["marca"];
            
            //Abrindo a conexão com o banco
            //$con = mysqli_connect("localhost","root","","agua");
            
            include_once 'conexao.php';
            
            //Montando a instrução sql de gravação
            $sql = "insert into cliente values(null,'".$nome."','".$endereco."','".$telefone."','".$marca."')";
            
            //Enviar o código sql para o banco
            if(mysqli_query($con, $sql)){
                $msg = "Gravado com sucesso!";
            }else{
                $msg = "Erro ao gravar!";
            }            
            mysqli_close($con);
        ?>
        
        <script>
            alert('<?php echo $msg; ?>');
            location.href="index.php"; //redirecionamento em javascript 
        </script>
        
        
        
    </body>
</html>
