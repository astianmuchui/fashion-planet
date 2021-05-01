<?php
    require '../../../server/database.php';
    global $conn,$order;
    $retreived = $order['product'];
    $query = "SELECT * FROM products WHERE product_name = '$retreived'";
    $result = mysqli_query($conn,$query);
    $product = mysqli_fetch_assoc($result);
    #check if that product actually exists.
    if($product == false){
        echo '<h4 class="emphatic">product was deleted </h4>';
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    $img_URL = "../../products/".$product['product_image'];
    
        
?>