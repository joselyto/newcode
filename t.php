<?php
require("BDD/bdd.php");
$query1 = $connexion->query('SELECT * FROM resultat');
$nombre[] = $query1->fetchObject();

foreach($nombre as $nombres){
    var_dump(count($nombres));
}


?>