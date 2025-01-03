<?php
require_once '../Acces_BD/Visiteur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'])) {
        $data = [
            'NOM' => trim($_POST['nom']),
            'PRENOM' => trim($_POST['prenom']),
            'EMAIL' => trim($_POST['email']),
        ];

        if (!empty($data['NOM']) && !empty($data['PRENOM']) && !empty($data['EMAIL'])) {
            Ajouter($data);
            header("Location: Afficher.php");
            exit();
        } else {
            echo "Tous les champs sont obligatoires.";
        }
    } else {
        echo "Données POST manquantes.";
    }
} else {
    echo "Cette page ne peut être accédée directement.";
}





