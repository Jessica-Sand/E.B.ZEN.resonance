<div class="container">
    <div class="card text-center border-0 meeting">
        <div class="card-header bg-light p-3">
            <h2>
                Bonjour <?= $currentUser->getFirstname() ?>
            </h2>
            <p class="text-dark">Liste des 5 derniers ajouts sur le site</p>
        </div>
    </div>

    <div class="card border-0 rounded-0">
        <div class="row mt-5">
            <div class="col-10 col-md-5 mx-auto">
                <div class="card text-white mb-5">
                    <div class="card-header bg-primary text-center p-3">Liste des soins</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($treatments as $treatment): ?>
                                <tr>
                                    <th scope="row"><?= $treatment->getId() ?></th>
                                    <td><?= $treatment->getName() ?></td>
                                    <td class="text-right">
                                        <a href="<?= $router->generate('service-edit') ?>" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                            </div>
                                        </div>
                                    </td>
                                <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?= $router->generate('service-list') ?>" class="btn btn-block btn-success">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-5 mx-auto">
                <div class="card text-white mb-3">
                    <div class="card-header bg-primary text-center p-3">Liste des produits</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $product): ?>
                                <tr>
                                    <th scope="row"><?= $product->getId() ?></th>
                                    <td><?= $product->getName() ?></td>
                                    <td class="text-right">
                                        <a href="<?= $router->generate('product-edit') ?>" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="<?= $router->generate('product-list') ?>" class="btn btn-block btn-success">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
