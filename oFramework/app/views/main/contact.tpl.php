<div class="container">
    <div class="card text-center border-0 meeting">
        <div class="card-header bg-light" id="top">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
            <h1>Contact</h1>
        </div>
    </div>

    <!-- contact form-->
    <section class="products-grid bg-white">
        <p class="text-center">Une question, besoin de plus d'information ?</p>
        <div class="rounded g-0 p-5 " id="contactBg">
            <div class="container-fluid">
                <form action="<?= $router->generate('main-send') ?>" method="POST" id="contact-form">
                
                    <div class="mb-4">
                        <label for="firstname" class="form-label fw-bold">Prénom</label>
                        <input type="text" class="form-control" id="nameForm" name="firstname" placeholder="Votre prénom">
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="form-label fw-bold">Nom</label>
                        <input type="text" class="form-control" id="nameForm" name="lastname" placeholder="Votre nom">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="exemple@email.com">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label fw-bold">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" value="Send" class="btn btn-buy" id="buy">
                            <span class="btn-buy-label ml-2">
                            Envoyer
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>