<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Panier</h1>
                <a class="btn btn-primary">Valider mon panier</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Qté</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0; $i<2; $i++) { ?>
                        <tr>
                            <th scope="row">2</th>
                            <td>Nunc ut purus finibus, molestie lorem mattis, viverra nunc.</td>
                            <td><a class="btn btn-danger text-white">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
