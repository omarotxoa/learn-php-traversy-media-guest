<?php

require_once "database.php";

$id = $_GET['id'] ?? null;

if(!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($product);
// echo '</pre>';
// exit;

$errors = [];

$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if(!$title) {
        $errors[] = 'Product title is required';
    }
    if(!$description) {
        $errors[] = 'Description is required';
    }

    if(!is_dir('images')) {
        mkdir('images');
    }

    function randomString($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }
        return $str;
    }

    if(empty($errors)) {
        $image = $_FILES['image'] ?? null;
        $imagePath = $product['image'];

        

        if ($image && $image['tmp_name']) {
            if($product['image']) {
              unlink($product['image']);
            }
            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        $statement = $pdo->prepare("UPDATE products SET title = :title, image = :image, description = :description, price = :price WHERE id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: index.php');
    }

    
}
?>

<pre>
<?php print_r($product); ?>
</pre>

<?php include_once "views/partials/header.php"; ?>
  <body>
    <div class="container my-5">
        <div class="col-lg-8 px-0">
            <a href="index.php" class="btn btn-outline-primary">Go Back to Products</a>
            <h1>Update Product: <?php echo $product['title']; ?></h1>
            <?php if(!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error) : ?>
                        <div><?php echo $error ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
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
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
