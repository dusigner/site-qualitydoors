<?php
/*
Name:           Contact Form
Written by:     Okler Themes - (http://www.okler.net)
Version:        4.5.1
*/

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// Step 1 - Enter your email address below.
$to = 'portaoquality@gmail.com';

// Step 2 - Enable if the server requires SMTP authentication. (true/false)
$enablePHPMailer = false;

$subject = $_POST['cidade'];

if(isset($_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $fields = array(
        0 => array(
        'text' => 'Nome',
        'val' => $_POST['name']
	    ),
	    1 => array(
	        'text' => 'E-mail',
	        'val' => $_POST['email']
	    ),
	    2 => array(
	        'text' => 'Telefone',
	        'val' => $_POST['telefone']
	    ),
	    3 => array(
	        'text' => 'Cidade/Bairro',
	        'val' => $_POST['cidade']
	    ),
	    4 => array(
	        'text' => 'Modelo',
	        'val' => $_POST['modelo']
	    ),
	    5 => array(
	        'text' => 'Mensagem',
	        'val' => $_POST['message']
	    )
    );

    $message = "";

    foreach($fields as $field) {
        $message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
    }

    // Simple Mail
    if(!$enablePHPMailer) {

        $headers = '';
        $headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
        $headers .= "Reply-To: " .  $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        ob_start();
        if (mail($to, $subject, $message, $headers)){
            $arrResult = array ('response'=>'success');
        } else{
            $arrResult = array ('response'=>'error');
        }
        ob_end_clean();

    // PHP Mailer Library - Docs: https://github.com/PHPMailer/PHPMailer
    } else {

        include("php-mailer/PHPMailerAutoload.php");

        $mail = new PHPMailer;

        $mail->IsSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPDebug = 0;                                 // Debug Mode

        // Step 3 - If you don't receive the email, try to configure the parameters below:

        $mail->Host = 'p3plcpnl0311.prod.phx3.secureserver.net';               // Specify main and backup server
        $mail->SMTPAuth = true;                             // Enable SMTP authentication
        $mail->Username = 'envia=qualitydoors.com.br';               // SMTP username
        $mail->Password = 'TRIdent+2016';                         // SMTP password
        $mail->SMTPSecure = 'tls';                          // Enable encryption, 'ssl' also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->From = $email;
        $mail->FromName = $_POST['name'];
        $mail->AddAddress($to);                               // Add a recipient
        $mail->AddReplyTo($email, $name);

        $mail->IsHTML(true);                                  // Set email format to HTML

        $mail->CharSet = 'UTF-8';

        $mail->Subject = $subject;
        $mail->Body    = $message;

        if(!$mail->Send()) {
           $arrResult = array ('response'=>'error');
        }

        $arrResult = array ('response'=>'success');

    }

    echo json_encode($arrResult);

} else {

    $arrResult = array ('response'=>'error');
    echo json_encode($arrResult);

}
?>