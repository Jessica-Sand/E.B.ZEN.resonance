<?php

namespace App\Controllers;

use oFramework\Controllers\CoreController;
use App\Models\Category;

class MainController extends CoreController
{
    /**
     * Method for the home page
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

    /**
     * Method for the legacy mention page
     */
    public function legal()
    {
        $this->show('main/legal');
    }
}
