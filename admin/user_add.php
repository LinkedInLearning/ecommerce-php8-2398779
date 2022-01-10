<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <h1>Ajouter un utilisateur</h1>
            <div class="col-lg-12">
                <form method="POST" name="user" action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email@exemple.fr">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="mot de passe">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="admin" id="admin">
                        <label class="form-check-label" for="admin">
                            Est admin ?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
