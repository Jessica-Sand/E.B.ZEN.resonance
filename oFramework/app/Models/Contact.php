<?php

namespace App\Models;

use oFramework\Utils\Database;
use PDO;
use Symfony\Component\VarDumper\Cloner\Data;

class Contact extends  \oFramework\Models\CoreModel {

    protected $firstname;
    protected $lastname;
    protected $email;
    protected $subject;
    protected $message;

    public static function find($id) {}
    public static function findAll(){}
    protected function insert() {}
    protected function update() {}
    public function delete() {}
}