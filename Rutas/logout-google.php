<?php

//logout.php

require_once('C:\xampp\htdocs\Unip\UniP\Rutas/config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header("Location: ../pantalla-principal.php")

?>