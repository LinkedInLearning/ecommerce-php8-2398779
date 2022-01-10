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

            <?php foreach ($products as $p) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="./uploads/<?= $p['filename']; ?>">
                        <div class="card-body">
                            <p class="card-text"><?= $p['name']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/index.php/product?id=<?= $p['id']; ?>" class="btn btn-sm btn-outline-secondary">Voir</a>
                                </div>
                                <small class="text-muted"><?= $p['price']; ?>€</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
