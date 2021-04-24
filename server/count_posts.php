<?php
    require '../server/database.php';
    $query = "SELECT * FROM posts";
    $result = mysqli_query($conn,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    echo count($posts);
?>