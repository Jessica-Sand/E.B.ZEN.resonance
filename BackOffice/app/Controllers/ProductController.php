<?php 

namespace App\Controllers;

use BackOffice\Controllers\CoreController;

class ProductController extends CoreController
{
     /**
     * Method to show the list of the product
     *
     * @return void
     */
    public function list() {
        // $allProducts = Product::findAll();

        $this->show('product/list');
    }

    /**
     * Method to add a new product
     *
     * @return void
     */
    public function add() {
        
        $this->show('product/add');
    }

    /**
     * Method to edit a product
     *
     * @return void
     */
    public function edit() {
        
        $this->show('product/edit');
    }
}