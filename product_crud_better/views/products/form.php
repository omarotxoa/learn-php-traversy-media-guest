<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Product Image</label>
        <br>
        <?php if($product['image']): ?>
        <img src="<?php echo $product['image']; ?>" class="product-image-update">
        <?php endif; ?>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product Title</label>
        <input name="title" type="text" class="form-control" value="<?php echo $product['title']; ?>">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <input name="description" type="textarea" class="form-control"<?php echo $product['description']; ?>>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input name="price" type="number" step=".01" class="form-control" value="<?php echo $product['price']; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>