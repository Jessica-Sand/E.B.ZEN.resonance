<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Modifier la categorie de soin 
                    <?= $category->getTitle() ?>
                </h2>
            </div>
        </div>
        <a href="<?= $router->generate('category-list') ?>" class="btn btn-success float-right">Retour</a>

        <form action="" method="POST" class="mt-5">
            <div class="form-group mb-3">
                <label for="title">Nom</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Categorie général des soins" value="<?= $category->getTitle() ?>">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" aria-describedby="descriptionHelpBlock" value="<?= $category->getDescription() ?>">
                <small id="descriptionHelpBlock" class="form-text text-info">
                    Description de la catégorie des soins en détail
                </small>
            </div>
            <!-- <div class="form-group mb-3">
                <label for="picture">Image</label>
                <input type="file" class="form-control" id="picture" name="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock" value="">
                <small id="pictureHelpBlock" class="form-text text-info">
                    Une image (jpg, gif, svg ou png) pour illustrer la catégorie de soin
                </small>
            </div> -->
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>