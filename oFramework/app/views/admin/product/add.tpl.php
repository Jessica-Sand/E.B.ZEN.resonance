<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light">
                <h2>Ajouter un produit</h2>
            </div>

        </div>
        <a href="<?= $router->generate('product-list') ?>" class="btn btn-success">Retour</a>

        <form action="<?= $router->generate('product-create') ?>" method="POST" class="mt-5">
            <div class="form-group mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du produit">
            </div>
            <div class="form-group mb-3">
                <label for="subtitle">Sous-titre</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sous-titre">
                <small id="subtitleHelpBlock" class="form-text text-info">
                    Type de peau, ou autre description - sera noté sous le nom du produit
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="content">Contenance</label>
                <input type="number" class="form-control" id="content" name="content" placeholder="Contenance">
                <small id="contenteHelpBlock" class="form-text text-info">
                    Contenance en ml ou g
                </small>
            </div>                
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10">
                </textarea>
                <small id="descriptionHelpBlock" class="form-text text-info">
                    Description du produit
                </small>
            </div>
             <div class="form-group mb-3">
                <label for="price">Prix</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prix" aria-describedby="priceHelpBlock">
                <small id="priceHelpBlock" class="form-text text-info">
                    Le prix du produit
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="picture">Image</label>
                <input type="file" class="form-control" id="picture" name="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock">
                <small id="pictureHelpBlock" class="form-text text-info">
                    Une image (jpg, gif, svg ou png) pour illustrer le produit
                </small>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>