<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 bg-body fixed-top">
    <div class="container">
        <div><a class="navbar-brand" href="<?= $router->generate('main-home') ?>">
                <img src="<?=$assetsBaseUri ?>images/logo.png" alt="logo" width="100">
            </a></div>
        <div class="websitename">
            <span>Résônance</span>
            <a href="<?= $router->generate('main-home') ?>"><span class="logo__name">EB.ZEN</span></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'main/home' ? ' active' : '' ?>" aria-current="page" href="<?= $router->generate('main-home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'treatment/list' ? ' active' : '' ?>" href="<?= $router->generate('treatment-list') ?>">
                        Soins
                    </a>      
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'shop/list' ? ' active' : '' ?>" href="<?= $router->generate('shop-list') ?>">
                    Boutique
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'blog' ? ' active' : '' ?>" href="<?= $router->generate('blog-list') ?>">
                    Blog
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

</header>