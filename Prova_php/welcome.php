<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    
</head>
<body>
    <div class="page-header">
        <h1>Olá, Professor da <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem vindo a área de Cadastro de Livros.</h1>
    </div>
    <div class="wrapper">
        <h3><b>Cadastro de Livros<br></b>
        <br>
        <p>Favor inserir os Dados do livro.</p>
        <br>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label>Titulo</label>
                <input type="text" name="titulo" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Editora</label>
                <input type="text" name="editora" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Ano</label>
                <input type="date" name="ano" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            
        </form>
        <form action="leitura.php" method="post">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar Livros Cadastrados">
            </div>
        </form>
    
    </div>    
    <p>
        <!-- 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        -->
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
        
    </p>
</body>
</html>