<?php

namespace App\Models;

use oFramework\Utils\Database;
use PDO;
use Symfony\Component\VarDumper\Cloner\Data;

class Article extends  \oFramework\Models\CoreModel {

    protected $title;
    protected $realisedAt;
    protected $content;
    protected $picture;

    /**
     * Method to find the 5 last article published
     */
    public function fiveLastArticle() {
        // $pdo = Database::getPDO();

        // $sql = '';

        // $pdoStatement = $pdo->query($sql);

        // $article = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Blog');

        // return $article;
    }

    public static function find($id) {
    }

    public static function findAll() {
        $pdo = Database::getPDO();

        $sql = 'SELECT *
            FROM article';
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Article');

        return $results;
    }

    protected function insert() {
    }

    protected function update() {
    }

    public function delete(){

    }


    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of realisedAt
     */ 
    public function getRealisedAt()
    {
        return $this->realisedAt;
    }

    /**
     * Set the value of realisedAt
     *
     * @return  self
     */ 
    public function setRealisedAt($realisedAt)
    {
        $this->realisedAt = $realisedAt;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
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
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
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
}