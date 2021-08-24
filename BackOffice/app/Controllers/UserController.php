<?php

namespace App\Controllers;

use BackOffice\Controllers\CoreController;
use App\Models\AppUser;

class UserController extends CoreController
{

    /**
     * Méthode permettant d'afficher un formulaire de connexion
     *
     * @return void
     */
    public function login()
    {
        // views/user/login.tpl.php
        $this->show('user/login');
    }

    public function doLogin()
    {
        // 1) On récupère les infos du formulaire
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');


        // On vérifie que l'utilisateur existe bien en BDD
        $user = AppUser::findByEmail($email);

        if ($user !== false) {
            // L'utilisateur existe bien en BDD (son email est correct)
            // On va donc tester son mot de passe

            // if ($user !== false && $user->getPassword() === $password) {
            if (password_verify($password, $user->getPassword())) {
                // L'utilisateur existe en BDD et que son mot de passe
                // correspond à celui présent en BDD
                // On met en session les informations de l'utilisateur
                $_SESSION['userId'] = $user->getId();
                $_SESSION['userObject'] = $user;
                $_SESSION['isConnected'] = true;

                $this->redirect('main-home');
                exit;
            } else {
                // Le mot de passe n'est pas correct
                // mais on reste volontairement vague dans le message :-)...La sécu avant tout !
                $errorList[] = "Utilisateur ou mot de passe incorrect";
            }
        } else {
            // L'utilisateur n'existe pas en BDD (son email n'existe)
            // mais on reste volontairement vague dans le message :-)...La sécu avant tout !
            $errorList[] = "Utilisateur ou mot de passe incorrect";
        }

        // Le tableau n'est pas vide, il y a donc des erreurs
        if (!empty($errorList)) {
            // On transmet le tableau au formulaire de connexion
            // views/user/login.tpl.php
            $this->show('user/login', [
                'errorList' => $errorList
            ]);
        }
    }

    public function logout()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['userObject']);
        unset($_SESSION['isConnected']);

        header('Location: /');
        exit;
    }

    /**
     * Méthode permettant d'afficher un formulaire d'ajout d'un utilisateur
     *
     * @return void
     */
    public function add()
    {
        // 1) On génère un code unique
        // $token = $this->generateToken();

        // 3) On envoie le code à l'utilisateur (dans le formulaire à sécuriser)
        // views/user/add.tpl.php
        $this->show('user/add');
    }

    /**
     * Méthode permettant l'ajout d'un utilisateur en BDD
     *
     * @return void
     */
    public function create()
    {
        // Cette page n'est accessible qu'aux administrateurs du site
        // $this->checkAuthorization(['admin']);

        // Une fois le formulaire d'ajout soumis
        // on récupére les données transportées en POST
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
        $status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // On vérifie que les données ne sont pas vides et incorrectes
        // Pour tester l'unicité de l'email, on peut utiliser la méthode
        // findByEmail 
        if ($email == false) {
            $this->addFlashError("Merci de saisir un email valide");
        }

        if (empty($password)) {
            $this->addFlashError("Merci de saisir un mot de passe valide");
        }

        if (
            empty($firstname) ||
            empty($lastname) ||
            empty($role) ||
            empty($status)
        ) {
            $this->addFlashError("Merci de saisir tous les champs du formulaire");
        }

        // Si le tableau d'erreurs est vide, pas d'erreurs...
        if (empty($_SESSION['errors'])) {
            // Je peux créer l'utilisateur
            $user = new AppUser();
            $user->setEmail($email);
            $user->setLastname($lastname);
            $user->setFirstname($firstname);
            $user->setRole($role);
            $user->setStatus($status);
            $user->setPassword(password_hash($password, PASSWORD_DEFAULT));

            // On enregistre l'utilisateur en BDD
            $saved = $user->save();

            if ($saved === true) {
                // Si la sauvegarde s'est bien passée
                // On redirige vers la list des utilisateurs
                $this->addFlashInfo("L'utilisateur {$user->getFirstname()} a bien été créé");
                $this->redirect('user-list');
            } else {
                // Si la sauvegarde s'est mal passée
                // On redirige vers le formulaire de départ
                // et on affiche un message d'erreur
                $this->addFlashError('Erreur durant la sauvegarde');
                $this->redirect('user-add');
            }
        } else {
            // Il y a des erreurs...je les affiche
            // $this->show('user/add', [
            //     'errorList' => $errorList
            // ]);

            // On redirige vers le formulaire d'ajout (pour éviter la double soumission des données)
            // Les messages d'erreur s'afficheront grâce aux messages flash
            $this->redirect('user-add');
        }
    }
}
