<?php

/*
To map your routes, use this code

$this->addRoute(
    $httpMethod,
    $url,
    $controllerName,
    $methodName,
    $routeName
);
*/

// Route for homepage
$this->addRoute(
    'GET', // HTTP Method
    '/', // URL pattern
    'MainController', // Controller name
    'home', // Method name
    'main-home' // => route's name (for URL generation)
);

// Route for contact page
$this->addRoute(
    'GET', // HTTP Method
    '/contact', // URL pattern
    'MainController', // Controller name
    'contact', // Method name
    'main-contact' // => route's name (for URL generation)
);

// Route for the services
$this->addRoute(
    'GET',
    '/soins',
    'ServiceController',
    'details', // Method
    'soin-details'
);

// Route for the shop
$this->addRoute(
    'GET',
    '/catalogue/list',
    'CatalogueController',
    'list',
    'catalogue-list'
);
$this->addRoute(
    'GET',
    '/catalogue/details',
    'CatalogueController',
    'details',
    'catalogue-details'
);
$this->addRoute(
    'GET',
    '/catalogue/cart',
    'CatalogueController',
    'cart',
    'catalogue-cart'
);

// Route for login
$this->addRoute(
    'GET', // HTTP Method
    '/admin', // URL pattern
    'UserController', // Controller name
    'login', // Method name
    'user-login' // => route's name (for URL generation)
);
$this->addRoute(
    'POST', // HTTP Method
    '/login', // URL pattern
    'UserController', // Controller name
    'doLogin', // Method name
    'user-dologin' // => route's name (for URL generation)
);

// Add new routes here
