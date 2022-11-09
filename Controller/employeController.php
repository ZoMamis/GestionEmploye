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