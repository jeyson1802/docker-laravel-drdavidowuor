<?php

//Add your information here
$recipient = "contacto@conferenciadepastoresdrowuorperu.com";

//Don't edit anything below this line

//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$message=stripslashes($message);
//$phone=stripslashes($phone);
//$ticket=stripslashes($ticket);
$message= "Name: $name, Subject: $subject \n\n Message: $message";

/*
Simple form validation
check to see if an email and message were entered
*/

//if no message entered and no email entered print an error
if (empty($message) && empty($email)){
print "No se ha introducido ninguna dirección de correo electrónico ni mensaje. <br> Por favor incluya un correo electrónico y un mensaje";
}
//if no message entered send print an error
elseif (empty($message)){
print "No se ha introducido ningún mensaje. <br> Sírvase incluir un mensaje.<br>";
}
//if no email entered send print an error
elseif (empty($email)){
print "No se ha introducido ninguna dirección de correo electrónico. <br> Por favor incluya su correo electrónico. <br>";
}


//mail the form contents
if(mail("$recipient", "$subject", "$message", "From: $email" )) {

	// Email has sent successfully, echo a success page.

	echo '<div class="alert alert-success alert-dismissable fade in">
		<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
    
		<p>Correo electrónico enviado con éxito! Nos pondremos en contacto con usted en breve.</p></div>';

	} else {

	echo 'ERROR!';

	}

