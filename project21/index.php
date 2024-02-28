<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "description" => "A comfortable and stylish T-Shirt",
        "price" => 15.99,
        "image" =>'<img class="images" src="img/bag.png " alt="Mô tả hình ảnh">'
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "description" => "A comfortable and stylish T-Shirt",
        "price" => 24,
        "image" =>'<img class="images" src="img/stylo.png " alt="Mô tả hình ảnh">'
    ],
    [
        "id" => 3,
        "name" => "Jean",
        "description" => "A comfortable and stylish T-Shirt",
        "price" => 25,
        "image" =>'<img class="images" src="img/chari.png " alt="Mô tả hình ảnh">'
    ],
    [
        "id" => 4,
        "name" => "Jean",
        "description" => "A comfortable and stylish T-Shirt",
        "price" => 26,
        "image" =>'<img class="images" src="img/set.png " alt="Mô tả hình ảnh">'
    ],
    [
        "id" => 5,
        "name" => "Jean",
        "description" => "A comfortable and stylish T-Shirt",
        "price" => 27,
        "image" =>'<img class="images" src="img/bag.png " alt="Mô tả hình ảnh">'
    ],
    [
        "id" => 6,
        "name" => "Jean",
        "description" => "A comfortable and stylish T-Shirt",
        "price" => 28,
        "image" =>'<img class="images" src="img/bag.png " alt="Mô tả hình ảnh">'
    ],

];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems =
    array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <?php
            echo $product['image'];
            echo '<p>' .$product['name']. '</p>';
            echo '<p>' .$product['price']. '</p>';
            echo '<p>' .$product['description']. '</p>';
            ?>
        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</body>
</html>




