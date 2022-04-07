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
// Route for contact page
$this->addRoute(
    'POST', // HTTP Method
    '/contact', // URL pattern
    'MainController', // Controller name
    'mailSend', // Method name
    'main-send' // => route's name (for URL generation)
);

// Route for the treatments
/**
 * Shows the list of the treatment categories
 */
$this->addRoute(
    'GET',
    '/soins',
    'TreatmentController',
    'list',
    'treatment-list'
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

// Route for the blog pages
$this->addRoute(
    'GET',
    '/blog',
    'BlogController',
    'list',
    'blog-list'
);
$this->addRoute(
    'GET',
    '/blog/article/[i:id]',
    'BlogController',
    'details',
    'blog-details'
);
$this->addRoute(
    'GET',
    '/blog/theme/[i:id]',
    'BlogController',
    'theme',
    'blog-theme'
);

// Route for the legacy termes
$this->addRoute(
    'GET',
    '/main/mention-legal',
    'MainController',
    'legal',
    'main-legal'
);

// Route for the aside searching bar


// Admin routes

// Route for backoffice homepage
$this->addRoute(
    'GET', // HTTP Method
    '/admin/home', // URL pattern
    'Admin\AdminController', // Controller name
    'home', // Method name
    'admin-home' // => route's name (for URL generation)
);

// Route for the treatment category
$this->addRoute(
    'GET', // HTTP Method
    '/admin/category/list', // URL pattern
    'Admin\CategoryController', // Controller name
    'list', // Method name
    'category-list' // => route's name (for URL generation)
);
// Show the formular to add a new category
$this->addRoute(
    'GET',
    '/admin/category/add',
    'Admin\CategoryController',
    'add',
    'category-add'
);
$this->addRoute(
    'POST',
    '/admin/category/add',
    'Admin\CategoryController',
    'create',
    'category-create'
);

// show the formular to edit a category
$this->addRoute(
    'GET',
    '/admin/category/edit/[i:id]',
    'Admin\CategoryController',
    'edit',
    'category-edit'
);
$this->addRoute(
    'POST',
    '/admin/category/edit/[i:id]',
    'Admin\CategoryController',
    'update',
    'category-update'
);

$this->addRoute(
    'GET',
    '/admin/category/delete/[i:id]',
    'Admin\CategoryController',
    'delete',
    'category-delete'
);

// Route for the treatments
$this->addRoute(
    'GET', // HTTP Method
    '/admin/service/list', // URL pattern
    'Admin\TreatmentController', // Controller name
    'list', // Method name
    'service-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/admin/service/add',
    'Admin\TreatmentController',
    'add',
    'service-add'
);
$this->addRoute(
    'POST',
    '/admin/service/add',
    'Admin\TreatmentController',
    'create',
    'service-create'
);
// show the formular to edit a treatment
$this->addRoute(
    'GET',
    '/admin/service/edit/[i:id]',
    'Admin\TreatmentController',
    'edit',
    'service-edit'
);
$this->addRoute(
    'POST',
    '/admin/service/edit/[i:id]',
    'Admin\TreatmentController',
    'update',
    'service-update'
);

$this->addRoute(
    'GET',
    '/admin/service/delete/[i:id]',
    'Admin\TreatmentController',
    'delete',
    'service-delete'
);

// Route for the products
$this->addRoute(
    'GET', // HTTP Method
    '/admin/product/list', // URL pattern
    'Admin\ProductController', // Controller name
    'list', // Method name
    'product-list' // => route's name (for URL generation)
);
$this->addRoute(
    'GET',
    '/admin/product/add',
    'Admin\ProductController',
    'add',
    'product-add'
);
$this->addRoute(
    'POST',
    '/admin/product/add',
    'Admin\ProductController',
    'create',
    'product-create'
);
$this->addRoute(
    'GET',
    '/admin/product/edit/[i:id]',
    'Admin\ProductController',
    'edit',
    'product-edit'
);
$this->addRoute(
    'POST',
    '/admin/product/edit/[i:id]',
    'Admin\ProductController',
    'update',
    'product-update'
);
$this->addRoute(
    'GET',
    '/admin/product/delete/[i:id]',
    'Admin\ProductController',
    'delete',
    'product-delete'
);

// Route for login
$this->addRoute(
    'GET', // HTTP Method
    '/admin/login', // URL pattern
    'UserController', // Controller name
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
$this->addRoute(
    'GET',
    '/admin/logout',
    'UserController',
    'logout',
    'admin-logout'
);

// Route for new user
$this->addRoute(
    'GET', // HTTP Method
    '/admin/user/add', // URL pattern
    'UserController', // Controller name
    'add', // Method name
    'admin-add' // => route's name (for URL generation)
);
$this->addRoute(
    'POST',
    '/admin/user/add',
    'UserController',
    'create',
    'admin-create'
);

// Route for admin list
$this->addRoute(
    'GET', //HTTP Method
    '/admin/user/list', // URL pattern
    'UserController', // Controller name
    'list', // Method name
    'admin-list' // => route's name (for URL generation)
);
// show the formular to edit a user
$this->addRoute(
    'GET',
    '/admin/user/edit/[i:id]',
    'UserController',
    'edit',
    'admin-edit'
);
$this->addRoute(
    'POST', //HTTP Method
    '/admin/user/edit/[i:id]', // URL pattern
    'UserController', // Controller name
    'update', // Method name
    'admin-update' // => route's name (for URL generation)
);

$this->addRoute(
    'GET',
    '/admin/user/delete/[i:id]',
    'UserController',
    'delete',
    'admin-delete'
);


// Route for the article og the blog
$this->addRoute(
    'GET',
    '/admin/blog/list',
    'BlogController',
    'admin',
    'admin-blog'
);