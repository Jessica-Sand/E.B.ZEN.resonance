<?php

namespace App\Controllers;

use oFramework\Controllers\CoreController;

use App\Models\Category;
use App\Models\Product;

class AdminController extends CoreController
{
    /**
     * Method for the backoffice homepage
     */
    public function home()
    {
        $this->show('admin/home', [
            'categories' => Category::findAll(),
            'products' => Product::findAll()
        ]);
    }
}
