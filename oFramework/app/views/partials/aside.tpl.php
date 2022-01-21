<!-- Aside category list section -->
<aside class="col-3 ml-5">
    <div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..." aria-describedby="basic-addon2">
		<div class="input-group-append">
			<button class="btn btn-outline-secondary" type="button">Allez</button>
		</div>
	</div>

     <div class="card">
		<h4 class="list-group-item list-group-item-dark m-0">Catégories</h4>
		<ul class="list-group list-group-flush">
            <?php foreach($themes as $theme): ?>
            <a href="<?= $router->generate('blog-list', ['id' => $theme->getId()]) ?>"><li class="list-group-item list-group-item-action"><?= $theme->getName() ?></li></a>
			<!-- <a href=""><li class="list-group-item list-group-item-action">Zen atitude</li></a>
			<a href=""><li class="list-group-item list-group-item-action">Prendre soin de soi</li></a>
			<a href=""><li class="list-group-item list-group-item-action">Vivre mieux</li></a>
            <a href=""><li class="list-group-item list-group-item-action">Produits</li></a> -->
            <?php endforeach; ?>
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