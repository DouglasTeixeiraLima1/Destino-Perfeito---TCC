<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Instância da classe
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
try
{
    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'dperfeito49@gmail.com';
    $mail->Password   = 'shzd zvak fizi fiql';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    // Define o remetente
    $mail->setFrom('dperfeito49@gmail.com', 'Destino Perfeito');
    // Define o destinatário
    $mail->addAddress('destino.perfeito@outlook.com', 'Destino Perfeito');
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Contato do Site';
    $mail->Body    = '<strong>Nome:</strong> ' . $nome . '<br>' .
                     '<strong>E-mail:</strong> ' . $email . '<br>' .
                     '<strong>Mensagem:</strong> ' . $mensagem;

    $mail->send();
    header('Location: /thanks.html');
    exit; // Certifique-se de sair após o redirecionamento
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
