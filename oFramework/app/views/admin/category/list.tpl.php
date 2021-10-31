<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light">
                <h2>Liste des catégories de soin</h2>
            </div>
        
        </div>
        <a href="<?= $router->generate('category-add') ?>" class="btn btn-success">Ajouter</a>

    
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categories as $category): ?>
                <tr>
                    <th scope="row"><?= $category->getId() ?></th>
                    <td><?= $category->getTitle() ?></td>
                    <td><?= $category->getDescription() ?></td>
                    <td class="text-right col-2">
                        <a href="<?= $router->generate('category-edit', ['id'=> $category->getId()]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="<?= $router->generate('category-delete', ['id'=> $category->getId()]) ?>" class="btn btn-sm btn-danger" >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
<div>
