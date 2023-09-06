<?php

require_once "database.php";

$product = [
    'image' => '',
    'title' => '',
    'description' => '',
    'price' => ''
];

echo '<pre>';
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_FILES);
echo '</pre>';
// exit;

$errors = [];

$title = '';
$description ='';
$price = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

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
        $imagePath = '';

        if ($image && $image['tmp_name']) {
            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date)
                        VALUE (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
        header('Location: index.php');
    }

    
}
?>

<pre>
<?php print_r($_POST); ?>
</pre>

<?php include_once "views/partials/header.php"; ?>

  <body>
    <div class="container my-5">
        <div class="col-lg-8 px-0">
            <a href="index.php" class="btn btn-outline-primary">Go Back to Products</a>
            <h1>Create New Product</h1>
            <?php if(!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error) : ?>
                        <div><?php echo $error ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php include_once "views/products/form.php"; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
