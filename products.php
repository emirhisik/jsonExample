<?php 
    function getProducts()
    {
        return json_decode(file_get_contents(__DIR__ . '/products.json'), true);
    }

    function getProductByID($id){
        $products = getProducts();
        foreach($products as $product){
            if($product["id"] == $id){
                return $product;
            }
        }
        return null;
    }

    function createProduct($data){

        $products = getProducts();

        $data['id'] = rand(1000000, 2000000);

        $products[] = $data;

        putJson($products);

        return $data;
    }

    function updateProduct($data, $id){

        $updateProduct = [];
        $products = getProducts();
        foreach($products as $i => $product){
            if($product["id"] == $id){
                $products[$i] = $updateProduct = array_merge($product, $data);
            }
        }

        putJson($products);

        return $updateProduct;

    }

    function deleteProduct($id){
        $products = getProducts();

        foreach($products as $i => $product){
            if($product['id'] == $id){
                array_splice($products, $i, 1);
            }
        }
        putJson($products);
    }

    function uploadImage($file, $product){

        if(isset($_FILES['picture']) && $_FILES['picture']['name']){
        if(!is_dir(__DIR__ . "/images")){
            mkdir(__DIR__ . "/images");
        }

        $fileName = $file['name'];

        $dotPosition = strpos($fileName, '.');

        $extension = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file["tmp_name"], __DIR__ . "/images/${product['id']}.$extension");

        $product['extension'] = $extension;
        updateProduct($product, $product['id']);
    }
    }

    function putJson($products){
        file_put_contents(__DIR__."/products.json", json_encode($products, JSON_PRETTY_PRINT));
    }
?>