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
            <h2>Liste des articles</h2>
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
							<div class="col-md-8">
								<div class="card-body">
									<p class="infos">
										<time datetime="2021-01-14">14/01/2021</time> 
										<span class="badge bg-info text-dark">Info</span>
									</p>
									<h3 class="card-title"><a href="article.html"><?= $article->getTitle() ?></a></h3>
									<p class="card-text"><?= $article->getContent() ?></p>   
								</div>
							</div>
						</div>
                    </article>
                    <?php endforeach; ?>      
        		</main>
                
                <!-- Aside category list section -->
				<?php
                include __DIR__.'/../partials/aside.tpl.php';
                ?>
			</div>
		</div>
	</section>
</div>