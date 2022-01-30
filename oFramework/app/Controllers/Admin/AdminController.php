<?php

namespace App\Controllers\Admin;

use oFramework\Controllers\CoreController;

use App\Models\Category;
use App\Models\Product;

class AdminController extends CoreController
{
    /**
     * Method for the backoffice homepage
     */
    public function home()
    {
        $this->checkAuthorization(['admin']);

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;

        $this->show('admin/home', [
            'categories' => Category::findAll(),
            'products' => Product::findAll(),
            'token' => $token
        ]);
    }
}
