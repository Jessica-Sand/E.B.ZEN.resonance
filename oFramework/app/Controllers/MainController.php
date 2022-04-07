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
        if (!empty($_POST)) {

            $userName = trim($_POST['user_nom']);
            $userEmail = $_POST['user_mail'];
            $userMessage = $_POST['user_message'];
            
            if ($userName === '') {
                echo 'Erreur : vous devez saisir un nom';
            }
            

            if (empty($userEmail)) {
                echo 'Erreur : vous devez saisir un email';
            }
            
            echo "Bonjour " . $_POST['user_nom']. ' (' . $_POST['user_mail']. ')'. ' Nous avons bien reçu votre message : '. $_POST['user_message'];
        } else {
            echo 'Le formulaire est vide !';
        }

        var_dump($_GET);
    }

    /**
     * Method for the legacy mention page
     */
    public function legal()
    {
        $this->show('main/legal');
    }
}
