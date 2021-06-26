<?php
session_start();
require("BDD/bdd.php");

if(isset($_POST)){


    $query = $connexion->query('
    SELECT * FROM access_users a
    LEFT JOIN agents ag ON a.id_agent = ag.id_agent WHERE nom = "' . $_POST['nom'] . '" AND password = "'. $_POST['password'] .'"');
    //$query = $connexion->query('SELECT * FROM access_users WHERE nom = "' . $_POST['nom'] . '" AND password = "'. $_POST['password'] .'" ');
  
    

    if( $ligne = $query->fetchObject() ){

       


        $_SESSION['id_agent'] = $ligne->id_agent;
        $_SESSION['nom'] = $ligne->nom;
        $_SESSION['acces'] =$ligne->id_type;
        $_SESSION['prenom'] = $ligne->prenom;
        $_SESSION['id_zs'] = $ligne->id_zs;
        $_SESSION['id_air_sante'] = $ligne->id_air_sante;
        $idAir = $_SESSION['id_air_sante'];
        
      

     

        require('menu_gen.html');
    
    }else{
        echo 'incorrecte';
        $_SESSION['nom'] = "";
      
        
    }



}else{
    echo 'pas de donnees post';
}




?>