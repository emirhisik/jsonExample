<?php 
include 'header.php';
require __DIR__ . '/products.php';

if(!isset($_POST['id'])){
    include "not_found.php";
    exit;
}
$productID = $_POST['id'];
deleteProduct($productID);

header("Location: index.php");
?>