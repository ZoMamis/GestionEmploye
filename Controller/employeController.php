<?php
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = "";
    }
    switch ($action) {
        case "ajout":
            # logique...
            require_once "View/ajout.php";
            break;
            case "create":
                # logique...
                
                    $nom_employe = $_POST['nom_employe'];
                    $prenom_employe = $_POST['prenom_employe'];
                    
                    if (empty($nom_employe) || empty($prenom_employe)) {
                        $error = "Not null";
                        print_r($error);
                    }else{
                        $db->action("INSERT INTO employe (nom_employe, prenom_employe) VALUES ('$nom_employe','$prenom_employe')");
                        header("Location:index.php?Controller=employe");
                    }
                
                break;
        case "modifier":
            # logique...
            require_once "View/modif.php";
            break;
        case "supprimer":
            # logique...
            break;
        default:
            # logique...
            $data = $db->getData("SELECT * FROM employe");
            require_once "View/index.php";
            break;
    }
?>