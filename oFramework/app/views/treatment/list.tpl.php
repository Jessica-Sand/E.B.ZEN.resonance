<!-- Product list -->
<div class="container">
    <div class="card text-center border-0 meeting">
        <div class="card-header bg-light" id="top">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="<?= $router->generate('main-home') ?>">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item active">Liste des soins</li>
            </ol>
            <h1 id="list_title">Les différents soins pratiqués</h1>
        </div>
    </div>

<div class="services py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5 m-0">
        <?php foreach($categories as $category): ?>
            <div class="col">
                <a href="<?= $router->generate('treatment-details', ['id' => $category->getId()]) ?>">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?= $category->getTitle() ?>
                            </h5>
                        </div>
                        <img src="<?=$assetsBaseUri ?>images/<?= $category->getPicture() ?>" class="card-img-bottom" alt="image illustrant les soins">
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>