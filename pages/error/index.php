<?php
    session_start();
    if(isset($_GET['error_id'])){
        $error_message = "";
        if($_GET['error_id'] == "725"){
            $error_message = "The email ".$_SESSION['subscriber']." is Already registered ,please try another one";
        }
    }else{
        header("Location: ../../");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/uni.css">
    <title>Error</title>
</head>
<body>
    <?php require '../../includes/header.html'; ?> 
    <main>
        <div class="container">
            <h1 class="emphatic"> <?php echo $error_message;?> </h1> 
        </div>

    </main>
    <?php include '../../includes/footer.html'; ?>
</body>
</html>
