<div class="container">
    <div class="card">
        <div class="card-header">
                <h3>
                    <?php if ($product['id']){ ?>    
                        Update Product <b><?php echo $product["title"] ?></b>
                    <?php }else{ ?>
                        Create New Product
                    <?php } ?>
                    </h3>
            </div>
            <div class="card-body">

<form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" value="<?php echo $product["title"] ?>" class="form-control <?php echo $errors['title'] ? 'is-invalid' : '' ?> ">
                    </div>
                    <div class="invalid-feedback">
                        <?php echo $errors['title'] ?>
                    </div>
                    <div class="form-group">
                        <label>Internal Storage</label>
                        <input name="internalStorage" value="<?php echo $product["internalStorage"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Battery Capacity</label>
                        <input name="batteryCapacity" value="<?php echo $product["batteryCapacity"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>RAM</label>
                        <input name="ram" value="<?php echo $product["ram"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Screen Size</label>
                        <input name="screenSize" value="<?php echo $product["screenSize"] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="picture" class="form-control-file">
                    </div>
                    <button class="btn btn-success">Submit</button>
                </form>
                </div>
        </div>
    </div>
</div>
