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
        <script>
        function numeros( campo )
{
    if ( isNaN( campo.value ) )
        campo.value = campo.value.substr( 0 , campo.value.length - 1 );
}
        </script>
        
        
        <div class="container">
            
            <h1>Cadastro de Cliente</h1>
            
            <form action="gravar-cliente.php" method="post">            
                <label>
                    Nome:<br>
                    <input type="text" name="nome" required class="form-control">
                </label>
                <br>
                
                <label>
                    Endereço:<br>
                    <input type="text" name="endereco" required class="form-control">
                </label>
                <br>
                
                <label>
                    Telefone:<br>
                    <input type="tel" name="telefone" maxlength="11" onkeyup="numeros( this );" required class="form-control" pattern="[0-9]{11}" placeholder="()_____-____">
                </label>
                <br>
                <label>
                    Marca d'água:<br>
                    <select name="marca" class="form-control required">
                        <option value="">Escolha</option>
                        <option value="Serra Fluminense">Serra Fluminense</option>
                        <option value="Cascataí">Cascataí</option>
                        <option value="Lyndoia Jóia">Lindoya Jóia</option>
                        <option value="Raposo">Raposo</option>
                        <option value="Serra 10L">Serra 10L</option>
                    
                    </select>
                </label>
                
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                
            </form>
            <a style=" margin-left: 10px;" class="btn btn-link"href="painel.php">Voltar ao início</a> 
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
