<?php
session_start();
//Verifica se o usuario esta logado

if(!isset($_SESSION["usuario_id"])){

//Se Sessão com login nao existir
header ("Location: ../index.php"); //Redireciona para o index
exit();

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Contruir local para trazer os dados do banco -->
<div>
    <h2>Painel do Usuario </h2>
    <p>
  Bem vindo, <?php echo $_SESSION["usuario_nome"]; ?>
    </p>

    <p>
    <a href="../config/logout.php">Sair</a>
    <a href="cadastrar_noticia.php">Cad Noticia</a>
    </p>

</div>
</body>
</html>