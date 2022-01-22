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
     * Method to recover the theme associat to the articles
     *
     * @return void
     */
    public static function findThemeForArticle() {
        // 1)
        $pdo = Database::getPDO();

        // 2) On prépare la requete SQL
        $sql = 'SELECT theme_id, theme.name
            FROM article_theme
            INNER JOIN theme ON theme.id = article_theme.theme_id
            ';

            $pdoStatement = $pdo->query($sql);

            $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Product');

            return $results;
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