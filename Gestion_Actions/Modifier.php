<?php
require_once '../Acces_BD/Visiteur.php';

// Vérifiez que les données POST sont correctement transmises
if (isset($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'])) {
    $id = (int) $_POST['id'];
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);

    if (empty($nom) || empty($prenom) || empty($email)) {
        die("Tous les champs sont obligatoires.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("L'adresse email est invalide.");
    }

    // Préparer les données
    $data = [
        'ID' => $id,
        'NOM' => $nom,
        'PRENOM' => $prenom,
        'EMAIL' => $email
    ];

    try {
        // Modifier les données
        Modifier($data);

        // Redirection après succès
        header("Location: Afficher.php");
        exit();
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
} else {
    die("Données manquantes.");
}
