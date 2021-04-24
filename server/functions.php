<?php
            require '../../../server/database.php';
            global $conn,$order;
            $retreived = $order['product'];
            $query = "SELECT * FROM products WHERE product_name = '$retreived'";
            $result = mysqli_query($conn,$query);
            $product = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_close($conn);
            $img_URL = "../../products/".$product['product_image'];
            
        
?>