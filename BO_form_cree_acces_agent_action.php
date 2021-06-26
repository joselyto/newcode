<?php
require_once('BDD/bdd.php');
if(isset($_POST)){
    $id_agent = $_POST['id_agent'];
    $aire= $_POST['aire'];
    $type= $_POST['type'];
    $password = $_POST['password'];
  

    if($aire != "" && $type != "" && $password != ""){
    $connexion->exec('INSERT INTO access_users VALUES(NULL,"'. $id_agent .'","'. $password .'","'. $aire .'","'. $type .'")');
    require("BO_list_agent.php");
    }else{
        ?>
        <h2 style="color: red;">Veuillez remplir tout les champs du formulaire</h2>
        <?php
        require('BO_form_cree_agent.php');
    }
   
   
  

}
?>