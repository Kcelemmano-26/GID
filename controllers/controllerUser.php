<?php

ini_set('display_errors','on');
require('../models/modelUser.php');

if (isset($_POST['connecter'])){

    if (
      isset($_POST['email']) && !empty($_POST['email'])){
      # code...

      $user_email = htmlspecialchars($_POST['email']);

      $email_exist = userExist($user_email);
      
      if ($email_exist->rowCount() == 0) {
            adUser($user_email);
            
            header("Location: ../index.php");
      } else {
        $_SESSION['error'] = "Email existent";
        header("Location: ../index.php");
      }
      
    } else {
      # code...
      $_SESSION['error'] = "Veillez remplir tous les champs !";
      header("Location: ../index.php");
    }
    
}

?>