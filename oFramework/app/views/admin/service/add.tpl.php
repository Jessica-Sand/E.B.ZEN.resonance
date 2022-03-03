<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Ajouter un soin</h2>
            </div>
        </div>
        <a href="<?= $router->generate('service-list') ?>" class="btn btn-success float-right">Retour</a>

        <form action="<?= $router->generate('service-create') ?>" method="POST" class="mt-5">
            <div class="form-group mb-3">
                <label for="name">Soin</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du soin">
            </div>
            <div class="form-group mb-3">
                <label for="subtitle">Sous-titre</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sous-titre" aria-describedby="subtitleHelpBlock">
                <small id="subtitleHelpBlock" class="form-text text-info">
                    Information supplémentaire sur le soin, si il y en a
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10">
                </textarea>
                <small id="descriptionHelpBlock" class="form-text text-info">
                    Description du soin en détail
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="duration">Durée</label>
                <input type="text" class="form-control" id="duration" name="duration" placeholder="Durée" aria-describedby="timeHelpBlock">
                <small id="timeHelpBlock" class="form-text text-info">
                    La durée du soin en h ou mn
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="price">Prix</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Prix" aria-describedby="priceHelpBlock">
                <small id="priceHelpBlock" class="form-text text-info">
                    Le prix du soin sans ajouter le €
                </small>
            </div>
            <div class="form-group mb-3">
                <label for="type">Catégorie</label>
                <select class="custom-select" id="service" name="category_id" aria-describedby="typeHelpBlock">
                <?php foreach($categories as $category): ?>
                    <option value="<?= $category->getId() ?>"><?= $category->getTitle() ?></option>
                    <?php endforeach; ?>
                </select>
                <small id="typeHelpBlock" class="form-text text-info">
                    La catégorie du soin
                </small>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>