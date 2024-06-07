<?php
//Seta as configurações do APACHE
setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese");

// Define o fuso horário para o horário de brasilia
date_default_timezone_set("America/Sao_Paulo");

// Configurações bd
define("DB_HOST","localhost");  // Constante do Host //
define("DB_NAME","sisnoticia") ;
define("DB_USER","root") ;
define("DB_PASS","") ;

// Conecta com o banco
try
{
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    // Error_log armazena o erro no apache
    error_log("Erro na Conexão com o BD".$e->getMessage());
    // Exibe mensagem
    echo "Ocorreu um erro no servidor". $e->getCode();
}

// Função para enviar Email
function enviaEmail($para, $assunto, $mensagem)
{
    // Cabeçalho para 'evitar' ir para SPAM
    $cabecalhos = 'From:webmaster@exemplo.com'."\r\n".
                  'Reply-To: webmarter@exemplo.com'."\r\n".
                  'X-Mailer: PHP/'.phpversion();

    // Comando para enviar E-mail
    mail($para, $assunto, $mensagem, $cabecalhos);
}
