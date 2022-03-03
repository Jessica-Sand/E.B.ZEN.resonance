<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light p-3">
                <!-- 
                    Using the Alert bundle of Bootstrap 
                    to show erros if there are some
                -->
                <?php if(isset($errorList)): ?>
                    <?php foreach($errorList as $error): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <h2 class="text-center">Connexion</h2>
            </div>
        </div>
        <form method="POST" class=" mt-4">
            <div class="form-group mb-3">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
                <small id="emailHelp" class="form-text text-muted">Nous respectons votre vie privée.</small>
            </div>
            <div class="form-group mb-3">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>