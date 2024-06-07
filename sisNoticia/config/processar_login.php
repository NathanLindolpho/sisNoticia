<?php

include 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    try
    {    
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email= :email");
        $stmt->bindParam('email',$email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario && password_verify($senha,$usuario['senha'])){   

        session_start();
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header('Location: ../perfil/painel.php');
        exit();
    }
    else{
        header('Location: ../index.php?erro=1');
    }
   
    }
    catch(PDOException $e)
    {
 echo "Erro ao processar login:" .$e->getMessage();
    }

}
