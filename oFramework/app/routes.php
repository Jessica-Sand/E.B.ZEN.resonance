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

// Route for the treatments
/**
 * Shows the list of the treatment categories
 */
$this->addRoute(
    'GET',
    '/soins',
    'TreatmentController',
    'category',
    'treatment-category'
);

/**
 * Shows the detail of a category treatment
 */
$this->addRoute(
    'GET',
    '/soins/[i:id]',
    'TreatmentController',
    'treatment',
    'treatment-details'
);

// Route for the shop
$this->addRoute(
    'GET',
    '/boutique',
    'ShopController',
    'list',
    'shop-list'
);
$this->addRoute(
    'GET',
    '/shop/[i:id]',
    'ShopController',
    'details',
    'shop-details'
);
$this->addRoute(
    'GET',
    '/shop/cart',
    'ShopController',
    'cart',
    'shop-cart'
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

// Route for the blog pages
$this->addRoute(
    'GET',
    '/blog/list',
    'BlogController',
    'list',
    'blog-list'
);
$this->addRoute(
    'GET',
    '/blog/details',
    'BlogController',
    'details',
    'blog-details'
);

// Admin routes

// Route for backoffice homepage
$this->addRoute(
    'GET', // HTTP Method
    '/admin/home', // URL pattern
    'AdminController', // Controller name
    'home', // Method name
    'admin-home' // => route's name (for URL generation)
);

// Route for the treatment category
$this->addRoute(
    'GET', // HTTP Method
    '/admin/category/list', // URL pattern
    'CategoryController', // Controller name
    'list', // Method name
    'category-list' // => route's name (for URL generation)
);
// Show the formular to add a new category
$this->addRoute(
    'GET',
    '/admin/category/add',
    'CategoryController',
    'add',
    'category-add'
);
$this->addRoute(
    'POST',
    '/admin/category/add',
    'CategoryController',
    'create',
    'category-create'
);

// show the formular to edit a category
$this->addRoute(
    'GET',
    '/admin/category/edit/[i:id]',
    'CategoryController',
    'edit',
    'category-edit'
);
$this->addRoute(
    'POST',
    '/admin/category/edit/[i:id]',
    'CategoryController',
    'update',
    'category-update'
);

$this->addRoute(
    'GET',
    '/admin/category/delete/[i:id]',
    'CategoryController',
    'delete',
    'category-delete'
);

// Route for the treatments
$this->addRoute(
    'GET', // HTTP Method
    '/admin/service/list', // URL pattern
    'ServiceController', // Controller name
    'list', // Method name
    'service-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/admin/service/add',
    'ServiceController',
    'add',
    'service-add'
);
$this->addRoute(
    'POST',
    '/admin/service/add',
    'ServiceController',
    'create',
    'service-create'
);
// show the formular to edit a treatment
$this->addRoute(
    'GET',
    '/admin/service/edit/[i:id]',
    'ServiceController',
    'edit',
    'service-edit'
);
$this->addRoute(
    'POST',
    '/admin/service/edit/[i:id]',
    'ServiceController',
    'update',
    'service-update'
);

$this->addRoute(
    'GET',
    '/admin/service/delete/[i:id]',
    'ServiceController',
    'delete',
    'service-delete'
);

// Route for the products
$this->addRoute(
    'GET', // HTTP Method
    '/admin/product/list', // URL pattern
    'ProductController', // Controller name
    'list', // Method name
    'product-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/admin/product/add',
    'ProductController',
    'add',
    'product-add'
);
$this->addRoute(
    'POST',
    '/admin/product/add',
    'ProductController',
    'create',
    'product-create'
);
$this->addRoute(
    'GET',
    '/admin/product/edit/[i:id]',
    'ProductController',
    'edit',
    'product-edit'
);
$this->addRoute(
    'POST',
    '/admin/product/edit/[i:id]',
    'ProductController',
    'update',
    'product-update'
);
$this->addRoute(
    'GET',
    '/admin/product/delete/[i:id]',
    'ProductController',
    'delete',
    'product-delete'
);

// Route for login
$this->addRoute(
    'GET', // HTTP Method
    '/admin/admin', // URL pattern
    'Admin/UserController', // Controller name
    'login', // Method name
    'admin-login' // => route's name (for URL generation)
);
$this->addRoute(
    'POST', // HTTP Method
    '/admin/login', // URL pattern
    'UserController', // Controller name
    'doLogin', // Method name
    'admin-dologin' // => route's name (for URL generation)
);

// Route for new user
$this->addRoute(
    'GET', // HTTP Method
    '/admin/user/add', // URL pattern
    'UserController', // Controller name
    'add', // Method name
    'admin-add' // => route's name (for URL generation)
);

// Route for admin list
$this->addRoute(
    'POST', //HTTP Method
    '/admin/user/list', // URL pattern
    'UserController', // Controller name
    'list', // Method name
    'admin-list' // => route's name (for URL generation)
);