
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adm.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/time.css">
    <title>Admin panel</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../images/logo.png" height="47" width="166.66" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="#">Welcome,Admin</a></li>
                <li><a href="./pages/products/">New product</a></li>
                <li><a href="./pages/blog/">Add to Blog</a></li>
                <li><a href="#">Contact clients</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">My products</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>  

          <?php include '../includes/clock.html'; ?>
        <section>
            <div class="stats">
                <div>
                    <h4 class="pink-breadcrumb"> Statistics</h4>
                    <ul>
                        <label>Orders</label>
                        <li>  <meter min="0" max="100" value="<?php require '../server/count_orders.php'; ?>"></meter> <small class="counter"><?php require '../server/count_orders.php';  ?>%</small>  </li>
                        <label>Posts</label>
                        <li> <meter min="0" max="100" value="40"></meter> <small class="counter">40%</small> </li>
                        <label>Testimonials</label>
                        <li> <meter min="0" max="100" value="<?php require '../server/count_testimonials.php'; ?>"></meter> <small class="counter"><?php require '../server/count_testimonials.php'; ?> </small></li>
                        <label>Messages</label>
                        <li><meter min="0" max="100" value="5"></meter> <small class="counter">5%</small> </li>
                    </ul>

                </div>
                
                
            </div>
            <div class="more-container">
                <div class="overview">
                    <h4 class="pink-breadcrumb">Website Overview</h4>
                    <div class="grid-container">
                        <div class="card"><i class="fas fa-pencil-alt fa-2x"></i> <?php require '../server/count_posts.php';?> <br> posts</div>
                        <div class="card"><i class="fas fa-sort fa-2x" ></i> <?php require '../server/count_orders.php'; ?> <br> orders</div>
                       <div class="card"><i class="fas fa-boxes fa-2x"></i> <?php require_once '../server/count_products.php'; ?> <br> products</div>
                        <div class="card"><i class="fas fa-signal fa-2x"></i> 100 <br> subscribers</div>
                    </div>
                </div>
                <div class="latest" id="latest">
                    <h4 class="pink-breadcrumb">Newest Orders</h4>
                    <table>
                    <?php require_once '../server/get_latest_orders.php'; ?>
                    
                        <tr class="pink-breadcrumb">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                        <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['name']; ?></td>
                            <td><?php echo $order['email']; ?></td>
                            <td><?php echo $order['phone']; ?></td>
                            <td><?php echo $order['product']; ?></td>
                            <td><small><?php echo substr($order['time'],0,16); ?></small></td>
                            <td><a href="./pages/view-order/?AreaID=<?php echo $order['id']?>" class="btn">View</a></td>
                        </tr>
                        <?php endforeach; ?>
                    
                    </table>
                </div>
                <div class="pink-breadcrumb">Latest Testimonials</div>
                <div class="grid-4">
                    
                    <?php require '../server/get_testimonial.php'; ?> 
                    <?php foreach($testimonials as $testimonial): ?>   
                    <p class="message">
                        <small><?php echo $testimonial['name']; ?></small>
                        <small><?php echo $testimonial['body']; ?></small>
                        <small><?php echo substr($testimonial['time'],0,16); ?></small>
                        <small><a href="mailto:<?php echo $testimonial['email']; ?>" class="btn">Reply</a></small>
                    </p>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    </main>                        
    <script src="../js/font_awesome_main.js"></script>
</body>
</html>