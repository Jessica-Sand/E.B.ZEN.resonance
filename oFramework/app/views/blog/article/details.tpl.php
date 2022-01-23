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
                <li class="breadcrumb-item active">
                  <a href="<?= $router->generate('blog-list') ?>">
                  Blog
                  </a>
                </li>
                <li class="breadcrumb-item active">Article</li>
            </ol>
            <h1 id="list_title"><?= $article->getTitle() ?></h1>
        </div>
    </div>

    <section class="products-grid bg-white">
      <div class="container">
        <div class="row">
          
          <!-- Article list section -->
          <main class="col-lg-9">

            <article class="card mb-3 border-0">
              <p class="infos">
                <time datetime="2021-01-14"><?= $article->getRealisedAt() ?></time> 
                  <!-- <span class="badge bg-info text-dark">Info</span> -->
              </p>
              <h3 class="card-title text-center"><?= $article->getTitle() ?></h3>
              <img src="<?=$assetsBaseUri ?>images/<?= $article->getPicture() ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text"><?= $article->getContent() ?></p>
              </div>
            </article>
          </main>

          <!-- Aside category list section -->
          <?php
            include __DIR__.'/../../partials/aside.tpl.php';
          ?>
        </div>
      </div>
  </section>
</div>