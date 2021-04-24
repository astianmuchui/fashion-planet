<?php
    $ROOT_URL = "../my-products/";
    function redirect($ROOT_URL){
        global $ROOT_URL;
        header("Location $ROOT_URL");
    }
    if(isset($_GET['id'])){
        $PRODUCTID = $_GET['id'];
        require '../config.php';
        
        $query = "SELECT * FROM products WHERE product_id = $PRODUCTID";
        $result = mysqli_query($conn,$query);
        $product = mysqli_fetch_assoc($result);
        if($product){
            //Id is correct
        }else{
            redirect($ROOT_URL);
        }
        mysqli_free_result($result);
   
        mysqli_close($conn);

        if(isset($_POST['delete'])){
            require '../config.php';
            $query = "DELETE FROM `products` WHERE `products`.`product_id` = $PRODUCTID";
            $sql_action = mysqli_query($conn,$query);
            if($sql_action){
                echo "Deleted";
            }
        }
    }else{
        redirect($ROOT_URL);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/adm.css">
    <title>Delete</title>
</head>
<body>
    <?php include '../../includes/header.html';?>
    
    <main>
    <div class="message">Are you sure you want to delete <?php echo $product['product_name']; ?> ?
        <br>
        <br>
        <form action="./index.php?id=<?php echo $product['product_id']; ?>" method="post">
            <input type="submit" value="Delete" class="btn-light" name="delete">
        </form>
    </div>
    </main>
    
</body>
</html>