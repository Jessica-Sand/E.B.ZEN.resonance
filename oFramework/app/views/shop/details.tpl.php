 <!-- Detail of a product -->
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
                 <li class="breadcrumb-item active">
                     <a href="<?= $router->generate('shop-list') ?>">
                     Boutique
                    </a>
                </li>
             </ol>
             <h1 id="treatment_title">Produit - <?= $product->getName() ?></h1>
         </div>
     </div>

     <!-- product-->
     <div class="row g-0 p-5 bg-white">
         <div class="row">
             <div class="col-lg-6 col-sm-12">
                 <div class="product-image">
                     <a href="../shop/detail.html" class="product-hover-overlay-link">
                         <img src="<?=$assetsBaseUri ?>images/<?= $product->getPicture() ?>" alt="product" class="img-fluid">
                     </a>
                 </div>
             </div>
             <div class="col-lg-6 col-sm-12">
                 <div class="mb-3">
                     <h3 class="mb-1 fs-2 fw-bold">
                        <?= $product->getName() ?>
                            <span class="text-muted fs-5 fw-lighter"> 
                                <?= $product->getSubtitle() ?>
                            </span>
                     </h3>
                     <div class="text-muted">
                         <?= $product->getContent() ?> ml
                    </div>
                 </div>
                 <div class="mt-5">
                     <p>
                     <?= $product->getDescription() ?>
                     </p>
                 </div>
                 <div class="d-flex justify-content-end">
                    <div class="my-2">
                        <div class="text-muted">
                            <span class="h4 fw-bold" id="price">
                                <?= $product->getPrice() ?> €
                            </span>
                            TTC
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <p>Si vous êtes intéressé par un produit, <br/>n'hésitez pas à me contacter au </p>
                    <h5>
                        <a href="tel:06.70.48.52.95" id="numb-shop">06 70 48 52 95</a>
                    </h5>
                </div>
                <div class="text-center mt-5">
                    <p>Ou demandez une réservation d'un produit via la page <a href="<?= $router->generate('main-contact') ?>"><strong>contact</strong></a></p>
                </div>
                <!-- <div class="d-flex justify-content-end">
                    <div class="product-action-buttons">
                        <form action="<?= $router->generate('shop-cart') ?>" method="post">
                            <input type="hidden" name="product_id" value="">
                            <a href="" class="product-hover-overlay-link">
                                <button class="btn btn-buy" id="buy">
                                    <span class="btn-buy-label ml-2">
                                        Demande de réservation
                                    </span>
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </a>
                            <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email"
                                        aria-describedby="emailHelp" placeholder="exemple@email.com">
                                </div>
                        </form>
                    </div> -->
                </div>
             </div>
         </div>
     </div>
 </div>