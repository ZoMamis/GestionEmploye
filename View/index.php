
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employé</title>
</head>
<body>
    <a href="index.php?Controller=employe&action=ajout" class="btn">Ajout</a>
    <table>
        <thead>
            <tr>
                <td>Nom Employé</td>
                <td>Prénom Employé</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $employe){
                ?>
                <tr>
                <td><?=$employe['nom_employe']?></td>
                <td><?=$employe['prenom_employe']?></td>
                <td>
                    <a href="employeController?Controller=employe&action=modifier&id=<?=$employe['id_employe']?>" class="btn">Modifier</a>
                    <a href="employeController?Controller=employe&action=supprimer&id=<?=$employe['id_employe']?>" class="btn">Supprimer</a>
                </td>
            </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>