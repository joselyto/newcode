<?php
session_start();
require_once('BDD/bdd.php');
if(isset($_POST)){
    $num_ech = $_POST['num_ech'];
    $qte= $_POST['qte'];
 
    $num_fiche = $_POST['num_fiche'];
  
    $preleveur = $_SESSION['prenom']." ". $_SESSION['nom'];
    if($num_ech != "" && $qte != ""){
    $connexion->exec('INSERT INTO prelevement VALUES(NULL,"'. $num_fiche .'","Electrophorese","'. $num_ech .'","'. $qte.'","'. $preleveur .'","'. date('Y-m-d H:i:s') .'")');
    
            ?>
            <script>
            alert('Prelevement effectuer');
            </script>
            <?php
            require("visualiser_prelevement_electro.php");
     
    }else{
        ?>
        <h2 style="color: red;">Veuillez remplir tout les champs du formulaire</h2>
        <?php
        require('consting_pre_test.php');
    }
   
   
  

}
?>