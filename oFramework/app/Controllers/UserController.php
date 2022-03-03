<?php

namespace App\Controllers;

use oFramework\Controllers\CoreController;
use App\Models\AppUser;

class UserController extends CoreController
{

    /**
     * Method to show a login formular
     *
     * @return void
     */
    public function login()
    {
        // views/user/login.tpl.php
        $this->show('admin/user/login');
    }

    /**
     * Method to show the list of the admin
     * 
     * @return void
     */
    public function list()
    {
        // This page is only accessible for the admin
        $this->checkAuthorization(['admin']);

        $this->show('admin/user/list', [
            'users' => AppUser::findAll()
        ]);
    }

    public function doLogin()
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');


        // verify if the user exist in the DB
        $user = AppUser::findByEmail($email);

        if ($user !== false) {
            // The user exist (the email is correct)
            // testing the password

            // if ($user !== false && $user->getPassword() === $password) {
            if (password_verify($password, $user->getPassword())) {
                // The user exist in the DB et the password is the same as in the DB
                // We put the user's information in session
                $_SESSION['userId'] = $user->getId();
                $_SESSION['userObject'] = $user;
                $_SESSION['isConnected'] = true;

                $this->redirect('admin-home');
                exit;
            } else {
                // The password is wrong
                // but we don't give a hint in the error message why it doesn't works 
                $errorList[] = "Utilisateur ou mot de passe incorrect";
            }
        } else {
            //  The user dosn't exist in the DB (the email doesn't exist)
            //  but we don't give a hint in the error message why it doesn't works
            $errorList[] = "Utilisateur ou mot de passe incorrect";
        }

        // The table isn't empty, there are errors
        if (!empty($errorList)) {
            // We send the table to the connection form
            // views/user/login.tpl.php
            $this->show('admin/user/login', [
                'errorList' => $errorList
            ]);
        }
    }

    public function logout()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['userObject']);
        unset($_SESSION['isConnected']);

        header('Location: /admin/home');
        exit;
    }

    /**
     * Methode to show a formular to add a new user
     *
     * @return void
     */
    public function add()
    {
        // This page is only accessible for the admin
        $this->checkAuthorization(['admin']);

        // 1) We generate a unique code
        $token = $this->generateToken();

        // 3) We send the code to the user (in the secured formular)
        // views/user/add.tpl.php
        $this->show('admin/user/add');
    }

    /**
     * Method to add a new user in the DB
     *
     * @return void
     */
    public function create()
    {
        // This page is only accessible for the admin
        $this->checkAuthorization(['admin']);

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
        $status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // Testing the uniqueness of the de email, with the method findByEmail 
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

        // If the error table is empty, no erros...
        if (empty($_SESSION['errors'])) {
            // We can create a user
            $user = new AppUser();
            $user->setEmail($email);
            $user->setLastname($lastname);
            $user->setFirstname($firstname);
            $user->setRole($role);
            $user->setStatus($status);
            $user->setPassword(password_hash($password, PASSWORD_DEFAULT));

            $saved = $user->save();

            if ($saved === true) {
                $this->addFlashInfo("L'utilisateur {$user->getFirstname()} a bien été créé");
                $this->redirect('admin-list');
            } else {
                $this->addFlashError('Erreur durant la sauvegarde');
                $this->redirect('admin-add');
            }
        } else {
            // No erros ... show it
            // $this->show('admin/add', [
            //     'errorList' => $errorList
            // ]);

            $this->redirect('admin-add');
        }
    }

    /**
     * Method to edit a user
     */
    public function update($id) 
    {
        // This page is only accessible for the admin
        $this->checkAuthorization(['admin']);
        
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
        $status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $user = AppUser::find($id);
        // $categories = Category::findAllByTreatmentId($id);

        $user->setLastname($lastname);
        $user->setFirstname($firstname);
        $user->setRole($role);
        $user->setStatus($status);

        $updated = $user->save();

        if ($updated == true) {
            global $router;
            header('Location: /admin/user/list');
            $this->addFlashInfo("L'utilisateur {$user->getFirstname()}{$user->getLastname()} à bien été mis à jour");
        } else {
            $this->addFlashError(('Erreur durant la mise à jour de l\'utilisateur'));
        }
    }

    /**
     * Method to show the formular to edit a user
     *
     * @return void
     */
    public function edit($id) 
    {
        // This page is only accessible for the admin
        $this->checkAuthorization(['admin']);

        $this->show('admin/user/edit', [
            'user' => AppUser::find($id)
        ]);
    }
}
