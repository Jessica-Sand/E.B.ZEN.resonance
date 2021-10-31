<?php 

namespace App\Controllers;

use App\Models\Treatment;
use oFramework\Controllers\CoreController;

class ServiceController extends CoreController
{
    /**
     * Method to show the list of the treatement
     *
     * @return void
     */
    public function list() 
    {

        $this->show('admin/service/list', [
            'treatments' => Treatment::findAll()
        ]);
    }

    /**
     * Method to show the formulare to add a new treatement
     *
     * @return void
     */
    public function add() 
    {
        
        $this->show('admin/service/add');
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function create() 
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING);
        $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

        $treatment = new Treatment();

        $treatment->setName($name);
        $treatment->setDescription($description);
        $treatment->setSubtitle($subtitle);
        $treatment->setDuration($duration);
        $treatment->setPrice($price);
        $treatment->setCategoryId($category_id);

        $inserted = $treatment->save();

        if ($inserted === true) {
            $this->addFlashInfo("Le soin {$treatment->getName()} à bien été créée");
            header('Location: /admin/service/list');
        } else {
            $this->addFlashError('Erreur durant l\'ajout');
        }   
    }

    /**
     * Method to edit a treatment
     */
    public function update($id) 
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING);
        $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

        $treatment = Treatment::find($id);

        $treatment->setName($name);
        $treatment->setDescription($description);
        $treatment->setSubtitle($subtitle);
        $treatment->setDuration($duration);
        $treatment->setPrice($price);
        $treatment->setCategoryId($category_id);

        $updated = $treatment->save();

        if ($updated == true) {
            global $router;
            header('Location: /admin/service/list');
            $this->addFlashInfo("Le soin {$treatment->getName()} à bien été mis à jour");
        } else {
            $this->addFlashError(('Erreur durant la mise à jour du soin'));
        }
    }

    /**
     * Method to show the formular to edit a treatement
     *
     * @return void
     */
    public function edit($id) 
    {
        $this->show('admin/service/edit', [
            'treatment' => Treatment::find($id)
        ]);
    }

    /**
     * Method to delete a treatment
     */
    public function delete($id) 
    {
        $treatment = Treatment::find($id);

        $deleted = $treatment->delete();

        if ($deleted === true) {
            global $router;
            header('Location: /admin/service/list');
            $this->addFlashInfo("Le soin {$treatment->getName()} à bien été supprimé");
        } else {
            $this->addFlashError('Erreur durant la suppression du soin');
        }  
    }
}