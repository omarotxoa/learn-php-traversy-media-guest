<?php 
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<pre>';
var_dump($_SERVER['REQUEST_METHOD']);
echo '</pre>';

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

    if(!$errors) {
        $statement = $pdo->prepare("INSERT INTO products(title, image, description, price, create_date)
                        VALUE (:title, :image, :description, :price, :date)"); 
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', '');
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
    }
} 
?>

<pre>
<?php print_r($_POST); ?>
</pre>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <div class="container my-5">
        <div class="col-lg-8 px-0">
            <h1>Create New Product</h1>
            <?php if(!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error) : ?>
                        <div><?php echo $error ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label>Product Image</label>
                    <br>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label>Product Title</label>
                    <input name="title" type="text" class="form-control" value="<?php echo $title; ?>">
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <input name="description" type="textarea" class="form-control"<?php echo $description; ?>>
                </div>
                <div class="form-group">
                    <label>Product Price</label>
                    <input name="price" type="number" step=".01" class="form-control" value="<?php echo $price; ?>">
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
