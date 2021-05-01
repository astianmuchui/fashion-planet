<?php
    session_start();
    //Trim

    if(strpos($_SESSION['subscriber'],"@gmail.com")){
        $numbers = array(0,1,2,3,4,5,6,7,8,9);
        
     $final =   str_replace("@gmail.com"," ",$_SESSION['subscriber']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/uni.css">
    <title>Thank you for subscribing</title>
</head>
<body>
    <?php require '../../includes/header.html'; ?> 
    <main>
        <div class="container">
            <h1 class="emphatic">Thank you for subscribing, <?php echo $final;?> We'll get back to you soon</h1> 
        </div>

    </main>
    <?php include '../../includes/footer.html'; ?>
</body>
</html>
