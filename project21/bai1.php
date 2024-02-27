<?php
    $products = [
        [
            "id" => 1,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt.",
            "img" => "img/jean.jpeg"
        ],
        [
            "id" => 2,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "img" => "img/jean.jpeg"
        ],
        [
            "id" => 3,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "img" => "img/jean.jpeg"
        ],
        [
            "id" => 4,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "img" => "img/jean.jpeg"
        ],
        [
            "id" => 5,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "img" => "img/jean.jpeg"
        ],
        [
            "id" => 6,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "img" => "img/jean.jpeg"
        ],
        [
            "id" => 7,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "img" => "img/jean.jpeg"
        ],
    ];
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $itemsPerPage = 3;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css1.css">
    <title>Bài 1</title>
</head>
<body>
    <div class="product-list">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="product">
                <div>
                    <img class="form-img" src="<?php echo $product['img']?>" alt="">
                </div>
                <div>
                    <label class="form-label"><?php echo $product['name']?></label>
                </div>

                <div>
                    <label class="form-label">$ <?php echo $product['price']?></label>
                </div>


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

