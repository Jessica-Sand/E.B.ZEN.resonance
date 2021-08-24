<?php

namespace App\Models;

use BackOffice\Utils\Database;
use oFramework\Utils\Database as UtilsDatabase;
use PDO;

class Treatment extends \BackOffice\Models\CoreModel {

    protected $name;
    protected $description;
    protected $picture;
    protected $duration;
    protected $price;

    /**
     * Method to find one data from the table Treatment
     * according to an id
     */  
    public static function find($treatmentId) {
        $pdo = UtilsDatabase::getPDO();

        $sql = '
            SELECT *
            FROM treatment
            WHERE id = ' . $treatmentId;

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchOject('App\Models\Treatment');

        return $result;
    }

    /**
     * Method to find all the data from the table Treatment
     */
    public static function findAll() {
        $pdo = UtilsDatabase::getPDO();

        $sql = '
            SELECT *
            FROM Treatment';

            $pdoStatement = $pdo->query($sql);

            $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\Models\Treatment');

            return $results;
    }

    /**
     * Method to insert a new the data in the table Treatment
     */
    protected function insert() {
        $pdo = UtilsDatabase::getPDO();

        $sql = '
            INSERT INTO treatment (name, description, picture, duration, price)
            VALUES (:name, :description, :picture, :duration, :price)
            ';

        $pdoStatement = $pdo->prepare($sql);
        $insertedRows = $pdoStatement->execute([
            ':name' => $this->name,
            ':description' => $this->description,
            ':picture' => $this->picture,
            ':duration' => $this->duration,
            ':price' => $this->price,
        ]);

        if ($insertedRows === true) {
            $this->id = $pdo->lastInsertId();
        }
        return $insertedRows;
    }

    protected function update() {
        // TODO
    }

    public function delete() {
        // TODO
    }

    public function jSonSerialize() {
        // TODO
    }

    // GETTERS

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }
    
    // SETTERS

    /**
     * Set the value of name
     */ 
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}