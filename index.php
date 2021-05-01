<?php
    //New arrivals interface
    require "./server/database.php";
    $query = "SELECT * FROM `products` ORDER BY `product_id` desc LIMIT 6";
    $result = mysqli_query($conn,$query);
    $goods = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    //Contact form

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone  = mysqli_real_escape_string($conn,$_POST['phone']);
        $message  = mysqli_real_escape_string($conn,$_POST['message']);
        require './server/contact_form.php';
    }


    //Subscribe

    if(isset($_POST['subscribe'])){
        $subscribed_email = mysqli_real_escape_string($conn,trim($_POST['nws_email']));
        require './server/make_subscription.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <title>I&J | Welcome</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="./"><img src="./images/logo.png" height="47" width="166.66" alt=""></a>

        </div>

        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="./pages/shop/">Products</a></li>
            </ul>
        </nav>
    </header>





    <main>
        <div class="intro">
            <p>A closet </p>
            <span class="txt-type" data-wait="500" data-words='["Like you  never seen before " , "With a taste of class "]'></span>
        </div>

        <a href="http://wa.me/254706674641" class="action-btn">Order Now</a>

    </main>

    <section class="section-one" id="products">
        <h1>Newest Arrivals</h1>

        <div class="products-container" >
        <?php foreach($goods as $product):?>
            <?php
                $img_URL = "./admin/products/".$product['product_image'];
                ?>
            <div class="product-card"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <img src="<?php echo $img_URL; ?>" alt="">
                <p><?php echo $product['product_name']; ?></p>
                <div class="border"></div>
                <p><?php echo $product['price'];?></p>
                <span><?php echo $product['availability']; ?></span>
                <?php
                $_SESSION['secure_id'] = rand(145045870,255889797745989500);
                $secureID = $product['product_id']*$_SESSION['secure_id'];
                ?>
                <a href="./pages/order/index.php?id=<?php echo $secureID; ?>&auto=<?php echo $_SESSION['secure_id'] ?>" class="red-btn">order</a>
            </div>
            <?php endforeach; ?>
        </div>

    </section>
    <section class="blog" id="blog">
        <h1>Our latest posts</h1>

        <div class="posts" >
            <?php require './server/get_latest_posts.php'; ?>
            <?php foreach ($posts as $post):?>
                <?php $URL_IMG = "./admin/posts/".$post['image']; ?>
            <div class="post" data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="1000" data-aos-delay="0">
                <img src="<?php echo $URL_IMG; ?>" alt="Image">
                <p><?php echo $post['title']; ?></p>
                <div class="border"></div>
                <a href="#" class="red-btn">View post</a>
            </div>
            <?php endforeach; ?>

        </div>

    </section>
    <section class="about">
         <h3>About Us</h3>
          <article>
            I&j closet is a shopping agency located in Narok,Kenya.With customers from all over the country
            We are dedicated to achieving excellence in the Clothing industry And more importantly giving you
            an amazing look.
            At I&J we are raising the bar for clothing standards, <br>
            What to expect:
          </article>
          <div class="values-container">
            <div class="value-one">
                <i class="fas fa-user-clock fa-2x"></i> <br> <br>
                <span>24 hour support</span>
                <p>
                    we reply instantly to your sms email and whatsapp messages
                </p>
            </div>
            <div>
                <i class="fas fa-truck fa-2x"></i> <br> <br>
                <span>Instant and cheap delivery</span>
                <p>
                    we deliver our products within a short time at a cheap price
                </p>
            </div>
            <div>
                <i class="fas fa-coins fa-2x"></i> <br> <br>
                <span>Return guarantee</span>
                <p>
                    instant return and replace of goods within 30 days in case of a problem
                </p>

            </div>

        </div>
     </section>
    <section class="contact" id="contact">
        <h1 data-aos="fade-up" data-aos-easing="ease-out"  data-aos-duration="500">Reach us today !</h1>
        <div class="form-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label>Your Name</label> <br>
                <input type="text" name="name" id="" required> <br>
                <label>Your Email</label> <br>
                <input type="email" name="email" id="" required> <br>
                <label>Phone Number</label> <br>
                <input type="number" name="phone" id="" required placeholder="start with 07" required> <br>
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
                <li><a href="./pages/shop/">Products</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Contacts</h4>
            <ul>
                <li> <i class="fas fa-phone-alt"></i> 254 706 674 641</li>
                <li> <i class="far fa-envelope"></i> jkamanx@gmail.com</li>
                <li><i class="fas fa-clock"> </i> weekdays 8.00am - 6.00pm </li>
                <li><i class="fas fa-globe"></i> injcloset.co.ke</li>
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
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="email" placeholder="Enter your email here" name="nws_email" required class="input">
                <input type="submit" value="Join" name="subscribe" class="submit">
            </form>
        </div>
    </footer>
    <script src="./js/font_awesome_main.js"></script>
    <script src="./js/type_min.js"></script>
</body>
</html>
