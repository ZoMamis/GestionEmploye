<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employé</title>
</head>
<body>
    <h2>Modifier Employé</h2>
    <form method="POST" action="index.php?Controller=employe&action=edit">
        <label for="name">Nom Employé</label>
        <input type="text" name="nom_employe" value="<?= $nom_employe?>"><br><br>
        <label for="name">Prénom Employé</label>
        <input type="text" name="prenom_employe" value="<?= $prenom_employe?>"><br><br>
        <input type="submit" value="modifier">
    </form>
</body>
</html>