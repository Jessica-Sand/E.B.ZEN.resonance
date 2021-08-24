<?php 

namespace App\Controllers;

use BackOffice\Controllers\CoreController;

class ServiceController extends CoreController
{
    /**
     * Method to show the list of the treatement
     *
     * @return void
     */
    public function list() {
        // $allServices = Service::findAll();

        $this->show('service/list');
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function add() {
        
        $this->show('service/add');
    }
}