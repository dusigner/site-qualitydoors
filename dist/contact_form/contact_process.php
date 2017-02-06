<?php

include dirname(dirname(__FILE__)).'/mail.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'email_validation.php';

if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
	else $quebra_linha = "\n"; //Se "nao for Windows"

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$telefone = stripslashes($_POST['telefone']);
$cidade = stripslashes($_POST['cidade']);
$modelo = stripslashes($_POST['modelo']);
$message = stripslashes($_POST['message']);

$mensagemHTML .= 'Nome ' . $name . $quebra_linha;
$mensagemHTML .= 'E-mail: ' .$email . $quebra_linha;
$mensagemHTML .= 'Tel: ' .$telefone. $quebra_linha;
$mensagemHTML .= 'Cidade: ' .$cidade. $quebra_linha;
$mensagemHTML .= 'Modelo: ' .$modelo. $quebra_linha;
$mensagemHTML .= 'msg: ' .$message. $quebra_linha;

$error = '';

// Check name

if(!$name)
{
$error .= 'Digite seu nome.<br />';
}

// Check email

if(!$email)
{
$error .= 'Por favor insira um endereço de e-mail.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Por favor insira um endereço de e-mail válido.<br />';
}

if(!$telefone || strlen($telefone) < 8)
{
$error .= 'Digite seu telefone válido.<br />';
}

if(!$cidade)
{
$error .= 'Digite a Cidade ou Bairro.<br />';
}
if(!$modelo)
{
$error .= 'Digite um modelo. Ex.: QD-0001.<br />';
}


// Check message (length)

if(!$message || strlen($message) < 10)
{
$error .= "Por favor, digite a sua mensagem. Ela deve ter pelo menos 10 caracteres. Pode informar altura e largura do portão.<br />";
}


if(!$error)
{
$mail = mail(CONTACT_FORM, $email, $mensagemHTML,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>