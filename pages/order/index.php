<?php
        
    if(isset($_GET['id'])){
        require '../../server/database.php';
        $URL_ID = $_GET['id'];
        $query = "SELECT * FROM products WHERE products.product_id = $URL_ID";
        $result = mysqli_query($conn,$query);
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
        if($product){
            //
        }else{
            header("Location: ../shop");
        }
        $img_URL = "../../admin/products/".$product['product_image'];
    }else{
        header("Location: ../shop");
    }



    //Make order algorithm

    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $quantity = $_POST['quantity'];
        $location = $_POST['location'];
        $size = $_POST['size'];
        $info = $_POST['info'];
        $productName = $product['product_name'];
        $productCost = $product['price'];
        include '../../server/database.php';
        $query = "INSERT INTO orders (`product`,`cost`,`name`,`email`,`phone`,`quantity`,`county`,`size`,`info`) VALUES('$productName','$productCost','$name','$email','$phone','$quantity','$location','$size','$info')";
        $action = mysqli_query($conn,$query);
        if($action){
            echo 'Order placed';
        }else{
            echo 'Order not placed';

        }    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/order.css">
    <title>Place Order</title>
</head>
<body>
    <?php include '../../includes/header.html';?>


    <main>
        <div class="container">
            <div class="image">
                <img src="<?php echo $img_URL;?>" alt="">
            </div>
            <div class="details">
                <span class="emphatic">Product name : <span class="ans"><?php echo $product['product_name']; ?></span></span>
                
                <span class="emphatic">Price : <span class="ans"><?php echo $product['price']; ?></span></span>
                
                <span class="emphatic">Availability : <span class="ans"><?php echo $product['availability'];?></span></span>
                <small class="desc">
                    <div class="emphatic">
                        Details :
                    </div>   
                    <?php echo $product['description']; ?>
                </small>
                <br>
                <div class="form-container">
                <form action="#" method="post">
                    <div class="form-grp">
                    <input type="text" name="name" id="" placeholder="Enter your name" autocomplete="off" required> 
                    <input type="email" name="email" id="" placeholder="Enter your Email" autocomplete="off" required>
                    </div>
                 <div class="form-grp">
                    <input type="number" name="phone" id="" required  autocomplete="off" placeholder="phone number (start with 07)"> 
                    <input type="number" name="quantity" id="" required  autocomplete="off"placeholder="Quantity">
                 </div>
                <div class="form-grp">
                <input type="text" name="location" id="" placeholder="County" autocomplete="off" required>
                <input type="text" name="size" placeholder="size" id="">
                </div>
                <div class="big-grp">
                    <textarea name="info" placeholder="Add more information" id="" cols="30" rows="10" autocomplete="off" required></textarea>
                <input type="submit" value="submit your order" class="wide-btn"  name="submit">
                </div>
                
            </form>
        </div>
                
            </div>
        </div>
    </main>

    <?php include '../../includes/footer.html';?>
</body>
</html>