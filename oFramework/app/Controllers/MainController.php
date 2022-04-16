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
        $errorMessage = '';

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
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Vous devez saisir un email';
            }

            if (empty($message)) {
                $errors[] = 'Votre message est vide';
            }
        }

        if (!empty($errors)) {
            $toEmail = 'jessica.sand@orange.fr';
            $emailSubject = 'New email from your contant form';
            $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

            $bodyParagraphs = ["Firstname: {$firstname}", "Lastname: {$lastname}","Email: {$email}", "Message:", $message];
            $body = join(PHP_EOL, $bodyParagraphs);

            if (mail($toEmail, $emailSubject, $body, $headers)) {
                header('Location: thank-you.html');
            } else {
                $errorMessage = 'Oops, something went wrong. Please try again later';
            }
        } else {
                $allErrors = join('<br/>', $errors);
                $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
            }
    }

    /**
     * Method for the legacy mention page
     */
    public function legal()
    {
        $this->show('main/legal');
    }
}
