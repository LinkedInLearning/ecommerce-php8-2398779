<?php
function index()
{
    require_once 'front/index.php';
}

function products($products)
{
    require_once 'front/products.php';
}

function product($id)
{
    require_once 'front/product.php';
}

function login()
{
    require_once 'front/login.php';
}

function register()
{
    require_once 'front/register.php';
}

function panier()
{
    require_once 'front/panier.php';
}

function admin_index()
{
    require_once 'admin/index.php';
}

function admin_admins()
{
    require_once 'admin/admins.php';
}

function admin_categories()
{
    require_once 'admin/categories.php';
}

function admin_products()
{
    $products = get_products();
    require_once 'admin/products.php';
}

function admin_product_add()
{
    if (!empty($_POST)) {
        set_product($_POST);
        header('Location: /index.php/admin/products');      
        exit();  
    } else {
        require_once 'admin/product_add.php';
    }
}

function admin_users()
{
    require_once 'admin/users.php';
}
?>