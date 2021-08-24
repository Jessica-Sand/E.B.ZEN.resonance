<?php

namespace BackOffice\Utils;

use AltoRouter;
use Dispatcher;

class Application
{
    /**
     * @var AltoRouter
     */
    protected $altoRouter;

    /**
     * @var string
     */
    protected $controllersNamespace;

    public function __construct($controllersNamespace)
    {
        $this->controllersNamespace = $controllersNamespace;

        $this->altoRouter = new AltoRouter();

        if (array_key_exists('BASE_URI', $_SERVER)) {
            // then we definit the basePath of d'AltoRouter
            $this->altoRouter->setBasePath($_SERVER['BASE_URI']);
            // thus, or route match with the URL after the subdirectory sequence
        }
        // Not useful anymore 
        // @see CoreController::show#L205
        // // sinon
        // else {
        //     // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
        //     $_SERVER['BASE_URI'] = '/';
        // }

        $this->mapRoutes();
    }

    protected function mapRoutes()
    {
        // map all routes in app/routes.php file
        include __DIR__ . '/../routes.php';
    }

    protected function addRoute($httpMethod, $url, $controllerName, $methodName, $routeName = '')
    {
        $this->altoRouter->map(
            $httpMethod, // HTTP Method
            $url, // URL pattern
            [ // target containing controller name and method name
                'controller' => $this->controllersNamespace . '\\' . $controllerName, // '\\' => \
                'method' => $methodName
            ],
            $routeName // => route's name (for URL generation)
        );
    }

    /**
     * Method launching our app
     * => specific execution for each page
     * Analogy : to then be able to make a specific call to a person
     */
    public function run()
    {
        // We ask AltoRouter to match current url with one of our routes
        $match = $this->altoRouter->match();

        // You can optionnally add a try/catch here to handle Exceptions
        // Instanciate the dispatcher, give it the $match variable and a fallback action
        $dispatcher = new Dispatcher($match, $this->controllersNamespace . '\ErrorController::error404');

        // Send arguments to controllers
        // So we can stop using global keyword :-)
        $dispatcher->setControllersArguments($this->altoRouter, $match);

        // then run the dispatch method which will call the mapped method
        $dispatcher->dispatch();
    }

    /**
     * Get proprety content the object AltoRouter
     *
     * @return AltoRouter
     */
    public function getAltoRouter(): AltoRouter // ": AltoRouter" = typehint = typing of the method's return
    {
        return $this->altoRouter;
    }
}