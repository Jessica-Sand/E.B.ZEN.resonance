<?php 

namespace App\Controllers;

use oFramework\Controllers\CoreController;

class CatalogueController extends CoreController
{
    /**
     * Method for the product list
     */
    public function list()
    {
        $this->show('catalogue/list');
    }

    /**
     * Method for the detail of a product
     */
    public function details()
    {
        $this->show('catalogue/details');
    }

    /**
     * Method for the detail of the shopping cart
     */
    public function cart()
    {
        $this->show('catalogue/cart');
    }
}