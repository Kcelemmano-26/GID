<?php

ini_set('display_errors','on');
require('../models/modelUser.php');

if (isset($_POST['contact'])){

    if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['message']) && !empty($_POST['message'])){
        $name = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
var_dump($name);
        sendContact($name, $email, $subject, $message);
        header("Location: ../index.php");

    } 
     else {
        echo "Veillez remplir tous les champs !";
     }

}





?>