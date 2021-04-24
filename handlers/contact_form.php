<?php

    function MakeContact($name,$email,$phone,$message){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        //Whatsapp link Generator
        $url = 'wa.me/254';
        $trim = substr($phone,1);
        $final = $url.$trim;
    }

?>