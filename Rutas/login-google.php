<?php

//index.php

//Include Configuration File
include_once('C:/xampp/htdocs/Unip/Rutas/config.php');
$login_button = '';

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

if(!isset($_SESSION['access_token']))
{

 $login_button =  '<a class="btn btn-danger w-100 my-1" href="'.$google_client->createAuthUrl().'" >
 <div class="row aling-items-center">
     <div class="col-2">
         <img src="./img/google-logo.png"  width="32" alt="">
     </div>
     <div class="col-1"></div>
     <div class="col-2">
         <p class=" h3 ps-5">Google</p> 
     </div>
 </div>
</a>';
}



?>