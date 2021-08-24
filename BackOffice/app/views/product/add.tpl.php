<div class="container my-4">
    <a href="<?= $router->generate('product-list') ?>" class="btn btn-success float-right">Retour</a>
    <h2>Ajouter un produit</h2>

    <form action="" method="POST" class="mt-5">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Nom du produit">
        </div>
        <div class="form-group">
            <label for="name">Sous-titre</label>
            <input type="text" class="form-control" id="subtitle" placeholder="Sous-titre">
            <small id="subtitleHelpBlock" class="form-text text-muted">
                Type de peau, ou autre description - sera noté sous le nom du produit
            </small>
        </div>
        <div class="form-group">
            <label for="contente">Contenance</label>
            <input type="text" class="form-control" id="contente" placeholder="Contenance">
            <small id="contenteHelpBlock" class="form-text text-muted">
                Contenance en ml ou g
            </small>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" aria-describedby="descriptionHelpBlock">
            <small id="descriptionHelpBlock" class="form-text text-muted">
                Description du produit
            </small>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Prix" aria-describedby="priceHelpBlock">
            <small id="priceHelpBlock" class="form-text text-muted">
                Le prix du produit
            </small>
        </div>
        <div class="form-group">
            <label for="picture">Image</label>
            <input type="text" class="form-control" id="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock">
            <small id="pictureHelpBlock" class="form-text text-muted">
                Une image (jpg, gif, svg ou png) pour illustrer le produit
            </small>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
    </form>
</div>