<?php
// Every Model MUST extends this class

namespace BackOffice\Models;

use BackOffice\Utils\Database;
use PDO;
use JsonSerializable;

abstract class CoreModel
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $created_at;
    /**
     * @var string
     */
    protected $updated_at;

    /**
     * Method to save in the DB
     * If the object has an id => update
     * Else => insert
     * 
     * @return bool
     */
    public function save()
    {
        // If the id of the current object is > 0
        if ($this->id > 0) {
            // then, is it because we want to update the line of the table
            return $this->update();
        }
        else {
            // then it is beacuse we want to add a new line on the table
            return $this->insert();
        }
    }

    public abstract static function find($id);
    public abstract static function findAll();
    protected abstract function insert();
    protected abstract function update();
    public abstract function delete();



    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of created_at
     *
     * @return  string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     *
     * @return  string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
