<?php

//start session on web page
session_start();

//config.php
//Include Google Client Library for PHP autoload file
require_once('C:/xampp/htdocs/Unip/Rutas/vendor/autoload.php');

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('81503846263-6asf55snfqjk0g23ue5rcl0snlohfl2j.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

/*if(isset($result)){
    $google_client->setRedirectUri('http://localhost/unip/UniP/V.principal-alumno.php');
}else{
    $google_client->setRedirectUri('http://localhost/unip/UniP/formulario-perfil-alumno.php');
}*/

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/unip/UniP/V.principal-alumno.php');

// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');


?>