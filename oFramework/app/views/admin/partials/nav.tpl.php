<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= $router->generate('admin-home') ?>">
            <img src="<?=$assetsBaseUri ?>images/logo.png" alt="logo" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'admin/home' ? ' active' : '' ?>" href="<?= $router->generate('admin-home') ?>">Accueil <span class="sr-only">(current)</span></a>
                </li>


                    
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'admin/treatment/list' ? ' active' : '' ?>" href="<?= $router->generate('treatment-list') ?>">Soins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'admin/category/list' ? ' active' : '' ?>" href="<?= $router->generate('category-list') ?>">Catégories de soin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'admin/product/list' ? ' active' : '' ?>" href="<?= $router->generate('product-list') ?>">Produits</a>
                </li>
                <?php if(isset($currentUser)) : ?>
                <!-- Si on est connecté : on affiche un menu déroulant avec le nom de la personne connectée -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $currentUser->getFirstname() ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="<?= $router->generate('user-list') ?>">Catalogue-manager</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= $router->generate('user-logout') ?>">Déconnection</a>
                    </div>
                </li>
                <?php else : ?>
                <!-- Si on n'est pas connecté : on affiche lien de login -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate('user-login') ?>">Login</a>
                </li>
                <?php endif ; ?>
    

                <!-- If we are not connected, we have to register -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Connection</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
</header>