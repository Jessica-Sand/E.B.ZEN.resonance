<?php 

namespace App\Controllers;

use BackOffice\Controllers\CoreController;

class TreatmentController extends CoreController
{
    /**
     * Method to show the list of the treatement
     *
     * @return void
     */
    public function list() {
        // $allTreatments = Treatment::findAll();

        $this->show('treatment/list');
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function add() {
        
        $this->show('treatment/add');
    }
}