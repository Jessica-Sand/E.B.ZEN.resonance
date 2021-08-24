<?php 

namespace App\Controllers;

use App\Models\Category;
use BackOffice\Controllers\CoreController;

class CategoryController extends CoreController
{
    /**
     * Method to show the list of the category treatement
     *
     * @return void
     */
    public function list() {
        // $allCategorys = Category::findAll();

        $this->show('category/list');
    }

    /**
     * Method to show the formulare to create a new category
     *
     * @return void
     */
    public function add() {
        
        $this->show('category/add');
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function create() {
        // Recover the data of the formular
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $picture = filter_input(INPUT_POST, 'picture');

        // Check if the data are not empty
        if (
            empty($title) ||
            empty($description) ||
            empty($picture)
            ) {
            $this->addFlashError("Merci de saisir tous les champs du formulaire");
        }

        // If the error array is empty then no erros
        if (empty($_SESSION['errors'])) {
            // Creating an empty object from the model Category
            $category = new Category();

            // Filling the object with the data recovered form the formular
            $category->setTitle($title);
            $category->setDescription($description);
            $category->setPicture($picture);

            // Saving the category in the BD
            $saved = $category->save();

            if ($saved === true) {
                // if the save was successful
                // redirect to category list
                $this->addFlashInfo("La catégorie {$category->getTitle()} a bien été créé");
                $this->redirect('category-list');
            } else {
                // if there arre errors redirect to adding a category to avoid a double submission
                $this->addFlashError('Erreur durant la sauvegarde');
                $this->redirect('category-add');
            }
        } else {
            // if there arre errors redirect to adding a category to avoid a double submission
            $this->redirect('category-add');
        }
    }

    /**
     * Method to edit a treatement
     *
     * @return void
     */
    public function edit() {
        
        $this->show('category/edit');
    }
}