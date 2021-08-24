<?php

namespace App\Models;

use BackOffice\Utils\Database;
use PDO;

class Category extends \BackOffice\Models\CoreModel {

    protected $title;
    protected $description;
    protected $picture;

    // I must implements these methods
    public static function find($id) {
        // TODO
    }

    public static function findAll() {
        // TODO
    }

    protected function insert() {
        // TODO
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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
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

    // SETTERS

    /**
     * Set the value of title
     */ 
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Set the value of description
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
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