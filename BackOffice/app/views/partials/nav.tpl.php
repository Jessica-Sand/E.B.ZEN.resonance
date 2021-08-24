<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= $router->generate('main-home') ?>">
            <img src="<?=$assetsBaseUri ?>images/logo.png" alt="logo" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'main/home' ? ' active' : '' ?>" href="<?= $router->generate('main-home') ?>">Accueil <span class="sr-only">(current)</span></a>
                </li>


                    
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'treatment/list' ? ' active' : '' ?>" href="<?= $router->generate('treatment-list') ?>">Soins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'category/list' ? ' active' : '' ?>" href="<?= $router->generate('category-list') ?>">Catégories de soin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'product/list' ? ' active' : '' ?>" href="<?= $router->generate('product-list') ?>">Produits</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="">Catalogue-manager</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">Déconnection</a>
                    </div>
                </li>
    

                <!-- If we are not connected, we have to register -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Connection</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
</header>