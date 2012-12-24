<?php
echo mailsend();

function mailsend() // this function to send mail if the validation true
{
	$msg =  "Nombre\n $_POST[name]"; // assign all the post data fields to the variable
	$msg = "Direccion\n $_POST[dir]";
	$msg .= "\n\nEmail\n $_POST[email]";
	$msg .= "\n\nTelefono\n $_POST[telefono]";
	$msg .= "\n\nDescripcion pedido:\n $_POST[comment]";

	//Setup the mail format
	$recipient = "petunio4@gmail.com";  // Recipient mail address
	$subject = "Contact Form"; // subject of the mail
	$mailheaders  = "MIME-Version: 1.0\r\n";
	$mailheaders .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$mailheaders .= "From: $_POST[email]  \r\n"; // from address fo the person
	$mailheaders .= "Reply-To: $_POST[email]\r\n"; // reply field
	//Send the contact form
	$sent=mail($recipient, $subject, $msg, $mailheaders); // this function to send mail to the recpient
	if($sent)
	{
	$rs="Tu mensaje ha sido enviado"; // display this message if the message sent successfully
	return $rs;
	}
		else
			{
            $rs="Lo sentimos, hubo un error al enviar los datos"; // display the error message if the message not sent
			return $rs;
	}

}

?>