<?php 
    //constante d'environement
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "pnlcd");

    //DSN de connexion 
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
    //On va se coonecter à la base
    try{
        // on instancie PDO
        $db = new PDO($dsn, DBUSER, DBPASS);

        // on s'assure d'envoyer les données en UTF8
        $db->exec("SET NAMES utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        die("Erreur:".$e->getMessage());
    }
  
?>