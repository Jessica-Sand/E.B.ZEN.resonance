<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Modifier le produit
                    <?= $product->getName() ?>
                </h2>
            </div>
        </div>
        <a href="<?= $router->generate('product-list') ?>" class="btn btn-success float-right">Retour</a>

        <form action="" method="POST" class="mt-5">
            <div class="form-group mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du produit" value="<?= $product->getName() ?>">
            </div>
            <div class="form-group mb-3">
                <label for="subtitle">Sous-titre</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sous-titre" value="<?= $product->getSubtitle() ?>">
                <small id="subtitleHelpBlock" class="form-text text-info text-info">
                    Type de peau, ou autre description - sera noté sous le nom du produit
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="content">Contenance</label>
                <input type="number" class="form-control" id="content" name="content" placeholder="Contenance" value="<?= $product->getContent() ?>">
                <small id="contenteHelpBlock" class="form-text text-info">
                    Contenance en ml ou g
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" aria-describedby="descriptionHelpBlock" value="<?= $product->getDescription() ?>">
                <small id="descriptionHelpBlock" class="form-text text-info">
                    Description du produit
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="price">Prix</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Prix" aria-describedby="priceHelpBlock" value="<?= $product->getPrice() ?>">
                <small id="priceHelpBlock" class="form-text text-info">
                    Le prix du produit
                </small>
            </div>
            <!-- <div class="form-group mb-3">
                <label for="picture">Image</label>
                <input type="file" class="form-control" id="picture" name="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock" value="">
                <small id="pictureHelpBlock" class="form-text text-info">
                    Une image (jpg, gif, svg ou png) pour illustrer le produit
                </small>
            </div> -->
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>