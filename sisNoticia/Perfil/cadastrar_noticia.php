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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar Noticia</h2>
<form action="../config/processar_cad_noticia.php"method="post" enctype="multipart/form-data">
<p><input type ="text" name="titulo" placeholder="Digite o Título da Noticia" require></p>
<p><textarea name="noticia" rows="5" require placeholder="Digite a Noticia"></textarea></p>
<p><input type="file" name="imagem" accept="imagem/*" required></p>
<p><button type="submit">Cadastrar Noticia</button></p>

</form>
</body>
</html>