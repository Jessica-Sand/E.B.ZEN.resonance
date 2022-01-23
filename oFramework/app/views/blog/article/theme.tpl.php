<!-- Article list -->
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
                <li class="breadcrumb-item active">Blog</li>
            </ol>
            <h1 id="list_title">Liste des articles du thème - <?= $theme->getName() ?></h1>
        </div>
    </div>

    <section class="products-grid bg-white">
        <div class="container">
			<div class="row">
				
				<!-- Article list section -->
				<main class="col-lg-9">
                    <?php foreach($articles as $article): ?>
            		<article class="card mb-5">
						<div class="row g-0">
							<div class="col-md-4">
                        <img src="<?=$assetsBaseUri ?>images/<?= $article->getPicture() ?>" class="img-fluid" alt="...">
                        </div>
							<div class="col-md-8 pb-2">
								<div class="card-body">
									<p class="infos">
										<time datetime="2021-01-14"><?= $article->getRealisedAt() ?></time> 
										<!-- <span class="badge bg-info text-dark">Info</span> -->
									</p>
									<h3 class="card-title"><?= $article->getTitle() ?></h3>
                                    <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?= $article->getContent() ?></p>
                                    <button type="button" class="btn btn-primary btn-sm text-end">Lire l'article</button>
                                </div>
                            </div>
						</div>
                    </article>
                    <?php endforeach; ?>      
        		</main>
                
                <!-- Aside category list section -->
				<?php
                include __DIR__.'/../../partials/aside.tpl.php';
                ?>
			</div>
		</div>
	</section>
</div>