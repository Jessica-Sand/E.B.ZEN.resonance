<?php 

namespace App\Controllers;

use BackOffice\Controllers\CoreController;

class CategoryController extends CoreController
{
    /**
     * Method to show the list of the category treatement
     *
     * @return void
     */
    public function list() {
        // $allCategorys = Category::findAll();

        $this->show('category/list');
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function add() {
        
        $this->show('category/add');
    }

    /**
     * Method to edit a treatement
     *
     * @return void
     */
    public function edit() {
        
        $this->show('category/edit');
    }
}