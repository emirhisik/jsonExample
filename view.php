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
            <h3>View Product: <b><?php echo $product["title"] ?></b></h3>
        </div>
        <div class="card-body">
            <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-secondary">Update</a>
            <form style="display: inline-block;" action="view.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
        <table class="table">
        <tbody>
            <tr>
                <th>Title:</th>
                <td> <?php echo $product['title'] ?> </td>
            </tr>
            <tr>
                <th>Internal Storage:</th>
                <td> <?php echo $product['internalStorage'] ?> </td>
            </tr>
            <tr>
                <th>Battery Capacity:</th>
                <td> <?php echo $product['batteryCapacity'] ?> </td>
            </tr>
            <tr>
                <th>RAM:</th>
                <td> <?php echo $product['ram'] ?> </td>
            </tr>
            <tr>
                <th>Screen Size:</th>
                <td> <?php echo $product['screenSize'] ?> </td>
            </tr>
        </tbody>
    </table>
</div>


<?php     include 'footer.php'; ?>