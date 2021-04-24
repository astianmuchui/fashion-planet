<?php
    require '../config.php';
    $query = "SELECT * FROM products ORDER BY product_id desc";
    $result = mysqli_query($conn,$query);
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/products.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <title>All products</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>

    <main class="showcase-area">
        <small class="pink-breadcrumb">
            All products
        </small>
        <table>
            <tr class="pink-breadcrumb">
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Time added</th>
                <th>Action</th>    
            </tr>
            <?php foreach ($products as $product): ?>
                <?php $PRODUCT_PATH = "../../products/".$product['product_image']; ?>
            <tr>
                <td><img src="<?php echo $PRODUCT_PATH;?>" alt=""></td>
                <td><?php echo $product['product_name'] ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['availability'];?></td>
                <td> <small><?php echo substr($product['time'],0,16); ?></small> </td>
                <td><a href="../edit-product/?id=<?php echo $product['product_id']; ?>" class="btn"> <i class="fas fa-pencil-alt"></i> Edit</a> <a href="../delete-product/?id=<?php echo $product['product_id'];?>" class="btn"> <i class="fas fa-trash-alt"></i> Delete</a> </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>

                <script src="../../../js/font_awesome_main.js"></script>
</body>
</html>