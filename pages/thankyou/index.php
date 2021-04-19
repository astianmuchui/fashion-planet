<?php
     function resetFull(){
        header("Location: ../../");
    }
    session_start();

   

    require "../../server/database.php";
    if(isset($_POST['post'])){

        $message = $_POST['testimonial'];
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];

        $query = "INSERT INTO testimonials(`name`,`email`,`body`) VALUES('$name','$email','$message')";
        $action = mysqli_query($conn,$query);
        if($action){
            resetFull();
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/uni.css">
    <title>Thank you !!!</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
    <main>
        <div class="container">
            <h1 class="emphatic">Thank you for ordering,<?php echo $_SESSION['name'];?> We'll get back to you soon</h1> 
        </div>
        <div class="form-container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label>Please share a thought about our services</label>
            <textarea name="testimonial" id="" cols="30" rows="10" required></textarea>
            <input type="submit" name="post" value="Post" class="red-btn">
        </form>
        </div>
    </main>
<?php include '../../includes/footer.html';?>
</body>
</html>