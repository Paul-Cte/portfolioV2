<?php

session_start();

require_once 'src/controller/PageController.php';

// autoloader de Composer 
require_once 'vendor/autoload.php';

use portfolioV2\controller\PageController;

$controller = new PageController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['action']) && $_POST['action'] === 'send-mail') {
        $controller->sendMail();
    }
    
} else {
    $controller->home();
}