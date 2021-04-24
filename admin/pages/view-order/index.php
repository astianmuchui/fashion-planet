<?php
    #Get the database ID of the order
    require '../../../server/database.php';
    if(isset($_GET['AreaID'])){
        $id = $_GET['AreaID'];
        $query = "SELECT * FROM orders WHERE id=$id";
        $result = mysqli_query($conn,$query);
        $order = mysqli_fetch_assoc($result);
        if($order){
            #we passed    
        }else{
            header("Location: ../../");    
        }
        $num = $order['phone'];
        $url = "htpps://wa.me/254";
        $country_code = 254;
        $trim = substr($order['phone'],1);
        $final_URL = $url.$trim;
        mysqli_free_result($result);
        mysqli_close($conn);




    }else{
        header("Location: ../../");
    }
    #Get whatsapp Link of user

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/order.css">
    <title>Order by <?php echo $order['name']?></title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
    
    <main>
        <div class="container">
            <div class="image">
                <?php require '../../../server/functions.php'; ?>
                <img src="<?php echo $img_URL; ?>" alt="">
            </div>
            <div class="details">
                <span class="emphatic">Product name : <span class="ans"><?php echo $order['product']; ?></span></span>
                
                <span class="emphatic">Price : <span class="ans"><?php echo $order['cost']; ?></span></span>
                <span class="emphatic">County : <span class="ans"><?php echo $order['county']; ?></span></span>
                <span class="emphatic">Size : <span class="ans"><?php echo $order['size']; ?></span></span>
               
                <small class="desc">
                    <div class="emphatic">
                        Details :
                    </div>   
                    <?php echo $order['info']; ?>

                    
                </small>
                    <div class="desc">
                        <h3 class="emphatic">Contact Client</h3>
                    <span class="emphatic"> <a href="mailto: <?php echo $order['email'];?>" class="red-btn">Send Email</a></span>
                    <span class="emphatic"> <a href="tel:<?php echo $country_code.$trim; ?>" class="red-btn">Make Call</a></span>    
                    <span class="emphatic"> <a href="https://web.whatsapp.com/send?phone=<?php echo $country_code.$trim; ?>&text=hi <?php echo $order['name']; ?>2C&source&data&app_absent" class="red-btn">Whatsapp</a></span>
                    </div>
                <br>
                
            </div>
        </div>
    </main>


</body>
</html>