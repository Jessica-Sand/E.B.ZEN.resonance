    <!-- Reflexology treatments -->
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
                    <li class="breadcrumb-item active">
                        <a href="<?= $router->generate('treatment-category') ?>">
                        Liste des soins
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= $category->getTitle() ?>
                    </li>
                </ol>
            </div>
        </div>

        <div class="card border-0 rounded-0">
            <div class="row g-0 m-5">
                <div class="col-md-5">
                    <img src="<?=$assetsBaseUri ?>images/<?= $category->getPicture() ?>" alt="image soin" class="img-fluid rounded">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title fs-2">
                            <?= $category->getTitle() ?>
                        </h5>
                        <p class="card-text pt-5">
                            <?= $category->getDescription() ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Price -->
    <div class="services py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                <?php foreach($treatments as $treatment): ?>
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?= $treatment->getName() ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">
                            <?= $treatment->getSubtitle() ?>
                            </h6>
                        </div>
                        <div class="card-body" id="serviceBg">  
                            <p class="card-text text-center" >
                            <?= $treatment->getDescription() ?>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush m-5">
                            <li class="list-group-item">Durée : 
                                <?= $treatment->getDuration() ?>
                            </li>
                            <li class="list-group-item">Prix : <?= $treatment->getPrice() ?>€</li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="container">
        <div class="card border-0 rounded-0 text-center">
            <div class="row g-0 m-5">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title fs-2">
                        Prenez rendez-vous</h5>
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <p class="card-text fs-5 text">18 rue de Soufflenheim • 67410 Drusenheim</p>
                        <h5 class="card-title m-4 fs-3 text-dark" id="tel-number">06 70 48 52 95</h5>
                        <!-- <a href="#" class="btn btn-primary btn-lg call">
                            <i class="fas fa-mobile-alt fa-lg"></i>
                            Appelez
                        </a>
                        <a href="#" class="btn btn-primary btn-lg calendar">
                            <i class="far fa-calendar-alt fa-lg"></i>
                            Réservez un rendez-vous
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>