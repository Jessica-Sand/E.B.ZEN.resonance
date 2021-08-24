<div class="container my-4">
    <!-- 
        On utilise le composant Alert de Bootstrap 
        pour afficher nos erreurs s'il y en a
    -->
    <?php if(isset($errorList)): ?>
        <?php foreach($errorList as $error): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <h2 class="text-center">Connexion</h2>
    <form method="POST">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
            <small id="emailHelp" class="form-text text-muted">Nous respectons votre vie privée.</small>
        </div>
        <div class="form-group">
            <label for="inputPassword">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>