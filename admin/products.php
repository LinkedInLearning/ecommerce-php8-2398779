<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Produits</h1>
                <a class="btn btn-primary text-white" href="index.php/admin/product/add">Ajouter</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $p) { ?>
                        <tr>
                            <th scope="row"><?= $p['id'] ?></th>
                            <td><?= $p['name'] ?></td>
                            <td>
                                <a class="btn btn-danger text-white">Supprimer</a>
                                <a class="btn btn-primary text-white">Modifier</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
