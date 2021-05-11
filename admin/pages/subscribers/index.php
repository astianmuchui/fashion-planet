<?php
    require '../config.php';
    $query = "SELECT * FROM receivers";
    $result = mysqli_query($conn,$query);
    $subscribers = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    // Remove subscriber
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/orders.css">
    <title>Subscribers</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
    <main>
        <table>
        <tr>
        <th></th>
        <th>Email</th>
        <th>Time registered</th>
        <th>Action</th>

        </tr>
        <?php $c = 0; $c++;  ?>
        <?php foreach($subscribers as $subscriber): ?>
        <tr>
        <td><?php echo $c; $c++; ?></td>
        <td><?php echo $subscriber['email']; ?></td>
        <td><?php echo substr($subscriber['time'],0,16); ?></td>
        <td><a href="delete.php?id=<?php echo $subscriber['id']; ?>" class="btn">Remove</a>
        </td>    
        </tr>

        <?php endforeach; ?>
        </table>
    </main>
</body>
</html>