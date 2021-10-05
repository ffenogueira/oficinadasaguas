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
        
        <?php 
            //veio através do botao "!" editar. (editar-cliente.php?id=1)
            $id = $_GET["id"];
                        
            include_once 'conexao.php';
            
            $sql = "select * from cliente where idcliente = ".$id;
            
            $result = mysqli_query($con, $sql); //executa a consulta
            
            //coloca na variável $row os valores da consulta
            $row = mysqli_fetch_array($result);
            
        ?>
        
        
        <div class="container">
            
            <h1>Alteração de Cliente</h1>
            
            <form action="atualizar-cliente.php" method="post">            
                
                <input type="hidden" name="id" value="<?php echo $row["idcliente"];?>">               
                
                <label>
                    Nome:<br>
                    <input type="text" name="nome" required class="form-control" value="<?php echo $row["nome"];?>">
                </label>
                <br>
                
                <label>
                    Endereço:<br>
                    <input type="text" name="endereco" required class="form-control" value="<?php echo $row["endereco"];?>">
                </label>
                <br>
                
                <label>
                    Telefone:<br>
                    <input type="tel" name="telefone" maxlength="11" required class="form-control" value="<?php echo $row["telefone"];?>" pattern="[0-9]{11}" placeholder="( )_____-____">
                </label>
                <br>
                <label>
                    Marca d'água:<br>
                    <select name="marca"  class="form-control required">
                        <option value="<?php echo $row["marca"];?>"><?php echo $row["marca"];?></option>
                        <option value="Serra Fluminense">Serra Fluminense</option>
                        <option value="Cascataí">Cascataí</option>
                        <option value="Lyndoia Jóia">Lindoya Jóia</option>
                        <option value="Raposo">Raposo</option>
                        <option value="Serra 10L">Serra 10L</option>
                    
                    </select>
                </label>
                
                <input type="submit" value="Atualizar" class="btn btn-primary">
                
            </form>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
