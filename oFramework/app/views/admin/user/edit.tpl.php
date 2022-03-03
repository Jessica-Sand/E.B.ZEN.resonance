<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <h2>Modifier l'utilisateur
                    <?= $user->getFirstname() ?>
                </h2>
            </div>
        </div>
        <a href="<?= $router->generate('admin-list') ?>" class="btn btn-success float-right">Retour</a>

        <form action="" method="POST" class="mt-5">
            <div class="form-group mb-3">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom" value="<?= $user->getLastname() ?>">
            </div>

            <div class="form-group mb-3">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" value="<?= $user->getFirstname() ?>">
            </div>

            <div class="form-group mb-3">
                <label for="email">Role</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->getEmail() ?>">
            </div>

            <div class="form-group mb-3">
            <label for="role">Role</label>
                <select class="custom-select" id="role" name="role" aria-describedby="roleHelpBlock">
                    <option value="catalog-manager">Catalog Manager</option>
                    <option value="admin">Admin</option>
                </select>
                <small id="roleHelpBlock" class="form-text text-muted">
                    Role de l'utilisateur (catalog-manager, admin)
                </small>
            </div>

             <div class="form-group">
                <label for="status">Statut</label>
                <select class="custom-select" id="status" name="status" aria-describedby="statusHelpBlock">
                    <option value="">-</option>
                    <option value="1">Actif</option>
                    <option value="2">Désactivé/bloqué</option>
                </select>
                <small id="statusHelpBlock" class="form-text text-muted">
                    Le statut de l'utilisateur
                </small>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>