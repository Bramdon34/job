<?php 

// gestion des erreur pour la connection de base de donnee
    try {
        
        $host = "localhost";

        $dbname = "jobboard";
    
        $user = "root";
    
        $pass = "";
    
    
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
   
    // if($conn == true) {
    //     echo "connected successfully";
    // } else {
    //     echo "err";
    // }




