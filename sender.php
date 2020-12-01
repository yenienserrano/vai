<?php

	$nombre = $_POST["name"];
	$pack = $_POST["pack"];
    $phone = $_POST["phone"];
	$email = $_POST["email"];
	$direccion = $_POST['direccion'];

    $mailBody  = '<p>' . 'Nombre ' . $nombre . '<br>' . 'Pack ' . $pack . '<br>'  . 'Telefono ' . $phone . '<br>' . 'Email ' . $email . '<br>' . 'Direccion ' . $direccion . '</p>';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'vaiinternet19@gmail.com';                     // SMTP username
	    $mail->Password   = 'vaiIten13';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
		$mail->setFrom('vaiinternet19@gmail.com', 'Vai Internet');
		$mail->addAddress('info@gruposervisoft.com');     // Add a recipient
		$mail->addAddress('sandraa@gruposervisoft.com');     // Add a recipient
	    //$mail->addAddress('ellen@example.com');               // Name is optional

	    // Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Contacto desde web Vai Internet';
	    $mail->Body    = '<h3>Nuevo contacto</h3>' . $mailBody;

	    $mail->send();
        http_response_code(200);
        echo "¡Gracias! Tu mensaje ha sido enviado.";
	} catch (Exception $e) {
	    echo "Hubo un error el enviar el mensaje: {$mail->ErrorInfo}";
	}
?>
