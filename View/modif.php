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
    <?php  foreach ($dataMod as $employe){;?>

    <form method="POST" action="index.php?Controller=employe&action=edit">
       <input type="text" name="id_employe" hidden value="<?php echo $employe['id_employe']?>">
        <label for="name">Nom Employé</label>
        <input type="text" name="nom_employe" value="<?php echo $employe['nom_employe']?>"><br><br>
        <label for="name">Prénom Employé</label>
        <input type="text" name="prenom_employe" value="<?php echo $employe['prenom_employe']?>"><br><br>
        <input type="submit" value="modifier">
        
    </form>
    <?php
        }?>
</body>
</html>