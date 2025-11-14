<?php

namespace portfolioV2\controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailController extends AbstractController
{
    #[Route('/send-email', name: 'app_send_email', methods: ['POST'])]
    public function sendEmail(Request $request,MailerInterface $mailer): Response
    {

        $nom = trim((string) $request->request->get('nom'));
        $emailSender = trim((string) $request->request->get('email'));
        $message = trim((string) $request->request->get('message'));
        // 1. Créer l'objet Email
         $email = (new Email())
        ->from('paulcte@alwaysdata.net')        // adresse autorisée / configurée côté SMTP
        ->to('paul.comte3878@gmail.com')
        ->replyTo($emailSender)                   // permet de répondre à l'utilisateur
        ->subject('Message depuis le portfolio — ')
        ->text("Nom: $nom\nEmail: $emailSender\n\n$message")
        ->html(
            '<p><strong>Nom :</strong> ' . htmlspecialchars($nom) . '</p>' .
            '<p><strong>Email :</strong> ' . htmlspecialchars($emailSender) . '</p>' .
            '<p><strong>Message :</strong><br/>' . nl2br(htmlspecialchars($message)) . '</p>'
        );

        try {
            // 2. Envoyer l'email
            $mailer->send($email);
            $message = 'Email envoyé avec succès !';

        } catch (TransportExceptionInterface $e) {
            // Gérer l'erreur d'envoi
            $message = 'Erreur lors de l\'envoi : ' . $e->getMessage();
        }

        return new Response($message);
    }
}