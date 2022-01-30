<?php 

namespace App\Controllers;

use App\Models\Article;
use App\Models\Theme;
use oFramework\Controllers\CoreController;

class BlogController extends CoreController
{
    /**
     * Method to show the list of the 5 last article published
     *
     * @return void
     */
    public function list() 
    {
       $this->show('blog/list', [
          'articles' => Article::fiveLastArticle(),

          // aside part
          'themes' => Theme::findAll(),
       ]);
    }

    /**
     * Method to show the list of the article from the same theme
     *
     * @return void
     */
    public function theme($id) 
    {
       $this->show('blog/article/theme', [
         // 'theme' => Theme::findThemeForArticle(),
         'theme' =>Theme::find($id),
         'articles' => Article::findAllByDetail($id),


         // aside part
         'themes' => Theme::findAll()
       ]);
    }

    /**
     * Method to show detail of an article
     *
     * @return void
     */
    public function details($id) 
    {
       $this->show('blog/article/details', [
          'article' => Article::find($id),

          // aside part
          'themes' => Theme::findAll(),
       ]);
    }

    /**
     * Method for the searching bar aside
     *
     * @return void
     */
    public function search($title) 
    {
       $this->show('partials/aside', [
          'article' => Article::findSearchByTitle($title)
       ]);
    }
}