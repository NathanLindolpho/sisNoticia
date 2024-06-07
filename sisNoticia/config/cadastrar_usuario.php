<?php

// Sistema para processar os dados do formulário cadastro.html
//Incluir conexão com BD
 
include_once('../config/database.php') ;

// Recebe os dados do formulário
$nome = trim($_POST['nome']);
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

//Verifica pelo Backend se o e-mail está correto
if($email == false)
 {
// Se o E-mail não estiver correto exibir mensagem 
echo "Por Favor, Insira um e-mail valido";
exit();
}
// Captura a senha e criptografa
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

try
{

    $smtp = $conn->prepare("Select count(*) from usuarios where email=:email");
    $smtp->bindParam(":email",$email);
    $smtp->execute();
    $emailExists = (int)$smtp->fetchColumn(); // Obtem o resultado da contagem

    //Verifica se o email existe
    if($emailExists)
    {

        echo "Usuario ja cadastrado! Digite um outro email";
        exit();
    }
    else
    {
        $smtp = $conn->prepare("Insert into usuarios(nome,email,senha) values (:nome, :email, :senha)");

        //Associa os valores
        $smtp->bindParam(":nome",$nome);
        $smtp->bindParam(":email",$email);
        $smtp->bindParam(":senha",$senhaHash);
        $smtp->execute();
        header("location:../index.php");

    }

}

catch(PDOException $e)
{
    echo "Erro ao cadastras o usuario" .$e->getMessage() ;
    exit();
}