<?php 

namespace App\Controllers\Admin;

use App\Models\Treatment;
use App\Models\Category;
use oFramework\Controllers\CoreController;

class TreatmentController extends CoreController
{
    /**
     * Method to show the list of the treatement
     *
     * @return void
     */
    public function list() 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);
        
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
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $this->show('admin/service/add', [
            'categories' => Category::findAll()
        ]);
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function create() 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);

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
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING);
        $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

        $treatment = Treatment::find($id);
        // $categories = Category::findAllByTreatmentId($id);

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
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $this->show('admin/service/edit', [
            'treatment' => Treatment::find($id)
        ]);
    }

    /**
     * Method to delete a treatment
     */
    public function delete($id) 
    {
        $this->checkAuthorization(['admin']);

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