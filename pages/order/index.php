<?php


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
                <img src="../../images/pexels-melvin-buezo-2529148.jpg" alt="">
            </div>
            <div class="details">
                <span class="emphatic">Product name : <span class="ans">Nike shoes</span></span>
                
                <span class="emphatic">Price : <span class="ans">$300</span></span>
                
                <span class="emphatic">Availability : <span class="ans">Available</span></span>
                <small class="desc">
                    <div class="emphatic">
                        Details :
                    </div>   
                    Available in green,red,pink and white <br>
                    In big and small sizes
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
                <input type="text" name="" placeholder="size" id="">
                </div>
                <div class="big-grp">
                    <textarea name="" placeholder="Add more information" id="" cols="30" rows="10" autocomplete="off" required></textarea>
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