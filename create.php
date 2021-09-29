<?php 
    include 'header.php';
    require __DIR__ . '/products.php';

    $product = [
        'id' => '',
        'title' => '',
        'internalStorage' => '',
        'batteryCapacity' => '',
        'ram' => '',
        'screenSize' => ''
    ];

    $errors =  [
        'title' => '',
        'internalStorage' => '',
        'batteryCapacity' => '',
        'ram' => '',
        'screenSize' => ''
    ];

    $isValid = true;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $product = array_merge($product, $_POST);

        if(!$product['title']){
            $isValid = false;
            $errors['title'] = 'Title required!';
        }
        if($isValid){
        $product = createProduct($_POST);

        uploadImage($_FILES["picture"], $product);

        header("Location: index.php");
        }
    }

    ?>
    
    <?php include 'form.php'; ?>