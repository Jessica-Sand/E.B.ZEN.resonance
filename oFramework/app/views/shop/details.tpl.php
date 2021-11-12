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
                <!-- <div class="d-flex justify-content-end">
                    <div class="product-action-buttons">
                        <form action="" method="post">
                            <input type="hidden" name="product_id" value="1">
                            <a href="" class="product-hover-overlay-link">
                                <button class="btn btn-buy" id="buy">
                                    <span class="btn-buy-label ml-2">
                                        Ajouter
                                    </span>
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </a>
                        </form>
                    </div>
                </div> -->
             </div>
         </div>
     </div>
 </div>