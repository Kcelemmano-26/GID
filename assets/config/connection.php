<?php 
    function Connection(){
        try {
            $access = new PDO("mysql:host=localhost;dbname=gidbdd;charset=utf8", "root", "");
            $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $access;
        } catch (PDOException $e) {
            //  print "Erreur :" . $e->getMessage() . "<br/>"; 
            die("Une erreur a été trouvée : " . $e->getMessage());
        }
    
    }
    
?>