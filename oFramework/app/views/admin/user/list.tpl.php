<div class="container my-4"><div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Liste des utilisateurs</h2>
            </div>
        
        </div>        
        <a href="<?= $router->generate('admin-add') ?>" class="btn btn-success float-right">Ajouter</a>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Statut</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row"><?= $user->getId() ?></th>
                    <td><?= $user->getLastname() ?></td>
                    <td><?= $user->getFirstname() ?></td>
                    <td><?= $user->getEmail() ?></td>
                    <td><?= $user->getRole() ?></td>
                    <td><?= $user->getStatus() ?></td>
                    <td class="text-right">
                        <a href="<?= $router->generate('admin-update', ['id'=> $user->getId()]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= $router->generate('admin-delete', ['id'=> $user->getId()]) ?>">Oui, je veux supprimer</a>
                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>