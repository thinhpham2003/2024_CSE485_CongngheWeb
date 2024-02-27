<?php
    include "data.php";
    $itemsPerPage = 5;
    //số trang hiện tai dang truy cap
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    $totalPage = ceil(count($products)/ $itemsPerPage);
    //ham array_slice lay hien thi
    $currentPageItems = array_slice($products, ($currentPage-1)*$itemsPerPage, $itemsPerPage);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" >
    <title>Project21</title>
</head>
<body>
    <div class="product_class">
        <?php foreach ($currentPageItems as $product_item):  ?>
        <div class = "product_item">
            <img src="logo.jfif" alt="">
            <?php
            echo "<h3>$product_item[name]</h3>";
            echo "<h4>$".$product_item['price']."</h4>";
            echo "<p>$product_item[description]</p>";
            ?>
        </div>
        <?php endforeach; ?>

    </div>

    <div class="pagination">
        <?php
r            $array_pagination =  (ceil(($currentPage)/$itemsPerPage)-1)*$itemsPerPage+1 ;
            if ($currentPage >1):
                echo '<a href="?page='.($currentPage-1).'"><-Previous</a>';
            endif;
            for ($i = $array_pagination; $i< $array_pagination+$itemsPerPage;$i++):
                echo '<div class="item">';
                if ($currentPage == $i):
                    echo '<a class ="active" href="?page='.$i.'">'.$i.'</a>';
                else:
                    echo '<a class ="no-active" href="?page='.$i.'">'.$i.'</a>';
                endif;
                echo '</div>';
            endfor;

        if ($currentPage <$totalPage):
            echo '<a href="?page='.($currentPage+1).'">->Next</a>';
        endif;

        ?>






    </div>

</body>
</html>