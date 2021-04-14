<?php 
    require '../../server/database.php';
    $query = "SELECT * FROM products ORDER BY product_id desc";
    $result = mysqli_query($conn,$query);
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/shop.css">
    <title>I&J shop</title>
</head>
<body>
    <?php include '../../includes/header.html';?>

    <main>
        <div class="sidebar">
            <div class="head">
                <h1>All products</h1>
            </div>
            <div class="search">
                <form action="#" method="post">
                    <input type="text" name="searched" placeholder="search" id="" required>
                    <input type="submit" value="Search">
                </form>
            </div>
        </div>
        <div class="pr">
        <div class="products-container" >

            <?php foreach($products as $product):?>
            <?php
                $img_URL = "../../admin/products/".$product['product_image'];
                ?>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="<?php echo $img_URL; ?>" alt="">
                <p><?php echo $product['product_name']; ?></p>
                <div class="border"></div>
                <p><?php echo $product['price'];?></p>
                <span><?php echo $product['availability']; ?></span>
                <a href="../order/index.php?id=<?php echo $product['product_id']; ?>" class="red-btn">order</a>
            </div>
            <?php endforeach; ?>
            
        
        </div>
        </div>
    </main>
    <?php include "../../includes/footer.html";?>
</body>
</html>