<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
                <div class="card-header text-center bg-light p-3">
                    <h2>Ajouter un utilisateur</h2>
                </div>
        </div>

        <a href="<?= $router->generate('admin-list') ?>" class="btn btn-success float-right">Retour</a>

        <form action="<?= $router->generate('admin-create') ?>" method="POST" class="mt-5">
            <!-- Mise en place du token Anti-Csrf dans un champ caché -->
            <input type="hidden" name="token" value="<?= $token ?>">
            
            <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom">
            </div>

            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Saisir votre Email">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Saisir votre mot de passe">
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select class="custom-select" id="role" name="role" aria-describedby="roleHelpBlock">
                    <option value="1">Catalog Manager</option>
                    <option value="2">Admin</option>
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