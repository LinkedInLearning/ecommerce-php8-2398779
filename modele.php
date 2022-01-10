<?php
    include_once "config.php";

    function get_products() {
        $connexion = db();
        $query = "SELECT * FROM product";
	    $stmt = $connexion->prepare($query);
	    $stmt->execute();		
        
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    return $products; 
    }
    function set_product($data) {
        $connexion = db();
        $query = "INSERT INTO product SET name=:name, description=:description, price=:price, category=:category";

        $stmt = $connexion->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":description", $data['description']);
        $stmt->bindParam(":price", $data['price']);
        $stmt->bindParam(":category", $data['category']);
        
        $stmt->execute();
    }
    function get_categories() {
        $connexion = db();
        $query = "SELECT * FROM category";
	    $stmt = $connexion->prepare($query);
	    $stmt->execute();		
        
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    return $categories; 
    }
    function set_category($data) {
        $connexion = db();
        $query = "INSERT INTO category SET name=:name";

        $stmt = $connexion->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->execute();
    }
    function remove_category($id) {
        $connexion = db();
        $query = "DELETE FROM category WHERE id=" . $id;

        $stmt = $connexion->prepare($query);
        $stmt->execute();
    }
    function remove_product($id) {
        $connexion = db();
        $query = "DELETE FROM product WHERE id=" . $id;

        $stmt = $connexion->prepare($query);
        $stmt->execute();
    }
    function get_users($isAdmin = 0) {
        $connexion = db();
        $query = "SELECT * FROM user WHERE admin=" . $isAdmin;
	    $stmt = $connexion->prepare($query);
	    $stmt->execute();		
        
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    return $users; 
    }
    function set_user($data) {
        $connexion = db();
        $query = "INSERT INTO user SET email=:email, password=:password, admin=:admin";

        $stmt = $connexion->prepare($query);
        $email = $data['email'];
        $password = md5($data['password']);
        $admin = (isset($data['admin'])) ? 1 : 0;
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":admin", $admin);
        $stmt->execute();
    }
    function remove_user($id) {
        $connexion = db();
        $query = "DELETE FROM user WHERE id=" . $id;

        $stmt = $connexion->prepare($query);
        $stmt->execute();
    }
?>