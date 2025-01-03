<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un visiteur</title>
</head>
<body>
    <center>
        <form action="Ajouter.php" method="post">
            <table>
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" required></td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td><input type="text" name="prenom" required></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Envoyer"></td>
                    <td><input type="reset" value="Annuler"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
