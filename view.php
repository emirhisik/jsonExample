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

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View Product: <b><?php echo $product["Title"] ?></b></h3>
        </div>
    </div>
        <table class="table">
        <tbody>
            <tr>
                <th>Title:</th>
                <td> <?php echo $product['Title'] ?> </td>
            </tr>
            <tr>
                <th>Internal Storage:</th>
                <td> <?php echo $product['InternalStorage'] ?> </td>
            </tr>
            <tr>
                <th>Battery Capacity:</th>
                <td> <?php echo $product['BatteryCapacity'] ?> </td>
            </tr>
            <tr>
                <th>RAM:</th>
                <td> <?php echo $product['RAM'] ?> </td>
            </tr>
            <tr>
                <th>Screen Size:</th>
                <td> <?php echo $product['ScreenSize'] ?> </td>
            </tr>
        </tbody>
    </table>
</div>


<?php     include 'footer.php'; ?>