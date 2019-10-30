<?php
   namespace App\Controller;
   use App\Controller\AppController;

   class UsersController extends AppController{
      public function login(){
      	
      		$fb = new Facebook\Facebook([
  'app_id' => '510749116427614',
  'app_secret' => '308009010bfa314e2ce22bef5516a86b',
  'default_graph_version' => 'v2.10',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://shyjufacebooklogin.herokuapp.com/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>'; 
	    
	    }
   }
?>