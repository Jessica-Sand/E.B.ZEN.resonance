<div class="container my-4">
    <a href="<?= $router->generate('service-list') ?>" class="btn btn-success float-right">Retour</a>
    <h2>Ajouter un soin</h2>

    <form action="" method="POST" class="mt-5">
        <div class="form-group">
            <label for="title">Catégorie</label>
            <input type="text" class="form-control" id="title" placeholder="Categorie général des soins">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" aria-describedby="descriptionHelpBlock">
            <small id="descriptionHelpBlock" class="form-text text-muted">
                Description de la catégorie des soins en détail
            </small>
        </div>
        <div class="form-group">
            <label for="picture">Image</label>
            <input type="text" class="form-control" id="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock">
            <small id="pictureHelpBlock" class="form-text text-muted">
                Une image (jpg, gif, svg ou png) pour illustrer la catégorie de soin
            </small>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
    </form>
</div>