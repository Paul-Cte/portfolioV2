<?php
// src/controller/PageController.php

namespace portfolioV2\controller;

require_once 'src/model/MailService.php';

use portfolioV2\model\MailService;

class PageController {

    // Affiche la page d'accueil (notre portfolio)
    public function home() {
        $statusMessage = $_SESSION['status_message'] ?? null;
        unset($_SESSION['status_message']);
        
        require 'views/home.php';
    }

    public function sendMail() {
        $name = htmlspecialchars($_POST['nom'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);  // la méthode permet d'enlever les espaces et les trucs indésirables      
        $message = htmlspecialchars($_POST['message'] ?? '');

        if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['status_message'] = ['type' => 'error', 'text' => 'Erreur : Tous les champs sont requis.'];
            header('Location: index.php'); // Redirige vers la page d'accueil
            exit;
        }

        $mailService = new MailService();
        $success = $mailService->sendContactEmail($name, $email, $message);

        if ($success) {
            $_SESSION['status_message'] = ['type' => 'success', 'text' => 'Message envoyé avec succès !'];
        } else {
            $_SESSION['status_message'] = ['type' => 'error', 'text' => 'Échec de lenvoi. Veuillez réessayer.'];
        }
        
        header('Location: index.php#section-contact'); 
        exit;
    }
}

