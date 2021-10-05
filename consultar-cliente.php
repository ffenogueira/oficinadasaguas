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
            
            <h1>Consulta de Clientes</h1>
            
            <form action="consultar-cliente.php" method="get" class="form-inline">
                
                <label>
                    Nome: <input type="text" name="nome" class="form-control">
                </label>
                
                <input type="submit" value="Consultar" class="btn btn-success">
                
            </form>
            
            <hr>
            
             <?php
                //isset() -> se existe
                if(isset($_GET["nome"])){
                    $nome = $_GET["nome"];
                    
                    //abrindo a conexao
                    include_once 'conexao.php';

                    $sql = "select * from cliente where nome like '".$nome."%' order by nome";
                    
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
                                <th>Editar</th>
                                <?php if($_SESSION["perfil"] == "adm"){ ?>
                                    <th>Excluir</th>
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
                                <td><a href="editar-cliente.php?id=<?php echo $row["idcliente"];?>" class="btn btn-warning">!</a></td>
                               
                                <?php if($_SESSION["perfil"] == "adm"){ ?>
                                
                                <td><a href="#" onclick="excluir(<?php echo $row["idcliente"];?>,'<?php echo $row["nome"];?>')" class="btn btn-danger">X</a></td>

                                
                                
                                <?php } ?>
                                
                                
                            </tr>
                            <?php
                        }
                        
                    }else{
                        echo "Nenhum cliente encontrado!";
                    }
                    
                }
                
             ?> 
            
        </div>
        
         
    </body>
    <a style=" margin-left: 10px;" class="btn btn-link"href="painel.php">Voltar ao início</a>
</html>
