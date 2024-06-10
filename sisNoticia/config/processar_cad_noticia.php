<?php   
session_start();
//Verifica se o usuario esta logado

if(!isset($_SESSION["usuario_id"])){

//Se Sessão com login nao existir
header ("Location: ../index.php"); //Redireciona para o index
exit();

}
 
require_once("../config/database.php");

//Captura e sanaliza os dados

$titulo = htmlspecialchars($_POST['titulo'], ENT_QUOTES,"UTF-8");
$noticia = htmlspecialchars($_POST['noticia'], ENT_QUOTES,"UTF-8");

//Processamento de imagem

$titulo = htmlspecialchars($_POST['titulo'], ENT_QUOTES, "UTF-8");
$noticia = htmlspecialchars($_POST["noticia"], ENT_QUOTES, "UTF-8");

$imagem_temp = $_FILES["imagem"]["tmp_name"];
// captura a extensao da imagem
$extensao = pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION);
// Gere um nme unico [
$nome_imagem = uniqid().".".$extensao;

//Move a imagem da pasta temporaria para a pasta que queremos
move_uploaded_file($imagem_temp, "../perfil/img/".$nome_imagem);


//Cadastras no Banco de dados a noticia

try{
$stmt = $conn->prepare("INSERT INTO noticias (titulo,noticia,imagem) values (:titulo,:noticia,:imagem)");
$stmt -> bindParam(":titulo",$titulo);
$stmt -> bindParam(":noticia",$noticia);
$stmt -> bindParam(":imagem",$nome_imagem);

echo"Noticia Cadastrada com sucesso !";

echo "<meta http-equiv='refresh' content='5;../config/perfil/cadastrar_noticia.php'>";



} catch(PDOException $e){

    echo "erro ao cadastrar a noticia".$e->getMessage();

}

?>
