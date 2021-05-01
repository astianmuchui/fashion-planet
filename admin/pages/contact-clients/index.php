<?php

       if(isset($_POST['submit'])){
           require '../config.php';
        #Send email
        $subject = mysqli_real_escape_string($conn,$_POST['subject']);
        $password = "kamankura1";
        $pass_word = mysqli_real_escape_string($conn,$_POST['password']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);
        $from = "injcloset@gmail.com";
        $company_name = "I&J CLOSET";
        $headers = "From: ".$company_name.""."<".$from.">"."\r\n";
    
        $body = '
        <div class="container" style="background-color: #f5f5f5;   height: max-content; margin-bottom: 2%; display: flex; flex-direction: column; align-content: center; justify-items: center; justify-items: center; margin-top: 1%;"  >
            <header style="background-color: #ee5955; width: 100%; height: 30px; " >
                <div class="logo"><img src="../images/logo.png" height="25" width="86" alt=""></div>
            </header>
            <p>
                <h3 style="color: #ee5955; margin-left: 13px; font-family: Arial, Helvetica, sans-serif;">Hi there </h3>
                <p style=" margin-left: 10px; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
                '.$message.'
                </p>
                <small style="font-family: Arial, Helvetica, sans-serif; margin-left: 10px;" >If you wish to stop receiving emails from our site please 
                    <br> <br> <a href="#" style="text-decoration: none; margin-left: 10px; background-color: #ee5955; color: #f5f5f5; padding: 5px 10px; border-radius: 3px; font-family: Arial, Helvetica, sans-serif ;" >Unsubscribe</a></small>
            </p>
            <br>
        </div>
        ';
        if($pass_word == $password){
        $query = "SELECT * FROM receivers";
        $result = mysqli_query($conn,$query);
        $receivers = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
        foreach($receivers as $receiver):
        mail($receiver['email'],$subject,$body,$headers);
        set_time_limit(0);
        flush();
        endforeach;
        }
        
       }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/blog_add.css">

    <title>Contact clients</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
        <main>
        
        <section>      
            <form action="./index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <input type="text" name="subject" required id="" placeholder="Subject">
            
            
            <input type="password" name="password" id="" required placeholder="Password">
            </div>
            <textarea name="message"  placeholder="Write something down" required id="" cols="30" rows="10"></textarea> <br>
             <br>
            <input type="submit" name="submit" value="Send message"  class="btn">
        </form>
        </section>
    </main>    

</body>
</html>

