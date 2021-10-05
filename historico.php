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
            
            <h1>Histórico de Pedidos</h1>
            
            
            <hr>
            
             <?php
              
                
                    
                    //abrindo a conexao
                    include_once 'conexao.php';

                    $sql = "select * from pedidos ";
                    
                    $result = mysqli_query($con, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        //encontrou                        
                        ?>            
                        <table class="table"> 
                            <tr>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>Marca</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                               
                               
                            </tr>            
                        <?php
                                                
                        while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $row["nome"];?></td>
                                <td><?php echo $row["endereco"];?></td>
                                <td><?php echo $row["telefone"];?></td>
                                <td><?php echo $row["marca"];?></td>
                                <td><?php echo $row["quantidade"];?></td>
                                <td><?php echo $row["data"];?></td>
                               
                                
                                
                            </tr>
                            <?php
                        }
                        
                   
                    
                }
                
             ?> 
            
        </div>
        
         
    </body>
    <a style=" margin-left: 10px;" class="btn btn-link"href="painel.php">Voltar ao início</a>
</html>
