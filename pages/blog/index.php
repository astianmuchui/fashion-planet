<?php
    require '../../server/database.php';
    $query = "SELECT * FROM posts ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/posts_custom.css">
    <title>Posts</title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
    <main class="showcase">
        <?php
            if(count($posts) == 0){
                echo '<div class="light">Oops no posts available yet</div>';
            }
        ?>
        <?php foreach($posts as $post): ?>
            <?php $URL_IMG_ = "../../admin/posts/".$post['image']; ?>
        <div class="post">
            <div class="img">
                <img src="<?php echo $URL_IMG_; ?>" alt="">
            </div>
            <div class="article">
                <h3><?php echo $post['title']; ?></h3>
                <article>
                    <?php $wrapped = wordwrap($post['content'],200,"\r\n") ?>
                    <?php echo $wrapped;?> <br>
                    <small><?php echo "by".$post['author']; ?></small> <br>
                    <small><?php echo "on".$post['created_at']; ?></small> <br>
                    <a href="../view-post/?id=<?php echo $post['id']; ?>" class="btn-white">View</a>
                </article>
            </div>
        </div>
        <br>
        <?php endforeach; ?>

    </main>
    <?php include '../../includes/footer.html'; ?>
</body>
</html>