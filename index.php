<?php
    $rotas = key($_GET)?key($_GET):"home";

    switch($rotas){
        case "home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "email":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "news":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "parceiro":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "emailparceiro":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
    }
?>