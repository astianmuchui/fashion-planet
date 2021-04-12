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
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1000">
                <img src="../../images/pexels-melvin-buezo-2529148.jpg" alt="">
                <p>Nike shoe</p>
                <div class="border"></div>
                <p>ksh 2500</p>
                <span>Available</span>
                <a href="#" class="red-btn">Order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="../../images/pexels-artem-beliaikin-1078975.jpg" alt="">
                <p>Cool hat</p>
                <div class="border"></div>
                <p>ksh 500</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="../../images/pexels-ge-yonk-1152077.jpg" alt="">
                <p>handbag</p>
                <div class="border"></div>
                <p>ksh 1200</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="../../images/pexels-pixabay-47856.jpg" alt="">
                <p>watch</p>
                <div class="border"></div>
                <p>ksh 1000</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="../../images/pexels-erik-mclean-4061385.jpg" alt="">
                <p>Nike sneakers</p>
                <div class="border"></div>
                <p>ksh 3000</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>

            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="../../images/pexels-cottonbro-5054541.jpg" alt="">
                <p>smart watch</p>
                <div class="border"></div>
                <p>ksh 300</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
        
        </div>
        </div>
    </main>
    <?php include "../../includes/footer.html";?>
</body>
</html>