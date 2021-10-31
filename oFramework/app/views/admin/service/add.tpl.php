<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light">
                <h2>Ajouter un soin</h2>
            </div>
        </div>
        <a href="<?= $router->generate('service-list') ?>" class="btn btn-success float-right">Retour</a>

        <form action="<?= $router->generate('service-create') ?>" method="POST" class="mt-5">
            <div class="form-group mb-3">
                <label for="name">Soin</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Categorie général des soins">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" aria-describedby="descriptionHelpBlock">
                <small id="descriptionHelpBlock" class="form-text text-info">
                    Description du soin en détail
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="subtitle">Sous-titre</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sous-titre" aria-describedby="subtitleHelpBlock">
                <small id="subtitleHelpBlock" class="form-text text-info">
                    Information supplémentaire sur le soin soin
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="duration">Durée</label>
                <input type="text" class="form-control" id="duration" name="duration" placeholder="Durée" aria-describedby="timeHelpBlock">
                <small id="timeHelpBlock" class="form-text text-info">
                    La durée du soin
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="price">Prix</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Prix" aria-describedby="priceHelpBlock">
                <small id="priceHelpBlock" class="form-text text-info">
                    Le prix du soin
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="type">Catégorie</label>
                <select class="custom-select" id="service" name="category_id" aria-describedby="typeHelpBlock">
                    <option value="1">Réflexologie</option>
                    <option value="2">Fleurs de Bach</option>
                    <option value="3">L'escale</option>
                </select>
                <small id="typeHelpBlock" class="form-text text-info">
                La catégorie du soin
                </small>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>