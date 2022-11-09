<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employé</title>
</head>
<body>
    <h2>Ajout Employé</h2>
    <form method="POST" action="index.php?Controller=employe&action=create">
        <label for="name">Nom Employé</label>
        <input type="text" name="nom_employe" id=""><br><br>
        <label for="name">Prénom Employé</label>
        <input type="text" name="prenom_employe" id=""><br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>