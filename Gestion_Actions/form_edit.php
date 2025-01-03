<?php
include_once '../Acces_BD/Visiteur.php';

// Vérifier si 'id' est présent dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID du visiteur manquant dans l'URL.");
}

// Récupérer l'ID et les informations du visiteur
$id = $_GET['id'];
$visiteur = Rechercher($id);

// Vérifier si le visiteur existe
if (!$visiteur) {
    die("Aucun visiteur trouvé avec l'ID fourni.");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le visiteur</title>
</head>
<body>
    <center>
        <h1>Modifier les informations du visiteur</h1>
        <form action="../Gestion_Actions/Modifier.php" method="POST">
            <!-- Champ caché pour l'ID -->
            <input type="hidden" name="id" value="<?= htmlspecialchars($visiteur['ID']) ?>">

            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($visiteur['NOM']) ?>" required><br><br>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($visiteur['PRENOM']) ?>" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($visiteur['EMAIL']) ?>" required><br><br>

            <button type="submit">Enregistrer</button>
        </form>
        <br>
        <a href="Afficher.php">Retour à la liste des visiteurs</a>
    </center>
</body>
</html>
