<!-- Cart detail -->
<div class="container">
    <div class="card text-center border-0 meeting">
        <div class="card-header bg-light" id="top">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Panier</li>
            </ol>
            <h1>Panier</h1>
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <p class="lead text-muted">Vous avez 2 produits dans votre panier</p>
                </div>
            </div>
        </div>
    </div>

    <!-- product-->
    <div class="row g-0 p-5 bg-white">
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="cart">
                    <div class="cart-wrapper">
                        <div class="cart-header text-center">
                            <div class="row">
                                <div class="col-5">Produit</div>
                                <div class="col-2">Prix</div>
                                <div class="col-2">Q.</div>
                                <div class="col-2">Total</div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <div class="cart-body">
                            <!-- Product-->
                            <div class="cart-item">
                                <div class="row d-flex align-items-center">
                                    <div class="col-5">
                                        <div class="d-flex align-items-center">
                                            <a href="../shop/detail.html">
                                                <img src="<?=$assetsBaseUri ?>images/product.jpg" alt="..." class="cart-item-img">
                                            </a>
                                            <div class="cart-title text-left">
                                                <a href="../shop/detail.html" class="text-uppercase text-dark">
                                                    <strong>Crème de jour</strong>
                                                </a><br>
                                                <span class="text-muted text-sm"> peaux normales & mixtes</span><br>
                                                <span class="text-muted text-sm">50 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">7€</div>
                                    <div class="col-2">
                                        <div class="d-flex align-items-center">
                                            <div class="btn btn-items btn-items-decrease">-</div>
                                            <input value="2" class="form-control text-center input-items" type="text">
                                            <div class="btn btn-items btn-items-increase">+</div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">14€</div>
                                    <div class="col-1 text-center">
                                        <a href="#" class="cart-remove"> <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product-->
                            <div class="cart-item">
                                <div class="row d-flex align-items-center">
                                    <div class="col-5">
                                        <div class="d-flex align-items-center">
                                            <a href="../shop/detail.html">
                                                <img src="<?=$assetsBaseUri ?>images/product.jpg" alt="..." class="cart-item-img">
                                            </a>
                                            <div class="cart-title text-left">
                                                <a href="../shop/detail.html" class="text-uppercase text-dark">
                                                    <strong>Crème de jour</strong>
                                                </a><br>
                                                <span class="text-muted text-sm"> peaux normales & mixtes</span><br>
                                                <span class="text-muted text-sm">50 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">7€</div>
                                    <div class="col-2">
                                        <div class="d-flex align-items-center">
                                            <div class="btn btn-items btn-items-decrease">-</div>
                                            <input value="3" class="form-control text-center input-items" type="text">
                                            <div class="btn btn-items btn-items-increase">+</div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">21€</div>
                                    <div class="col-1 text-center">
                                        <a href="#" class="cart-remove"> <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-5 d-flex justify-content-between flex-column flex-lg-row">
                    <a href="../shop/list.html" class="btn btn-link text-muted"><i class="fa fa-chevron-left"></i> Continuer les
                        achats</a><a href="../shop/checkout1.html" class="btn btn-dark" id="buy">Commander <i class="fa fa-chevron-right"></i> </a></div>
            </div>
            <div class="col-lg-4">
                <div class="block mb-5">
                    <div class="block-header">
                        <h6 class="text-uppercase mb-0 fw-bolder">Récapitulatif</h6>
                    </div>
                    <div class="block-body bg-light pt-1">
                        <p class="text-sm">Le coût de livraison est calculé en fonction des produits choisis</p>
                        <ul class="order-summary mb-0 list-unstyled">
                            <li class="order-summary-item">
                                <span>Sous total</span>
                                <span>390€</span>
                            </li>
                            <li class="order-summary-item">
                                <span>Livraison</span>
                                <span>10€</span>
                            </li>
                            <li class="order-summary-item">
                                <span>TVA</span>
                                <span>0€</span>
                            </li>
                            <li class="order-summary-item border-0">
                                <span>Total</span>
                                <strong class="order-summary-total">400€</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>