<?php
    //Make subscription from anywhere in the website
    session_start();
      require './database.php';
    $_SESSION['subscriber'] = $subscribed_email = mysqli_real_escape_string($conn,trim($_POST['nws_email']));

    if(filter_var($subscribed_email, FILTER_VALIDATE_EMAIL)){
      $sql = "SELECT * FROM receivers WHERE email = '$subscribed_email'";
      $result = mysqli_query($conn,$query);
      if(mysqli_fetch_assoc($result) == false){
          $query = "INSERT INTO receivers (`email`) VALUES('$subscribed_email')";
          $action = mysqli_query($conn,$query);
      }else{
          header("Location: ./pages/error/?error_id=725");
      }
        if($action){
          $company_name = "I&j closet";
          $company_email = "i&jcloset@gmail.com";
          $headers = "MIME-Version: 1.0" ."\r\n";
          $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
          $headers .= "From: " .$company_name. "<".$subscribed_email.">". "\r\n";
          $subject = "Thankyou for subscribing";
          $body = '
            <P style="font-family= Arial, Helvetica , Sans-serif">
              Thank you '.$subscribed_email.' for subscribing to our newsletter.
            </p>

          ';
          mail($subscribed_email,$subject,$body,$headers);
            header("Location: ../pages/thank-you-for-subscribing/");
        }
    }
?>
