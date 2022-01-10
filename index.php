<?php include_once "modele.php" ?>
<?php include_once "controllers.php"; ?>


<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($uri, "admin") !== false) {
    include_once "_partials/header_admin.php";
} else {
    include_once "_partials/header.php";
}

?>

<?php
if ('/index.php' == $uri)
{
    echo index();
}
elseif ('/index.php/products' == $uri)
{
    $products = get_products();
    echo products($products);
}
elseif ('/index.php/product' == $uri && isset($_GET['id']))
{
    echo product($_GET['id']);
}
elseif ('/index.php/login' == $uri)
{
    echo login();
}
elseif ('/index.php/panier' == $uri)
{
    echo panier();
}
elseif ('/index.php/register' == $uri)
{
    echo register();
}
elseif ('/index.php/admin/index' == $uri)
{
    echo admin_index();
}
elseif ('/index.php/admin/admins' == $uri)
{
    echo admin_admins();
}
elseif ('/index.php/admin/categories' == $uri)
{
    echo admin_categories();
}
elseif ('/index.php/admin/products' == $uri)
{
    echo admin_products();
}
elseif ('/index.php/admin/product/add' == $uri)
{
    echo admin_product_add();
}
elseif ('/index.php/admin/users' == $uri)
{
    echo admin_users();
}
else
{
    echo index();
}
?>

<?php include_once "_partials/footer.php"; ?>