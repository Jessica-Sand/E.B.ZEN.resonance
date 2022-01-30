<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Treatment;
use oFramework\Controllers\CoreController;
use Symfony\Component\VarDumper\Caster\Caster;

class TreatmentController extends CoreController
{
    /**
     * Method for the list of the treatment categories
     *
     */
    public function list()
    {
        $this->show('treatment/list', [
            'categories' => Category::findAll()
        ]);
    }

    /**
     * Method for the detail of the category treatment
     */
    public function treatment($id)
    {
        $modelTreatment = new Treatment();
        $treatments =  $modelTreatment->findAllByDetail($id);
        $modelCategory = new Category();
        $category = $modelCategory->find($id);
        
        $this->show('treatment/details', [
            'id' => $id,
            'treatments' => $treatments,
            'category' => $category
        ]);
    }
}
