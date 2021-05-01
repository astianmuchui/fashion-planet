<?php
    session_start();
    require './server/database.php';
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
          <div class="container" style="background-color: #f5f5f5;   height: max-content; margin-bottom: 2%; display: flex; flex-direction: column; align-content: center; justify-items: center; justify-items: center; margin-top: 1%;"  >
              <header style="background-color: #ee5955; width: 100%; height: 30px; " >
                  <div class="logo"><img src="../images/logo.png" height="25" width="86" alt=""></div>
              </header>
              <p>
                  <h3 style="color: #ee5955; margin-left: 13px; font-family: Arial, Helvetica, sans-serif;">Hi there '.$subscribed_email.'</h3>

                  <small style="font-family: Arial, Helvetica, sans-serif; margin-left: 10px;" >From now on you will be receiving messages from us. If you do not recognize this action please.
                      <br> <br> <a href="#" style="text-decoration: none; margin-left: 10px; background-color: #ee5955; color: #f5f5f5; padding: 5px 10px; border-radius: 3px; font-family: Arial, Helvetica, sans-serif ;" >Unsubscribe</a></small>
              </p>
              <br>
          </div>
          ';
          mail($subscribed_email,$subject,$body,$headers);
            header("Location: ./pages/thank-you-for-subscribing/");
        }
    }
?>
