<?php
    require 'products.php';

    $products = getProducts();

    include 'header.php';
?>
<div class="container">
<table class="table">
        <thead>
            <tr>
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
                    <td> <?php echo $product["Title"] ?> </td>
                    <td> <?php echo $product["InternalStorage"] ?> </td>
                    <td> <?php echo $product["BatteryCapacity"] ?> </td>
                    <td> <?php echo $product["RAM"] ?> </td>
                    <td> <?php echo $product["ScreenSize"] ?> </td>
                    <td>
                        <a href="view.php?id=<?php echo $product["ID"] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $product["ID"] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                        <a href="delete.php?id=<?php echo $product["ID"] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
    <?php include 'footer.php'; ?>
