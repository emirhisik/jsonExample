<?php 
    function getProducts()
    {
        return json_decode(file_get_contents(__DIR__ . '/products.json'), true);
    }

    function getProductByID($ID){
        $products = getProducts();
        foreach($products as $product){
            if($product["ID"] == $ID){
                return $product;
            }
        }
        return null;
    }

    function createProduct($data){

    }

    function updateProduct($data, $ID){

    }

    function deleteProduct($ID){

    }
?>