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
				<main class="col-9">
            		<article class="card">
						<div class="row g-0">
							<div class="col-md-4">
                        <img src="<?=$assetsBaseUri ?>images/anniversaire.jpg" class="img-fluid" alt="...">
                        </div>
							<div class="col-md-8">
								<div class="card-body">
									<p class="infos">
										<time datetime="2021-01-14">14/01/2021</time> 
										<span class="badge bg-info text-dark">Info</span>
									</p>
									<h3 class="card-title"><a href="article.html">TEMPS LIBRE ..</a></h3>
									<p class="card-text">Prendre une heure par-ci par-là 
									Simplement pour vous faire plaisir , soulève votre peur d'être jugé égoïste ou paresseux .
									Mais qu'arriverait-il donc si vous vous échappiez de temps en temps ?
									Il n'y a pas de mal à se faire plaisir.
									Peut être ignorez-vous ce qui vous fait du bien ...
									PENSEZ réflexologie plantaire ou crânienne. 
									Dressez l'inventaire des plaisirs simples qui vous procurent bien-être et détente rien que pour vous ou à offrir avec une carte cadeau personnalisé. 
									À bientôt 
									Zen journée
									Résônance EB.ZEN</p>   
								</div>
							</div>
						</div>
            		</article>
        		</main>
				
				<!-- Aside category list section -->
      			<aside class="col-3 ml-5">
        			<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Rechercher un article..."
						aria-label="Rechercher un article..." aria-describedby="basic-addon2">
					  	<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button">Allez</button>
					  	</div>
					</div>

       				<div class="card">
						<h4 class="list-group-item list-group-item-dark m-0">Catégories</h4>
						<ul class="list-group list-group-flush">
                            <!-- SQL to find all the categories -->
							<a href=""><li class="list-group-item list-group-item-action">Zen atitude</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Prendre soin de soi</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Vivre mieux</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Produits</li></a>
						  </ul>
					</div>

        			<div class="card mt-5">
						<h4 class="list-group-item list-group-item-dark m-0">Dates</h4>
					  	<ul class="list-group list-group-flush">
                            <!-- SQL to find all the dates -->
							<a href=""><li class="list-group-item list-group-item-action">Janvier 2022</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Décembre 2021</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Novembre 2021</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Octobre 2021</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Septembre 2021</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Août 2021</li></a>
							<a href=""><li class="list-group-item list-group-item-action">Juillet 2021</li></a>
					  	</ul>
					</div>
      			</aside>
			</div>
		</div>
	</section>
</div>