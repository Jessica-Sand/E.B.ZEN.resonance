<?php

namespace App\Models;

use BackOffice\Utils\Database;
use BackOffice\Models\CoreModel;
use oFramework\Utils\Database as UtilsDatabase;
use PDO;

class AppUser extends CoreModel
{
    private $email;
    private $password;
    private $firstname;
    private $lastname;
    private $role;
    private $status;

    /**
     * Méthode permettant d'ajouter un enregistrement dans la table app_user
     * L'objet courant doit contenir toutes les données à ajouter : 1 propriété => 1 colonne dans la table
     * 
     * @return bool
     */
    public function insert()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = UtilsDatabase::getPDO();
        $sql = "
            INSERT INTO `app_user` (email, password, firstname, lastname, role, status)
            VALUES (:email, :password, :firstname, :lastname, :role, :status)
        ";

        // On demande à PDO de préparer la requete à passer des tests de sécurité
        $pdoStatement = $pdo->prepare($sql);

        // $insertedRows = $pdo->exec($sql);
        // Execution de la requête d'insertion (exec, pas query)
        // On peut envoyer les données « brutes » à execute() qui va les "sanitize" pour SQL.
        $insertedRows = $pdoStatement->execute([
            ':email' => $this->email,
            ':password' => $this->password,
            ':firstname' => $this->firstname,
            ':lastname' => $this->lastname,
            ':role' => $this->role,
            ':status' => $this->status
        ]);

        // La méthode 'execute' retourne :
        // - TRUE en cas de succès success
        // - FALSE en cas d'échec.

        // Si au moins une ligne ajoutée
        if ($insertedRows === true) {
            // Alors on récupère l'id auto-incrémenté généré par MySQL
            $this->id = $pdo->lastInsertId();
        }

        // On retourne VRAI ou FAUX
        return $insertedRows;
    }

    /**
     * Méthode permettant de mettre à jour un enregistrement dans la table app_user
     * L'objet courant doit contenir l'id, et toutes les données à ajouter : 1 propriété => 1 colonne dans la table
     * 
     * @return bool
     */
    /**
     * Méthode permettant de mettre un enregistrement dans la table category
     * L'objet courant doit contenir toutes les données à ajouter : 1 propriété => 1 colonne dans la table
     * 
     * @return bool
     */
    public function update()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = UtilsDatabase::getPDO();

        // Ecriture de la requête UPDATE
        $sql = "UPDATE `app_user`
                SET email = :email,
                    password = :password, 
                    firstname = :firstname, 
                    role = :role,
                    status = :status,
                    updated_at = NOW()
                WHERE id = :id
        ";

        // On demande à PDO de préparer la requete à passer des tests de sécurité
        $pdoStatement = $pdo->prepare($sql);

        // Execution de la requête de mise à jour (exec, pas query)
        // On peut envoyer les données « brutes » à execute() qui va les "sanitize" pour SQL.
        $updatedRow = $pdoStatement->execute([
            ':email' => $this->email,
            ':password' => $this->password,
            ':firstname' => $this->firstname,
            ':lastname' => $this->role,
            ':status' => $this->status,
            ':id' => $this->id,
        ]);

        // La méthode 'execute' retourne :
        // - TRUE en cas de succès success
        // - FALSE en cas d'échec.
        return $updatedRow;
    }

    /**
     * Méthode permettant de supprimer un enregistrement dans la table app_user
     * L'objet courant doit contenir toutes les données à ajouter : 1 propriété => 1 colonne dans la table
     * 
     * @return bool
     */
    public function delete()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = UtilsDatabase::getPDO();

        // Ecriture de la requête de DELETE
        $sql = "DELETE FROM `app_user`
                WHERE id = :id";

        // On demande à PDO de préparer la requete à passer des tests de sécurité
        $pdoStatement = $pdo->prepare($sql);

        // Execution de la requête de suppresion (exec, pas query)
        // On peut envoyer les données « brutes » à execute() qui va les "sanitize" pour SQL.
        $deletedRow = $pdoStatement->execute([
            ':id' => $this->id
        ]);

        // La méthode 'execute' retourne :
        // - TRUE en cas de succès success
        // - FALSE en cas d'échec.

        // On retourne VRAI ou FAUX
        return $deletedRow;
    }

    /**
     * Méthode de rechercher en BDD un utilisateur 
     * en fonction de son E-mail
     *
     * @param string $email
     * @return AppUser
     */
    public static function findByEmail($email)
    {
        // se connecter à la BDD
        $pdo = UtilsDatabase::getPDO();

        // écrire notre requête
        $sql = 'SELECT * FROM `app_user` WHERE `email`=:email';

        // Je prépare la requete SQL
        $pdoStatement = $pdo->prepare($sql);


        // On execute la requete SQL
        $pdoStatement->execute([
            ':email' => $email
        ]);

        // un seul résultat => fetchObject
        // self::class retourne le fqcn (nom complet) de la classe
        // fetchObject retourne :
        // - Un objet si la requete possède un résultat
        // - false dans le cas contraire
        return $pdoStatement->fetchObject(self::class);
    }
    /**
     * Méthode permettant de récupérer un enregistrement de la table app_user en fonction d'un id donné
     * 
     * @param int $userId ID de l'utilisateur
     * @return AppUser
     */
    public static function find($userId)
    {
        // se connecter à la BDD
        $pdo = UtilsDatabase::getPDO();

        // écrire notre requête
        $sql = 'SELECT * FROM `app_user` WHERE `id` =' . $userId;

        // exécuter notre requête
        $pdoStatement = $pdo->query($sql);

        // un seul résultat => fetchObject
        // self::class retourne le fqcn (nom complet) de la classe
        $category = $pdoStatement->fetchObject(self::class);

        // retourner le résultat
        return $category;
    }

    /**
     * Méthode permettant de récupérer tous les enregistrements de la table app_user
     * 
     * @return AppUser[]
     */
    public static function findAll()
    {
        $pdo = UtilsDatabase::getPDO();
        $sql = 'SELECT * FROM `app_user`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $results;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }


    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
