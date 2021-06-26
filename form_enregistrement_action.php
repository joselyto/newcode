<?php
session_start();
require('BDD/bdd.php');

if(isset($_POST)){
    $nom = $_POST['nom'];
    $post = $_POST['post'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $genre = $_POST['genre'];
    $civil = $_POST['civil'];
    $date = $_POST['date'];
    $num = $_POST['num'];
    $avenue = $_POST['avenue'];
    $quartier = $_POST['quartier'];
    $commune = $_POST['commune'];
    $ville = $_POST['ville'];
    $province = $_POST['province'];
    $customRadio = $_POST['customRadio'];

    $id_dps = $_POST['id_dps'];
    $id_zs = $_POST['id_zs'];
    $id_air = $_POST['id_air'];
    $air = $_POST['air'];
    var_dump($air); 



    if($genre == "F"){
        $connexion->exec('INSERT INTO volontaire VALUES(NULL,"'.$nom.'","'.$post.'","'.$prenom.'","'.$tel.'","'.$genre.'","'.$customRadio.'","'.$date.'","'.$civil.'","'.$num.'","'.$avenue.'","'.$quartier.'","'.$commune.'","'.$ville.'","'.$province.'") ');
     
    }
    else if($genre == "M"){
        $connexion->exec('INSERT INTO volontaire VALUES(NULL,"'.$nom.'","'.$post.'","'.$prenom.'","'.$tel.'","'.$genre.'","'." ".'","'.$date.'","'.$civil.'","'.$num.'","'.$avenue.'","'.$quartier.'","'.$commune.'","'.$ville.'","'.$province.'") ');
    }
    $id = $connexion->lastInsertId();
    $recuperer = substr($air, 0, 2);
    $num_fiche = $recuperer .''.$id;
   
    $_SESSION['id_air_sante'];
    $connexion->exec('INSERT INTO enregistrement VALUES(NULL,"'.$id.'","'.$num_fiche.'","'. $id_dps .'","'.$id_zs  .'","'.$id_air .'","'.$_SESSION['id_agent'].'","'.date('Y-m-d H:i:s').'")');
 

    $connexion->exec('INSERT INTO consting_pre_test_attente VALUES(NULL, "'. $num_fiche .'","'. $id .'","'. $nom .'", "'. $post .'", "'.$prenom.'","'. $genre .'","'. $date.'","'.$civil.'");   ')
  
    ?>
    <script>
        alert("Enregistrement reussi");
       
    </script>

    <?php
     require("visualiser_enregistrement.php");
}else{
    echo 'Pas de donnee post';
}


?>