<?php 

namespace App\Controllers\Admin;

use App\Models\Product;
use oFramework\Controllers\CoreController;

class ProductController extends CoreController
{
     /**
     * Method to show the list of the product
     *
     * @return void
     */
    public function list() 
    {
        $this->show('admin/product/list', [
            'products' => Product::findAll()
        ]);
    }

    /**
     * Method to show the formulare to create a new product
     *
     * @return void
     */
    public function add() 
    {
        $this->show('admin/product/add');
    }

    /**
     * Method to add a new product
     */
    public function create() 
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $picture = filter_input(INPUT_POST, 'picture');
        $content = filter_input(INPUT_POST, 'content', FILTER_VALIDATE_FLOAT);
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

        $product = new Product();

        $product->setName($name);
        $product->setSubtitle($subtitle);
        $product->setDescription($description);
        $product->setPicture($picture);
        $product->setContent($content);
        $product->setPrice($price);

        $inserted = $product->save();

        if ($inserted === true) {
            $this->addFlashInfo("Le produit {$product->getName()} à bien été créé");
            header('Location: /admin/product/list');
        } else {
            $this->addFlashError('Erreur durant l\'ajout');
        }
    }

    /**
     * Method to edit a product treatement
     *
     * @return void
     */
    public function update($id) 
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $picture = filter_input(INPUT_POST, 'picture');
        $content = filter_input(INPUT_POST, 'content', FILTER_VALIDATE_FLOAT);
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

        $product = Product::find($id);

        $product->setName($name);
        $product->setSubtitle($subtitle);
        $product->setDescription($description);
        $product->setPicture($picture);
        $product->setContent($content);
        $product->setPrice($price);

        $updated = $product->save();

        if ($updated === true) {
            global $router;
            header('Location: /admin/product/list');
            $this->addFlashInfo("Le produit {$product->getName()} à bien été mise à jour");
        } else {
            $this->addFlashError('Erreur durant la mise à jour du produit');
        }    
    }

    /**
     * Method to show the formulare to edit a product
     *
     * @return void
     */
    public function edit($id) 
    {
        $product = Product::find($id);

        $this->show('admin/product/edit', [
            'product' => $product
        ]);
    }

    /**
     * Method to delete a product treatment
     */
    public function delete($id) 
    {
        $product = Product::find($id);

        $deleted = $product->delete();

        if ($deleted === true) {
            global $router;
            header('Location: /admin/product/list');
            $this->addFlashInfo("Le produit {$product->getName()} à bien été supprimée");
        } else {
            $this->addFlashError('Erreur durant la suppression d produit');
        }
    }
}