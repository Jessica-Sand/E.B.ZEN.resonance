<?php

namespace App\Models;

use oFramework\Utils\Database;
use PDO;

class Product extends  \oFramework\Models\CoreModel {

    protected $name;
    protected $subtitle;
    protected $description;
    protected $picture;
    protected $content;
    protected $price;

    /**
     * Method to find one data from the table Product
     * according to an id
     */ 
    public static function find($id) {
        $pdo = Database::getPDO();

        $sql = '
        SELECT *
        FROM product
        WHERE id = ' . $id;

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchObject('App\Models\Product');

        return $result;
    }

    /**
     * Method to find all the data from the table Product
     */
    public static function findAll() {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM product';

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Product');

        return $results;
    }

    /**
     * Method to return the 5 last treatment added
     * 
     * @return void
     */
    public static function findFiveLastProducts() {
        $pdo = Database::getPDO();

        $sql = 'SELECT name
                From product
                LIMIT 5';

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\Models\Product');
 
        return $results;
    }

    /**
     * Method to save a new object in the table product
     *
     * @return bool
     */
    protected function insert() {
        $pdo = Database::getPDO();
        $sql = "INSERT INTO `product` (name, subtitle, description, picture, content, price)
                VALUES (:name, :subtitle, :description, :picture, :content, :price)";
        $pdoStatement = $pdo->prepare($sql);

        // The method 'execute' returns :
        // - TRUE if it successed
        // - FALSE if not
        $insertedRows = $pdoStatement->execute([
            ':name' => $this->name,
            ':subtitle' => $this->subtitle,
            ':description' => $this->description,
            ':picture' => $this->picture,
            ':content' => $this->content, 
            ':price' => $this->price
        ]);
        
        // If at least one row is added
        if ($insertedRows === true) {
            // Then we recover the autoincremated id generated by MySQL
            $this->id = $pdo->lastInsertId();
        }

        // We return true or false
        return $insertedRows;
    }

    protected function update() {
        $pdo = Database::getPDO();

        $sql = "UPDATE `product`
                SET name = :name,
                    description = :description,
                    subtitle = :subtitle,
                    -- picture = :picture,
                    content = :content,
                    price = :price,
                    updated_at = NOW()
                WHERE id = :id
                ";
        
        $pdoStatement = $pdo->prepare($sql);

        $updatedRow = $pdoStatement->execute([
            ':name' => $this->name,
            ':description' => $this->description,
            ':subtitle' => $this->subtitle,
            // ':picture' => $this->picture,
            ':content' => $this->content,
            ':price' => $this->price,
            ':id' => $this->id
        ]);

        if ($updatedRow === true) {
            $this->id = $pdo->lastInsertId();
        }

        return $updatedRow;
    }

    public function delete() {
        $pdo = Database::getPDO();

        $sql = "DELETE FROM `product`
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
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
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
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
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
     * Set the value of subtitle
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
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
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

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