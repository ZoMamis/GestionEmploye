<?php
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = "";
    }
    switch ($action) {
        case "ajout":
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
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                foreach ($db->getData("SELECT * FROM employe WHERE id='$id'") as $row){
                    $nom_employe = isset($row['nom_employe']) ?$row['nom_employe']:'';
                    $prenom_employe = isset($row['prenom_employe']) ?$row['prenom_employe']:'';
                }
            }
                # logique...
                    require_once "View/modif.php";
                break;
                case "edit":
                    # logique...
                        $nom_employe = $_POST['nom_employe'];
                            $prenom_employe = $_POST['prenom_employe'];
        
                            if (empty($nom_employe) || empty($prenom_employe)) {
                                $error = "Not null";
                                print_r($error);
                            }else{
                                $db->action("UPDATE employe SET nom_employe= '$nom_employe', prenom_employe= '$prenom_employe' WHERE id= $id");
                                header("Location:index.php?Controller=employe");
                            }
                    break;
                //UPDATE `employe` SET `nom_employe` = 'Atory' WHERE `employe`.`id` = 4;
        case "supprimer":
            # logique...
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $db->action("DELETE FROM employe WHERE id = '$id' ");
                header("Location:index.php?Controller=employe");
            }
            break;
        default:
            # logique...
            $data = $db->getData("SELECT * FROM employe");
            require_once "View/index.php";
            break;
    }
?>