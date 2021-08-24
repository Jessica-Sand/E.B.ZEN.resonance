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

// Route for the treatment category
$this->addRoute(
    'GET', // HTTP Method
    '/category/list', // URL pattern
    'CategoryController', // Controller name
    'list', // Method name
    'category-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/category/add',
    'CategoryController',
    'add',
    'category-add'
);
$this->addRoute(
    'GET',
    '/category/edit',
    'CategoryController',
    'edit',
    'category-edit'
);

// Route for the treatments
$this->addRoute(
    'GET', // HTTP Method
    '/treatment/list', // URL pattern
    'TreatmentController', // Controller name
    'list', // Method name
    'treatment-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/treatment/add',
    'TreatmentController',
    'add',
    'treatment-add'
);
$this->addRoute(
    'GET',
    '/treatment/edit',
    'TreatmentController',
    'edit',
    'treatment-edit'
);

// Route for the products
$this->addRoute(
    'GET', // HTTP Method
    '/product/list', // URL pattern
    'ProductController', // Controller name
    'list', // Method name
    'product-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/product/add',
    'ProductController',
    'add',
    'product-add'
);
$this->addRoute(
    'GET',
    '/product/add',
    'ProductController',
    'create',
    'product-create'
);
$this->addRoute(
    'GET',
    '/product/edit',
    'ProductController',
    'edit',
    'product-edit'
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

// Route for new user
$this->addRoute(
    'GET', // HTTP Method
    '/user/add', // URL pattern
    'UserController', // Controller name
    'add', // Method name
    'user-add' // => route's name (for URL generation)
);
