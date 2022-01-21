<?php 

namespace App\Controllers;

use App\Models\Article;
use App\Models\Theme;
use oFramework\Controllers\CoreController;

class BlogController extends CoreController
{
   /**
     * Method to show the list of the 5 last article published on the blog
     */
    public function last()
    {
        $this->show('blog/list');
    }

    /**
     * Method to show the list of the article from the same category
     *
     * @return void
     */
    public function list() 
    {
       $this->show('blog/list', [
          'themes' => Theme::findAll(),
          'articles' => Article::findAll()
       ]);
    }

    /**
     * Method to show detail of an article
     *
     * @return void
     */
    public function details() 
    {
       $this->show('blog/details');
    }
}