<?php

namespace App\Controllers;

use oFramework\Controllers\CoreController;

use App\Models\Category;
use App\Models\Product;

class MainController extends CoreController
{
    /**
     * Method for the homepage
     */
    public function home()
    {
        $this->show('main/home');
    }

    /**
     * Method for the contact page
     */
    public function contact()
    {
        $this->show('main/contact');
    }
}
