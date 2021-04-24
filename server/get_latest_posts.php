<?php
    require './server/database.php';
    $query = "SELECT * FROM posts ORDER BY id desc LIMIT 4";
    $result = mysqli_query($conn,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>