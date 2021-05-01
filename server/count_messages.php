<?php
    require '../server/database.php';
    $query = "SELECT * FROM messages";
    $result = mysqli_query($conn,$query);
    $messages = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    echo count($messages);
?>