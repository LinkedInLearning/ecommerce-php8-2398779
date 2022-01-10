<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Neque porro quisquam.</h1>
        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis tellus non est semper fringilla.</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Praesent tempor nec eros ac congue. </a>
            <a href="#" class="btn btn-secondary my-2">Donec vehicula risus in convallis cursus.</a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            <?php for ($i=0; $i<9; $i++) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="./assets/img/delicate-bottle.webp">
                        <div class="card-body">
                            <p class="card-text">Donec vehicula risus in convallis cursus.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                                </div>
                                <small class="text-muted">#tag</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
