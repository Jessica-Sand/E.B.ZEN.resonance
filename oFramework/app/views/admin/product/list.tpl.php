<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Liste des produits de la boutique</h2>
            </div>
            
        </div>
        <a href="<?= $router->generate('product-add') ?>" class="btn btn-success">Ajouter</a>
    
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Sous-titre</th>
                    <th scope="col">Contenance</th>
                    <th scope="col">Prix</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <th scope="row"><?= $product->getId() ?></th>
                    <td class="col-4"><?= $product->getName() ?></td>
                    <td class="col-4"><?= $product->getSubtitle() ?></td>
                    <td><?= $product->getContent() ?></td>
                    <td><?= $product->getPrice() ?></td>
                    <td class="text-right">
                        <a href="<?= $router->generate('product-edit', ['id'=> $product->getId()]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="<?= $router->generate('product-delete', ['id'=> $product->getId()]) ?>" class="btn btn-sm btn-danger" >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
<div>