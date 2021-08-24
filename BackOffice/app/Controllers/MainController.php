<?php

namespace App\Controllers;

use BackOffice\Controllers\CoreController;

use App\Models\Service;
use App\Models\Product;

class MainController extends CoreController
{
    /**
     * Method for the backoffice homepage
     */
    public function home()
    {
        $this->show('main/home', [
            'categories' => Service::findAll(),
            'products' => Product::findAll()
        ]);
    }
}
