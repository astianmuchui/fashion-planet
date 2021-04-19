<?php
    session_start();        
    if(isset($_GET['id'])){
        require '../../server/database.php';
        
        if(isset($_GET['auto'])){
            $key = $_GET['auto'];
        }
        $URL_ID = $_GET['id']/$key;
        
        $query = "SELECT * FROM products WHERE products.product_id = $URL_ID";
        $result = mysqli_query($conn,$query);
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
        if($product){
            //
        }else{
            // header("Location: ../shop");
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

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header("Location: ../thankyou/");
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
                <!-- <input type="text" name="location" id="" placeholder="County" autocomplete="off" required> -->
                <select name="location" required>
                    <option value="">Select County</option>
                    <option value="mombasa">Mombasa</option>
                    <option value="mombasa">Kwale</option>
                    <option value="kilifi">Kilifi</option>
                    <option value="Tana river">Tana river</option>
                    <option value="Lamu">Lamu</option>
                    <option value="Taita">Taita taveta</option>
                    <option value="Garrisa">Garissa</option>
                    <option value="Wajir">Wajir</option>
                    <option value="Mandera">Mandera</option>
                    <option value="Marsabit">Marsabit</option>
                    <option value="Isiolo">Isiolo</option>
                    <option value="Meru">Meru</option>
                    <option value="Tharaka nithi">Tharaka nithi</option>
                    <option value="Embu">Embu</option>
                    <option value="kitui">Kitui</option>
                    <option value="machakos">Machakos</option>
                    <option value="makueni">Makueni</option>
                    <option value="Nyandarua">Nyandarua</option>
                    <option value="Nyeri">Nyeri</option>
                    <option value="Kirinyaga">Kirinyaga</option>
                    <option value="Muranga">Muranga</option>
                    <option value="Kiambu">Kiambu</option>
                    <option value="Turkana">Turkana</option>
                    <option value="West pokot">West pokot</option>
                    <option value="Samburu">Samburu</option>
                    <option value="Trans nzoia">Trans nzoia</option>
                    <option value="Uasin gishu">Uasin gishu</option>
                    <option value="Elgeyo marakwet">Elgeyo marakwet</option>
                    <option value="Nandi">Nandi</option>
                    <option value="Baringo">Baringo</option>
                    <option value="Laikipia">Laikipia</option>
                    <option value="Nakuru">Nakuru</option>
                    <option value="Narok">Narok</option>
                    <option value="Kajiado">Kajiado</option>
                    <option value="Kericho">Kericho</option>
                    <option value="Bomet">Bomet</option>
                    <option value="Kakamega">Kakamega</option>
                    <option value="Vihiga">Vihiga</option>
                    <option value="Bungoma">Bungoma</option>
                    <option value="Busia">Busia</option>
                    <option value="Siaya">Siaya</option>
                    <option value="kisumu">Kisumu</option>
                    <option value="Homabay">Homabay</option>
                    <option value="Migori">Migori</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Nyamira">Nyamira</option>
                    <option value="Nairobi">Nairobi</option>
                    </select>
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