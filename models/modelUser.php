<?php

ini_set('display_errors','on');
    require_once('../assets/config/connection.php');


function userExist($email) {
    $access = Connection();
    $email_exist = $access->prepare('SELECT idCli,email FROM `clients` WHERE email = ? ');
    $email_exist->execute(array($email));
    return $email_exist;
}

function adUser($email) {
    $access = Connection();
    $insertUserOnWebSite = $access->prepare('INSERT INTO clients(email) VALUES(?)');
    $insertUserOnWebSite->execute(array($email));
}


function verifyUserExist($email) {
    $access = Connection();
    $checkIfUserExists = $access->prepare("SELECT * FROM `clients` WHERE email = ?");
    //exécuter la requête là qui prend en paramètre un tableau  
    $checkIfUserExists->execute(array($email));
    return $checkIfUserExists;
}
 
function sendContact($name, $email, $subject, $message){
    $access = Connection();
    // Insérer les données dans la table contact
    $send = $access->prepare('INSERT INTO `contact`(`nom`, `email`, `subject`, `message`) VALUES (?,?,?,?)');
    $send->execute(array($name, $email, $subject, $message));
 
} 
