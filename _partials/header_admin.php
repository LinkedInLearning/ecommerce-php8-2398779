<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/img/favicon.ico">

    <title>Two Trees Olive Oils - Two Trees Olive Oils</title>

    <base href="http://localhost:8888/">

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/custom.css" rel="stylesheet">
</head>

<body>

<header>
    <div class="collapse bg-primary" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Admin</h4>
                    <?php if (isset($_SESSION['logged'])) { echo "<p>" . $_SESSION['email'] . "</p>"; } ?>
                    <ul class="list-unstyled">
                        <li><a href="index.php/admin/products" class="text-white">Produits</a></li>
                        <li><a href="index.php/admin/users" class="text-white">Utilisateurs</a></li>
                        <li><a href="index.php/admin/admins" class="text-white">Administrateurs</a></li>
                        <li><a href="index.php/admin/categories" class="text-white">Catégories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-primary box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="index.php/admin/index" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Admin - Two Trees Olive Oils</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">