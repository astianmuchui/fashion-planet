<?php
    require '../config.php';
    $query =  "SELECT * FROM orders ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $myorders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../../css/orders.css">
     <title>Orders</title>
 </head>
 <body>
     <?php include '../../includes/header.html'; ?>
     <br>
     <br>
     <main>
         <div class="pink-breadcrumb">
             <form action="#" method="post">
                 <input type="text" placeholder="search"  name="" id="" required >
                 <input type="submit" value="Search" class="white-btn">
             </form>
         </div>
         <table>
         <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Product</th>
            <th>Date</th>
            <th>Action</th>
            </tr>
            <?php $i = 0; $i++; ?>
            <?php foreach ($myorders as $order): ?>
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td><?php echo $order['name']; ?></td>
                <td><?php echo $order['email']; ?></td>
                <td><?php echo $order['phone']; ?></td>
                <td><?php echo $order['product']; ?></td>
                <td><small><?php echo substr($order['time'],0,16); ?></small></td>
                <td><a href="../view-order/?AreaID=<?php echo $order['id']?>" class="btn">View Order</a> 
                <a href="../generate-invoice/?AreaID=<?php echo $order['id']?>" target="_blank" class="btn">View Invoice</a> </td>
            </tr>
            <?php endforeach; ?>
         </table>
     </main>
 </body>
 </html>