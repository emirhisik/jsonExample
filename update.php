<?php 
    include 'header.php';
    require __DIR__ . '/products.php';

    if(!isset($_GET["id"])){
        include 'notFound.php';
        exit;
    }

    $productID = $_GET["id"];

    $product = getProductByID($productID);

    if(!$product){
        include 'notFound.php';
        exit;
    }

    $errors =  [
        'title' => '',
        'internalStorage' => '',
        'batteryCapacity' => '',
        'ram' => '',
        'screenSize' => ''
    ];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $product = updateProduct($_POST, $productID);

        uploadImage($_FILES["picture"], $product);

        header("Location: index.php");
    }

?>

<?php include 'form.php' ?>