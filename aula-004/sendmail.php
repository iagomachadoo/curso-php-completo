<?php

// Importando das classes do pacote 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// fazendo o carregamento dos pacotes de terceiros instalados 
require './vendor/autoload.php'; 

// Pegando os dados da request
$dados = [
    'nome' => $_POST['nome'] ?? '',
    'pais' => strtoupper($_POST['pais']) ?? '',
    'mensagem' => $_POST['mensagem']
];

// Criando uma nova instância da classe PHPMailer
$mail = new PHPMailer(true);

// Try-catch
try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // debugar o envio de email
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '0192c1d7638123';
    $mail->Password = '84011d0da20d97';
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->CharSet = 'UTF-8';

    //Recipients
    // De:
    $mail->setFrom('from@example.com', 'Mailer');

    // Para:
    $mail->addAddress('joe@example.net', 'Joe User'); 

    //Content
    $mail->isHTML(true);

    // Assunto
    $mail->Subject = 'Contato do site';

    // Corpo
    $corpo = "<strong>Nome: </strong> {$dados['nome']} <br>";
    $corpo .= "<strong>País: </strong> {$dados['pais']} <br>";
    $corpo .= "<strong>Mensagem: </strong> {$dados['mensagem']} <br>";

    $mail->Body = $corpo;

    // Enviando o email
    $mail->send();

    // Mensagem de confirmação
    echo "Mensagem enviada com sucesso!";

} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
}
?>