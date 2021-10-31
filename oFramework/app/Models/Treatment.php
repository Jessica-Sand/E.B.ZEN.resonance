<?php

namespace App\Models;

use oFramework\Utils\Database;
use PDO;

class Treatment extends \oFramework\Models\CoreModel {

    protected $name;
    protected $description;
    protected $subtitle;
    protected $duration;
    protected $price;
    protected $category_id;

    /**
     * Method to find one data from the table Treatment
     * according to an id
     */  
    public static function find($id) {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM treatment
            WHERE id = ' . $id;

        $pdoStatement = $pdo->query($sql);

        $treatment = $pdoStatement->fetchObject('App\Models\Treatment');

        return $treatment;
    }

    /**
     * Method to find all the data from the table Treatment
     */
    public static function findAll() {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM treatment';

            $pdoStatement = $pdo->query($sql);

            $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\Models\Treatment');

            return $results;
    }

    /**
     * To have the name of the category of a treatment
     *
     * @return void
     */
    public static function findAllByDetail($id) {
        $pdo = Database::getPDO();

        $sql = 'SELECT treatment. *, 
                        category.title as category_title
                FROM treatment
                INNER JOIN category on category.id = treatment.category_id
                WHERE category.id =' . $id;

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\Models\Treatment');

        return $results;
    }

    /**
     * Method to insert a new the data in the table Treatment
     */
    protected function insert() {
        $pdo = Database::getPDO();

        $sql = '
            INSERT INTO treatment (name, description, subtitle, duration, price, category_id)
            VALUES (:name, :description, :subtitle, :duration, :price, :category_id)
            ';

        $pdoStatement = $pdo->prepare($sql);
        $insertedRows = $pdoStatement->execute([
            ':name' => $this->name,
            ':description' => $this->description,
            ':subtitle' => $this->subtitle,
            ':duration' => $this->duration,
            ':price' => $this->price,
            ':category_id' => $this->category_id
        ]);

        if ($insertedRows === true) {
            $this->id = $pdo->lastInsertId();
        }
        return $insertedRows;
    }

    protected function update() {
        $pdo = Database::getPDO();

        $sql = "UPDATE `treatment`
                SET name = :name,
                    description = :description,
                    subtitle = :subtitle,
                    duration = :duration,
                    price = :price,
                    category_id = :category_id,
                    updated_at = NOW()
                WHERE id = :id
                ";
        
        $pdoStatement = $pdo->prepare($sql);

        $updatedRow = $pdoStatement->execute([
            ':name' => $this->name,
            ':description' => $this->description,
            ':subtitle' => $this->subtitle,
            ':duration' => $this->duration,
            ':price' => $this->price,
            ':category_id' => $this->category_id,
            ':id' => $this->id
        ]);

        if ($updatedRow === true) {
            $this->id = $pdo->lastInsertId();
        }

        return $updatedRow;
    }

    public function delete() {
        $pdo = Database::getPDO();

        $sql = "DELETE FROM `treatment`
                WHERE id = :id";

        $pdoStatement = $pdo->prepare($sql);

        $deletedRow = $pdoStatement->execute([
            ':id' => $this->id
        ]);

        return $deletedRow;
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
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
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
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

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

    /**
     * Get the value of category_id
     */ 
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}