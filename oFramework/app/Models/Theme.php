<?php

namespace App\Models;

use oFramework\Utils\Database;
use PDO;
use Symfony\Component\VarDumper\Cloner\Data;

class Theme extends  \oFramework\Models\CoreModel {
    protected $name;
    
    public static function find($id) {
    }

    public static function findAll() {
        $pdo = Database::getPDO();

        $sql = 'SELECT *
            FROM theme';
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Theme');

        return $results;
    }

    protected function insert() {
    }

    protected function update() {
    }

    public function delete(){
        
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}