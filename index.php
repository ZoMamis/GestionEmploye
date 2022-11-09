<?php
    include "./model/employe.php";
    $db = new employe();

    if(isset($_GET['Controller'])){
        $controller =$_GET['controller'];
    }else{
        $controller ="";
    }
    switch ($controller) {
        case 'employe':
            require_once "Controller/employeController.php";
            break;
        
        default:
            require_once "Controller/employeController.php";
            break;
    }
?>