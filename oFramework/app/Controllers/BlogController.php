<?php 

namespace App\Controllers;

use App\Models\Article;
use App\Models\Theme;
use oFramework\Controllers\CoreController;

class BlogController extends CoreController
{
    /**
     * Method to show the list of the blog article
     *
     * @return void
     */
    public function list() 
    {
       $this->show('blog/list');
    }

    /**
     * Method to show the article
     *
     * @return void
     */
    public function details() 
    {
       $this->show('blog/details');
    }
}