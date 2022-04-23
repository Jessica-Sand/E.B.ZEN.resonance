<?php

namespace App\Controllers;

use oFramework\Controllers\CoreController;
use App\Models\Category;

class MainController extends CoreController
{
    /**
     * Method for the home page
     */
    public function home()
    {
        $this->show('main/home');
    }

    /**
     * Method for the contact page
     */
    public function contact()
    {
        $this->show('main/contact');
    }

    public function mailSend() {
        $errors = [];

        if (!empty($_POST)) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if (empty($firstname)) {
                $errors[] = 'Vous devez saisir votre prénom';
            }

            if (empty($lastname)) {
                $errors[] = 'Vous devez saisir votre nom';
            }

            if (empty($email)) {
                $errors[] = 'Email is empty';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Vous devez saisir un email';
            }

            if (empty($message)) {
                $errors[] = 'Votre message est vide';
            }

            if (empty($errors)) {
                $to = 'contact@eb-zen-resonance.fr';
                $from = $email;
                $subject = 'Nouvelle demande de contact sur le site eb-zen-resonance.fr';
                
                // $bodyParagraphs = ["Nom de famille: {$lastname}", "Prénom: {$firstname}","Adresse mail: {$email}", "Message:", $message];
                $bodyParagraphs = 
                '<html>
                    <body>
                    <p>Vous avez un message de <strong>' . $lastname . ' ' . $firstname . '</strong></p>
                    <p>Message : ' . $message . '</p>
                    <p>Contactez la personne à l\'adresse suivante : <strong>' . $email . '</strong></p>
                    </body>
                </html>';

                // $body = join(PHP_EOL, $bodyParagraphs);

                $encoding = "utf-8";

                // Preferences for Subject field
                $subject_preferences = array(
                    "input-charset" => $encoding,
                    "output-charset" => $encoding,
                    "line-length" => 76,
                    "line-break-chars" => "\r\n"
                );

                // Mail header
                $header = "Content-type: text/html; charset=".$encoding." \r\n";
                $header .= "From: " . $from." <" . $from."> \r\n";
                $header .= "MIME-Version: 1.0 \r\n";
                $header .= "Content-Transfer-Encoding: 8bit \r\n";
                $header .= "Date: ".date("r (T)")." \r\n";
                $header .= iconv_mime_encode("Subject", $subject, $subject_preferences);

                if (mail($to, $subject, $bodyParagraphs, $header)) {
                    header('Location: /message-envoye');
                } else {
                    echo 'Oops, quelque chose c\'est mal passé. Veuillez réessayer';
                }
            } else {
                join('<br/>', $errors);
            }
        }
    }

    /**
     * Method to show the thank you page after contacting page
     */
    public function messageSend()
    {
        $this->show('main/send');
    }

    /**
     * Method for the legacy mention page
     */
    public function legal()
    {
        $this->show('main/legal');
    }
}
