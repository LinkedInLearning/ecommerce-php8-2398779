<?php

if(!empty($_GET['paymentID']) && !empty($_GET['token']) && !empty($_GET['payerID']) && !empty($_GET['pid']) ){ 
    var_dump($_SESSION); die();
    header("Location:index.php/thanks"); 
}else{ 
    header("Location:index.php"); 
} 
?>