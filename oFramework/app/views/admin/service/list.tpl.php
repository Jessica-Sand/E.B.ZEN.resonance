<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Liste des soins</h2>
            </div>
            
        </div>
        <a href="<?= $router->generate('service-add') ?>" class="btn btn-success">Ajouter</a>

    
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Prix</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($treatments as $treatment): ?>
                <tr>
                    <th scope="row"><?= $treatment->getId() ?></th>
                    <td><?= $treatment->getName() ?></td>
                    <td><?= $treatment->getDuration() ?></td>
                    <td><?= $treatment->getPrice() ?></td>
                    <td class="text-right">
                        <a href="<?= $router->generate('service-edit', ['id' => $treatment->getId()]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="<?= $router->generate('service-delete', ['id' => $treatment->getId()]) ?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
<div>
