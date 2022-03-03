<?php 

namespace App\Controllers\Admin;

use App\Models\Category;
use oFramework\Controllers\CoreController;

class CategoryController extends CoreController
{
    /**
     * Method to show the list of the category treatement
     *
     * @return void
     */
    public function list() 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;

       $this->show('admin/category/list', [
            'categories' => Category::findAll()
        ]);
    }

    /**
     * Method to show the formulare to create a new category
     *
     * @return void
     */
    public function add() 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $this->show('admin/category/add');
    }

    /**
     * Method to add a new treatement
     *
     * @return void
     */
    public function create() 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);

        // Recover the data of the formular
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $picture = filter_input(INPUT_POST, 'picture');

        $category = new Category();

        $category->setTitle($title);
        $category->setDescription($description);
        $category->setPicture($picture);

        $inserted = $category->save();

        if ($inserted === true) {
            $this->addFlashInfo("La category {$category->getTitle()} à bien été créé");
            header('Location: /admin/category/list');
        } else {
            $this->addFlashError('Erreur durant l\'ajout');
        }
    }

    /**
     * Method to edit a category treatement
     *
     * @return void
     */
    public function update($id) 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);
        
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $picture = filter_input(INPUT_POST, 'picture');

        $category = Category::find($id);

        $category->setTitle($title);
        $category->setDescription($description);
        $category->setPicture($picture);

        $updated = $category->save();

        if ($updated === true) {
            global $router;
            header('Location: /admin/category/list');
            $this->addFlashInfo("La category {$category->getTitle()} à bien été mise à jour");
        } else {
            $this->addFlashError('Erreur durant la mise à jour de la catégorie');
        }    
    }

    /**
     * Method to show the formulare to edit a category treatment
     *
     * @return void
     */
    public function edit($id) 
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;

        $category = Category::find($id);

        $this->show('admin/category/edit', [
            'category' => $category
        ]);
    }

    /**
     * Method to delete a category treatment
     */
    public function delete($id) 
    {
        $this->checkAuthorization(['admin']);

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        
        $category = Category::find($id);

        $deleted = $category->delete();

        if ($deleted === true) {
            global $router;
            header('Location: /admin/category/list');
            $this->addFlashInfo("La category {$category->getTitle()} à bien été supprimée");
        } else {
            $this->addFlashError('Erreur durant la suppression de la catégorie');
        }
    }
}