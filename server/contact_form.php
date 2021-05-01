<?php
    require './server/database.php';        
    $name = mysqli_real_escape_string($conn,trim($_POST['name']));
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $phone  = mysqli_real_escape_string($conn,trim($_POST['phone']));
    $message  = mysqli_real_escape_string($conn,trim($_POST['message']));
    //Generate whatsapp link
    $trimmed = substr($phone,1);
    $link = "htpp://wa.me/254";
    $full = $link.$trimmed;
    $query = "INSERT INTO messages (`name`,`email`,`phone`,`whatsapp`,`message`) VALUES ('$name','$email','$phone','$full','$message')";
    $action = mysqli_query($conn,$query);
    $admin = "Admin";
    $admin_mail = "jkamanx@gmail.com";
    $body = '
    <div class="container" style="background-color: #f5f5f5;   height: max-content; margin-bottom: 2%; display: flex; flex-direction: column; align-content: center; justify-items: center; justify-items: center; margin-top: 1%;"  >
    <header style="background-color: #ee5955; width: 100%; height: 30px; " >
        <div class="logo"><img src="../images/logo.png" height="25" width="86" alt=""></div>
    </header>
    <p>
        <h3 style="color: #ee5955; margin-left: 13px; font-family: Arial, Helvetica, sans-serif;">Hi there Admin You have a message from '.$name.' , '.$email.'</h3>
        <p style=" margin-left: 10px; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
        '.$message.'
        </p>
    </p>
    <br>
</div>
    ';
    $subject = "New message alert !";
    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " .$name. "<".$email.">". "\r\n";
    if($action){
        $send_mail = mail($admin_mail,$subject,$body,$headers);
        if($send_mail == true){
            //We passed            
        }else{
            header("Location: ./?not sent");
        }
        
    }       
?>
