<?php
    if(isset($_GET['id'])){
        require '../../server/database.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM posts WHERE id= $id";
        $result = mysqli_query($conn,$query);
        $post = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
    }else{
        header("Location: ../blog");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/view.post.css">
    <title>View post</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
    <?php
        $img_url= "../../admin/posts/".$post['image'];

    ?>
    <div class="container">
    <div class="post">
        <img src="<?php echo $img_url; ?>" alt="" width="90%" height="40%">
        <p><?php echo $post['content']; ?></p>
    </div>
    </div>
    
</body>
</html>