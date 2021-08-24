<?php

namespace App\Controllers;

use oFramework\Controllers\CoreController;

class ServiceController extends CoreController
{
    /**
     * Method for the details of a service
     */
    public function details()
    {
        $this->show('soins/details');
    }
}
