<?php 
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
        <script>
            
            function excluir(id,nome){
                
                if(confirm('Deseja realmente excluir o(a) cliente '+nome+'?')){
                    location.href = "excluir-cliente.php?id="+id;
                }
                
            }
        
        </script>
        
    </head>
    <body>
        
        <div class="container">
            
            <h1>PEDIDOS</h1>
            <br><br>
            <form action="pedido-cliente.php" method="get" class="form-inline">
                
                <label>
                    Telefone: <input type="text" name="telefone" class="form-control">
                </label>
                
                <input type="submit" value="Gerar pedido" class="btn btn-primary">
                
            </form>
            
            <hr>
            
             <?php
                //isset() -> se existe
                if(isset($_GET["telefone"])){
                    $telefone = $_GET["telefone"];
                    
                    //abrindo a conexao
                    include_once 'conexao.php';

                    $sql = "select * from cliente where telefone like '%".$telefone."%' order by nome";
                    
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
                                <?php if($_SESSION["perfil"] == "adm"){ ?>
                                    <th>Pedido</th>
                                <?php } ?>
                            </tr>            
                        <?php
                                                
                        while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $row["nome"];?></td>
                                <td><?php echo $row["endereco"];?></td>
                                <td><?php echo $row["telefone"];?></td>
                                <td><?php echo $row["marca"];?></td>
                                 <td><a href="pedido-cli.php?id=<?php echo $row["idcliente"];?>" class="btn btn-primary">PEDIDO</a></td>
                                
                                
                                <?php } ?>
                                
                                
                            </tr>
                            <?php
                        
                        
                    }else{
                        echo "Nenhum cliente encontrado!";
                    }
                    
                }
                
             ?> 
            
        </div>
        
         
    </body>
    <a style=" margin-left: 10px;" class="btn btn-link"href="painel.php">Voltar ao início</a>
</html>
