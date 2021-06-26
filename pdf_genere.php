<?php
// include autoloader
use Dompdf\Dompdf;
use Dompdf\Options;
require_once 'BDD/bdd_other.php';
$sql = "SELECT * FROM zone_sante";
$requete = $db->query($sql);
$ligne = $requete->fetchAll();
require_once 'pdf-html.php';
die;
require_once 'dompdf/autoload.inc.php';
$options = new Options();
$options->set('defaultFont', 'Arial');//option pour la police
$dompdf = new Dompdf($options);
$dompdf->loadHtml("Juste du texte");
$dompdf->setPaper('A4', 'portrait'); //format de papier
$dompdf->render(); // rendre le pdf mais la memoire, donc il a deja preparé le pdf
$fichier = 'PNLCD.pdf';
$dompdf->stream($fichier); // il envoi le pdf comme document a telecharger\
