<?php

namespace App\Models;

use BackOffice\Utils\Database;
use PDO;

class Brand extends \BackOffice\Models\CoreModel {

    protected $name;
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
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
     * Set the value of name
     */ 
    public function setName($name)
    {
        $this->name = $name;
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