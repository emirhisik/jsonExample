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

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        updateProduct($_POST, $productID);

        header("Location: index.php");
    }
?>

<div class="container">
    <div class="card">
        <div class="card-header">
                <h3>Update Product <b><?php echo $product["Title"] ?></b></h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" value="<?php echo $product["Title"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Internal Storage</label>
                        <input name="internalStorage" value="<?php echo $product["InternalStorage"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Battery Capacity</label>
                        <input name="batteryCapacity" value="<?php echo $product["BatteryCapacity"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>RAM</label>
                        <input name="ram" value="<?php echo $product["RAM"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Screen Size</label>
                        <input name="screenSize" value="<?php echo $product["ScreenSize"] ?>" class="form-control">
                    </div>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>