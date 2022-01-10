<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            <div class="col-lg-4">
                <img class="card-img-top" src="./uploads/<?= $product['filename']; ?>">
            </div>

            <div class="col-lg-8">
                <h1><?= $product['name']; ?> <a href="/index.php/panier/add?id=<?= $product['id']; ?>" class="btn btn-primary m-3 text-white">Ajouter au panier</a></h1>

                <p>
                    Prix : <?= $product['price']; ?>€
                </p>
                <p>
                    <?= $product['description']; ?>
                </p>
            </div>
        </div>
    </div>
</div>
