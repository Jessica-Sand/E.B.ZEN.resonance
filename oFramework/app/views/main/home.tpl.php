<!-- Presentation and contact -->
<div class="container">
    <div class="card text-center border-0 meeting">
        <div class="card-header bg-light" id="top">
            <h1>Devenez acteur de votre vie <br />
                et de votre mieux être !</h1>
        </div>
        <div class="card-body mt-4 mb-4">
            <i class="fas fa-map-marker-alt fa-2x"></i>
            <p class="card-text fs-5 text">18 rue de Soufflenheim • 67410 Drusenheim</p>
            <h5 class="card-title m-4 fs-3"><a href="tel:06.70.48.52.95" id="tel-number">06 70 48 52 95</a></h5>
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

    <div class="card border-0 rounded-0">
        <div class="row g-0 m-5">
            <div class="col-md-5">
                <img src="<?=$assetsBaseUri ?>images/bouddha.jpg" alt="Boudha" class="img-fluid rounded">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title fs-2">Prendre soin de soi,</h5>
                    <h5 class="card-title fs-2">avec la Réflexologie plantaire</h5>
                    <h5 class="card-title fs-2">C'est le pied !</h5>
                    <p class="card-text pt-5">Cette méthode naturelle permet de soulager un mal de dos, des jambes
                        lourdes, ou encore une mauvaise circulation sanguine, troubles digestifs, fatigue,
                        insomnie,stress...</p>
                    <p class="card-text">L'intérêt principal de la réflexologie est qu'elle permet d'activer le
                        processus
                        d'autoguérison et de réequilibration du corps.</p>
                    <p class="card-text">Et nottamment de drainer les toxines présentes dans l'organisme et de
                        soulager certaines
                        douleurs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Treatments -->
<div class="services py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            <div class="col">
                <a href="<?= $router->generate('treatment-category') ?>">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title text-center">réfléxologie</h5>
                        </div>
                        <img src="<?=$assetsBaseUri ?>images/reflexologie-plantaire.jpeg" class="card-img-bottom" alt="feet">
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="<?= $router->generate('treatment-category') ?>">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title text-center">fleurs de bach</h5>
                        </div>
                        <img src="<?=$assetsBaseUri ?>images/fleurs_de_bach.jpg" class="card-img-bottom" alt="Bach">
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="<?= $router->generate('treatment-category') ?>">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title text-center">aromathérapie</h5>
                        </div>
                        <img src="<?=$assetsBaseUri ?>images/huile_essentielle.jpg" class="card-img-bottom" alt="essence">
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- About -->
<div class="container">
    <div class="card border-0 rounded-0">
        <div class="row g-0 m-5">
            <div class="col-md-5">
                <img src="<?=$assetsBaseUri ?>images/cabinet.jpg" class="img-fluid rounded" alt="room">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h3>Tout ce que nous avons à faire c'est préserver notre identité vivre notre
                        vie être notre capitaine de notre propre bateau et tout ira bien.</h3>
                    <p class="card-text"><small class="text-muted">E.BACH</small></p>
                </div>
            </div>
        </div>

        <div class="line row g-0"></div>

        <div class="row g-0 m-5">
            <div class="col-md-7">
                <div class="card-body">
                    <h3>La réflexologie plantaire dynamise l'organisme, harmonise les fonctions vitales, libère le
                        stress et les tensions nerveuses, soulage les tensions du dos et beaucoup d'autres
                        douleurs...</h3>
                    <p class="card-text pt-3">Améliore la circulation sanguine, active le système lymphatique,
                        apporte
                        détente et
                        relaxation profonde....</p>
                </div>
            </div>
            <div class="col-md-5">
                <img src="<?=$assetsBaseUri ?>images/relax.jpg" class="img-fluid rounded-start" alt="room">
            </div>
        </div>


        <div class="line row g-0"></div>

        <div class="row g-0 m-5">
            <div class="col-md-5">
                <img src="<?=$assetsBaseUri ?>images/anniversaire.jpg" class="img-fluid rounded-start" alt="birthday">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h3>C'est avec une vive émotion que j'aimerais partager avec vous aujourd'hui le premier anniversaire de mon cabinet résônance EB.ZEN</h3>
                    <p class="card-text pt-3">Un énorme merci à mes fidèles clients qui me suivent depuis mes débuts
                        dans
                        cette belle
                        aventure!</p>
                    <p class="card-text">Et à toi, qui aimerait un moment de détente, une parenthèse de
                        bien-être, je
                        t'invite à découvrir la
                        réflexologie qui a objectif premier d'aider l'organisme à rétablir l'équilibre naturel des
                        flux
                        d'énergie par le massage des zones réflexes.</p>

                    <p class="card-text">Profitez de l'offre découverte!!!</p>

                    <p class="card-text">Prenez soin de vous.</p>

                    <p class="card-text"><small class="text-muted">Emmanuelle</small></p>
                </div>
            </div>
        </div>
    </div>
</div>