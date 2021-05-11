<?php
    session_start();
    require '../../server/database.php';
    if(isset($_POST['submit'])){
        require '../../server/database.php';
        $searched = $_POST['searched'];
        $sql = "SELECT * FROM products WHERE product_name LIKE '$searched'";
        $result = mysqli_query($conn,$sql);
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/shop.css">
    <title>Search Results</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
    <main>
        <div class="sidebar">
            <div class="head">
                <h1>All products</h1>
            </div>

        </div>
        <div class="pr">
        <div class="products-container" >
            <?php $img_URL = "../../admin/products/".$product['product_image'];?>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="<?php echo $img_URL; ?>" alt="">
                <p><?php echo $product['product_name']; ?></p>
                <div class="border"></div>
                <p><?php echo $product['price'];?></p>
                <span><?php echo $product['availability']; ?></span>
                <?php
                $_SESSION['secure_id'] = rand(145045870,255889797745989500);
                $secureID = $product['product_id']*$_SESSION['secure_id'];
                ?>
                <a href="../order/index.php?id=<?php echo $secureID; ?>&auto=<?php echo $_SESSION['secure_id'] ?>" class="red-btn">order</a>
            </div>
            
        </div>
        </div>
    </main>
    <?php include "../../includes/footer.html";?>
</body>
</html>