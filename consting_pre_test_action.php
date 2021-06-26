<?php
session_start();
require_once('BDD/bdd.php');
if(isset($_POST)){
    $id_v = $_POST['id_v'];
    $texte= $_POST['texte'];
 
    $num_fiche = $_POST['num_fiche'];
    $technique = $_POST['technique'];
    $id_cons = $_POST['id_cons'];
    $consultat = $_SESSION['prenom']." ". $_SESSION['nom'];
    if($id_v != "" && $texte != ""){
    $connexion->exec('INSERT INTO consting_pre_test VALUES(NULL,"'. $id_v .'","'. $num_fiche .'","'. $technique .'","'. $texte .'","'. $consultat.'","'. date('Y-m-d H:i:s') .'")');
    $connexion->exec("DELETE FROM consting_pre_test_attente WHERE id_cons = $id_cons ");
    ?>
    <script>
        alert('consultation effectuer');
    </script>
    <?php
    require("visualiser_attente_consting_pre_test.php");
    }else{
        ?>
        <h2 style="color: red;">Veuillez remplir tout les champs du formulaire</h2>
        <?php
        require('consting_pre_test.php');
    }
   
   
  

}
?>