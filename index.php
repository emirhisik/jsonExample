<?php
    require 'products.php';

    $products = getProducts();

    include 'header.php';
?>
<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create New Product</a>
    </p>
<table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Internal Storage</th>
                <th>Battery Capacity</th>
                <th>RAM</th>
                <th>Screen Size</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product){ ?>
                <tr>
                    <td>
                        <?php if(isset($product['extension'])){ ?>
                            <img width="100" src="<?php echo "images/${product['id']}.${product['extension']}" ?> " alt="">
                        <?php }; ?>
                    </td>
                    <td> <?php echo $product["title"] ?> </td>
                    <td> <?php echo $product["internalStorage"] ?> </td>
                    <td> <?php echo $product["batteryCapacity"] ?> </td>
                    <td> <?php echo $product["ram"] ?> </td>
                    <td> <?php echo $product["screenSize"] ?> </td>
                    <td>
                        <a href="view.php?id=<?php echo $product["id"] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $product["id"] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                        <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
    <?php include 'footer.php'; ?>
