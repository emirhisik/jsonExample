<?php 
    function getProducts()
    {
        return json_decode(file_get_contents(__DIR__ . '/products.json'), true);
    }

    function getProductByID($ID){
        $products = getProducts();
        foreach($products as $product){
            if($product["id"] == $ID){
                return $product;
            }
        }
        return null;
    }

    function createProduct($data){

    }

    function updateProduct($data, $ID){
        $products = getProducts();
        foreach($products as $i => $product){
            if($product["id"] == $ID){
                $products[$i] = array_merge($product, $data);
            }
        }

        file_put_contents(__DIR__."/products.json", json_encode($products));

    }

    function deleteProduct($ID){

    }
?>