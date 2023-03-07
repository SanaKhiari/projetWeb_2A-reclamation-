<?php
include '../Controller/reclamationC.php';
$reclamationC = new ReclamationC();
$reclamationC->deleteReclam($_GET["id_rec"]);
header('Location:listeReclamation.php');
?>