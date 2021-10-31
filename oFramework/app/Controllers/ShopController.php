<?php 

namespace App\Controllers;

use App\Models\Product;
use oFramework\Controllers\CoreController;

class ShopController extends CoreController
{
    /**
     * Method for the product list
     */
    public function list()
    {
        $this->show('shop/list', [
            'products' => Product::findAll()
        ]);
    }

    /**
     * Method for the detail of a product
     */
    public function details($id)
    {   
            $modelProduct = new Product();
            $product = $modelProduct->find($id);

            $this->show('shop/details', [
                'id' => $id,
                'product' => $product
        ]);
    }

    /**
     * Method for the detail of the shopping cart
     */
    public function cart()
    {
        $this->show('shop/cart');
    }
}