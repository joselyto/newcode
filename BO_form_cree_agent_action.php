<?php
require_once('BDD/bdd.php');
if(isset($_POST)){
    $nom = $_POST['nom'];
    $postnom= $_POST['postnom'];
    $prenom= $_POST['prenom'];
    $grade= $_POST['grade'];
    $zone= $_POST['zone'];
    $hidden= $_POST['hidden'];
    $adresse= $_POST['adresse'];
    if($nom != "" && $prenom != "" && $postnom != "" && $grade != "" && $zone != ""){
    $connexion->exec('INSERT INTO agents VALUES(NULL,"'. $nom .'","'. $postnom .'","'. $prenom .'","'. $adresse .'","'. $grade .'","'. $zone .'")');
    require("BO_list_agent.php");
    }else{
        ?>
        <h2 style="color: red;">Veuillez remplir tout les champs du formulaire</h2>
        <?php
        require('BO_form_cree_agent.php');
    }
   
   
  

}
?>