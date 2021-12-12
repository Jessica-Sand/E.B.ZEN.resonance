<!-- Product list -->
<div class="container">
    <div class="card text-center border-0 meeting">
        <div class="card-header bg-light" id="top">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="<?= $router->generate('main-home') ?>">
                    Home
                    </a>
                </li>
                <li class="breadcrumb-item active">Boutique</li>
            </ol>
            <h2>Liste des produits</h2>
        </div>
    </div>

    <section class="products-grid bg-white">
        <div class="container-fluid">
            <div class="row text-center">
                <p>Les voici enfin… côté boutique EB.ZEN les coffrets et idées cadeaux, disponible tout au long de l'année; <br/>lors d'un anniversaire , à offrir ou se faire plaisir!</p>
                <p>Produits Avril bio, des huiles essentielles en provenance de Corse , et autres coups de cœurs...</p>
                <p>possibilité de récupérer en DRIVE sur RDV ou envoi par la poste</p>
                <p>Appelez au <strong>06 70 48 52 95</strong>.</p>
            </div>
            <div class="row">
            <?php foreach($products as $product): ?>
                <!-- product-->
                <div class="product col-xl-3 col-lg-4 col-sm-6 pb-5">
                    <div class="product-image">
                        <a href="<?= $router->generate('shop-details', ['id'=> $product->getId()]) ?>" class="product-hover-overlay-link">
                            <img src="<?=$assetsBaseUri ?>images/<?= $product->getPicture() ?>" alt="product" class="img-fluid">
                        </a>
                    </div>
                    <div class="product-action-buttons">
                        <!-- <a href="#" class="btn btn-outline-dark btn-product-left">
                            <i class="fa fa-shopping-cart"></i>
                        </a> -->
                        <a href="<?= $router->generate('shop-details', ['id'=> $product->getId()]) ?>" class="btn btn-dark btn-buy">
                            <i class="fa-search fa"></i>
                            <span class="btn-buy-label ml-2">Voir</span>
                        </a>
                    </div>
                    <div class="py-2">
                        <p class="text-muted text-sm mb-1">
                            <?= $product->getSubtitle() ?></p>
                        <h3 class="h6 text-uppercase mb-1">
                            <a href="<?= $router->generate('shop-details', ['id'=> $product->getId()]) ?>" class="text-dark">
                                <?= $product->getName() ?>
                            </a>
                        </h3>
                        <span class="text-muted">
                            <?= $product->getPrice() ?> €
                        </span>
                    </div>
                </div>
                <?php endforeach; ?> 
            </div>
        </div>
    </section>
</div>