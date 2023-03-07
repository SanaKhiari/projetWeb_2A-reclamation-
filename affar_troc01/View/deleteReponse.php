<?php
include '../Controller/reponseC.php';
$reponseC = new ReponseC();
$reponseC->deleteReponse($_GET["id_rep"]);
header('Location:ListeReponse.php');
?>