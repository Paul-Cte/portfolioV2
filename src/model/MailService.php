<?php

namespace portfolioV2\model;

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailService {

    public function sendContactEmail($name, $fromEmail, $body) {

        $dsn = $_ENV['MAILER_DSN'];

        $transport = Transport::fromDsn($dsn);
        $mailer = new Mailer($transport);

        $email = (new Email())
            ->from('paulcte@alwaysdata.net') 
            ->to('paul.comte3878@gmail.com')    
            ->replyTo($fromEmail)                
            ->subject('Message depuis le portfolio - ' . $name)
            ->text("Nom: $name\nEmail: $fromEmail\n\n$message")
            ->html(
                '<p><strong>Nom :</strong> ' . htmlspecialchars($name) . '</p>' .
                '<p><strong>Email :</strong> ' . htmlspecialchars($fromEmail) . '</p>' .
                '<p><strong>Message :</strong><br/>' . nl2br(htmlspecialchars($body)) . '</p>'
            );

        try {
            $mailer->send($email);
            return true;
        } catch (TransportExceptionInterface $e) {
            return false;
        }
    }
}