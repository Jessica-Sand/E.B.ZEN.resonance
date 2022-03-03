<?php 

namespace App\Controllers\Admin;

use App\Models\Article;
use App\Models\Theme;
use oFramework\Controllers\CoreController;

class BlogController extends CoreController
{
    /**
     * Method to show the list of the article in the backoffice
     *
     * @return void
     */
    public function admin() 
    {
        $this->checkAuthorization(['admin']);

        $this->show('admin/blog/list', [
            'article' => Article::findAll()
        ]);
    }
}