<?php
include_once '../Acces_BD/Visiteur.php';
isset($_GET['id']);
$id = $_GET['id'];
Supprimer($id);
header("Location: Afficher.php");
exit();
?>