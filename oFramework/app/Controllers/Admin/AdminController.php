<?php

namespace App\Controllers\Admin;

use oFramework\Controllers\CoreController;

use App\Models\Treatment;
use App\Models\Product;

class AdminController extends CoreController
{
    /**
     * Method for the backoffice homepage
     */
    public function home()
    {
        $this->checkAuthorization(['admin', 'catalog-manager']);

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;

        $this->show('admin/home', [
            'treatments' => Treatment::findFiveLastTreatments(),
            'products' => Product::findFiveLastProducts(),
            'token' => $token
        ]);
    }
}
