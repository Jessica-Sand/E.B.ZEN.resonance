<div class="bg-light p-4">
    <div class="container">
        <div class="card border-0 meeting">
            <div class="card-header text-center bg-light">
                <h2>Liste des articles du blog</h2>
            </div>
            
        </div>
        <a href="<?= $router->generate('article-add') ?>" class="btn btn-success">Ajouter</a>
    
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($articles as $article): ?>
                <tr>
                    <th scope="row"><?= $article->getId() ?></th>
                    <td class="col-4"><?= $article->getTitle() ?></td>
                    <td class="col-4"><?= $article->getContent() ?></td>
                    <td><?= $article->getPicture() ?></td>
                    <td><?= $article->getRealisedAt() ?></td>
                    <td class="text-right">
                        <a href="<?= $router->generate('article-edit', ['id'=> $article->getId()]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="<?= $router->generate('article-delete', ['id'=> $article->getId()]) ?>" class="btn btn-sm btn-danger" >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
<div>