<?php
include_once '../Acces_BD/Visiteur.php';

// Récupération des données
$data = Lister();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des visiteurs</title>
</head>
<body>
    <center>
        <h1>Liste des visiteurs</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)) { ?>
                    <?php foreach ($data as $row) { ?>
                        <tr>
                            <td><?php echo isset($row['ID']) ? $row['ID'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['NOM']) ? $row['NOM'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['PRENOM']) ? $row['PRENOM'] : 'N/A'; ?></td>
                            <td><?php echo isset($row['EMAIL']) ? $row['EMAIL'] : 'N/A'; ?></td>
                            <td>
                                <?php if (isset($row['ID'])) { ?>
                                    <a href="form_edit.php?id=<?php echo $row['ID']; ?>">Edit</a> |
                                    <a href="../Gestion_Actions/Supprimer.php?id=<?php echo $row['ID']; ?>">Supprimer</a>
                                <?php } else { ?>
                                    Actions indisponibles
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="5">Aucun visiteur trouvé.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="form_Saisie.php">Ajouter un visiteur</a>
    </center>
</body>
</html>
