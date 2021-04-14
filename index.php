<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/aos_min.css">
    <title>I&J | Welcome</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" height="47" width="166.66" alt="">
        </div>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
        </nav>
    </header>





    <main>
        <div class="intro">
            <p>A closet </p>
            <span class="txt-type" data-wait="1000" data-words='["Like you  never seen before " , "With a taste of class "]'></span>
        </div>

        <a href="#" class="action-btn">Order Now</a>

    </main>

    <section class="section-one" id="products">
        <h1>Available products</h1>
        
        <div class="products-container" >
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1000">
                <img src="./images/pexels-melvin-buezo-2529148.jpg" alt="">
                <p>Nike shoe</p>
                <div class="border"></div>
                <p>ksh 2500</p>
                <span>Available</span>
                <a href="#" class="red-btn">Order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="images/pexels-artem-beliaikin-1078975.jpg" alt="">
                <p>Cool hat</p>
                <div class="border"></div>
                <p>ksh 500</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="images/pexels-ge-yonk-1152077.jpg" alt="">
                <p>handbag</p>
                <div class="border"></div>
                <p>ksh 1200</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="images/pexels-pixabay-47856.jpg" alt="">
                <p>watch</p>
                <div class="border"></div>
                <p>ksh 1000</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="images/pexels-erik-mclean-4061385.jpg" alt="">
                <p>Nike sneakers</p>
                <div class="border"></div>
                <p>ksh 3000</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>

            <div class="product-card"  data-aos="flip-left" data-aos-duration="1500">
                <img src="images/pexels-cottonbro-5054541.jpg" alt="">
                <p>smart watch</p>
                <div class="border"></div>
                <p>ksh 300</p>
                <span>Available</span>
                <a href="#" class="red-btn">order</a>
            </div>
        
        </div>
        
    </section>
    <section class="blog" id="blog">
        <h1>Our latest posts</h1>

        <div class="posts" >
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="2000" data-aos-delay="500">
                <img src="./images/pexels-godisable-jacob-965324.jpg" alt="">
                <p>Best dress codes 2021</p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="2000" data-aos-delay="900">
                <img src="./images/pexels-torsten-dettlaff-437037.jpg" alt="">
                <p>Best watches for men 2021</p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="2000" data-aos-delay="1500">
                <img src="./images/pexels-jordan-hyde-1032110.jpg" alt="">
                <p>Best shoes 2021</p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="2000" data-aos-delay="2000">
                <img src="./images/pexels-melvin-buezo-2529147.jpg" alt="">
                <p>Most expensive shoes</p>
                <div class="border"></div>
                <a href="#" class="red-btn">view post</a>
            </div>

            
        </div>

    </section>
    <section class="contact" id="contact">
        <h1 data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="500">Reach us today !</h1>
        <div class="form-container">
            <form action="#" method="post">
                <label>Your Name</label> <br>
                <input type="text" name="name" id="" required> <br>
                <label>Your Email</label> <br>
                <input type="email" name="email" id="" required> <br>
                <label>Phone Number</label> <br>
                <input type="number" name="phone" id="" required placeholder="start with 07"> <br>
                <label>Message</label> <br>
                <textarea name="message" id="" cols="30" rows="10" required></textarea> <br>
                <input type="submit" value="send message" name="submit" class="red-btn">
            </form>
        </div>
        
    </section>

    <footer>

        <div class="logo">
            <img src="./images/logo.png" height="47" width="166.66" alt="">
        </div>
        <div class="links">
            <h4>Quick links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
        </div>
        <div class="categories">
            <h4>Categories</h4>
            <ul>
                <li>clothing</li>
                <li>footwear</li>
                <li>jewellery</li>
                <li>Bags</li>
                <li>Makeup</li>
                <li>Hats</li>
            </ul>
        </div>
        <div class="newsletter">
            <h4>Subscribe to our newsletter</h4>
            <form action="" method="post">
                <input type="email" placeholder="Enter your email here" name="nws_email" required class="input">
                <input type="submit" value="Join" class="submit">
            </form>
        </div>
    </footer>
    <script src="./js/scroll_min.js"></script>
    <script src="./js/type_min.js"></script>
    <script src="./js/ops.js"></script>
</body>
</html>