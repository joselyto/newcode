<?php
session_start();
require('BDD/bdd.php');

if(isset($_POST)){
    $test = $_POST['test'];
    $observation = $_POST['observation'];
    $num_fiche = $_POST['num_fiche'];
    $technique = $_POST['technique'];
    
    if($technique == 'TDR' && $test == 'AS'){
        $connexion->exec('INSERT INTO TDR_Electro VALUES(NULL,"'.$num_fiche.'","'.date('Y-m-d H:i:s').'")');
        ?>
    <script>
    alert("Le resultat est AS transfert a l'electrophorese d'hemoglobine");
    </script>
    <?php
    require("visualiser_transfere_TDR_Electro.php");
    }else{
        $connexion->exec('INSERT INTO resultat VALUES(NULL,"'.$num_fiche.'","'.$test.'","'.$observation.'","'.$_SESSION['id_agent'].'","'.date('Y-m-d H:i:s').'")');
    ?>
    <script>
    alert("Enregistrement reussi");
   
    </script>

    <?php
    require("visualiser_resultat.php");
  
 
    }
    ?>

    <?php
}else{
    echo 'Pas de donnee post';
}


?>