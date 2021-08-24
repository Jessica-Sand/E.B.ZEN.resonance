<div class="container my-4">
    <a href="<?= $router->generate('treatment-list') ?>" class="btn btn-success float-right">Retour</a>
    <h2>Ajouter un soin</h2>

    <form action="" method="POST" class="mt-5">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Nom du soin">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" aria-describedby="descriptionHelpBlock">
            <small id="descriptionHelpBlock" class="form-text text-muted">
                Description du soin en détail
            </small>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Prix" aria-describedby="priceHelpBlock">
            <small id="priceHelpBlock" class="form-text text-muted">
                Le prix du soin
            </small>
        </div>
        <div class="form-group">
            <label for="duration">Durée</label>
            <input type="time" class="form-control" id="duration" name="duration" placeholder="Durée" aria-describedby="timeHelpBlock">
            <small id="timeHelpBlock" class="form-text text-muted">
                La durée du soin
            </small>
        </div>
        <div class="form-group">
            <label for="type">Catégorie</label>
            <select class="custom-select" id="service" name="service_id" aria-describedby="typeHelpBlock">
                <option value="1">Réflexologie</option>
                <option value="2">Fleurs de Bach</option>
                <option value="3">L'escale</option>
            </select>
            <small id="typeHelpBlock" class="form-text text-muted">
            La catégorie du soin
            </small>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
    </form>
</div>