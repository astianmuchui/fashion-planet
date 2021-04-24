<?php
    
    $errors = array();

    function post($title,$image,$content,$author,$password){
        global $errors,$conn;
        if(empty($title)){
            array_push($errors,"Please Add The title");
        }
        if(empty($image)){
            array_push($errors,"Please post an Image");
        }
        if(empty($content)){
            array_push($errors,"Please add some content");
        }
        if(empty($author)){
            array_push($errors,"Please Write the author of this post");
        }
        if(count($errors) == 0){
            if(!empty($image)){
                $folder = '../../posts/';
                $filename = basename($image);
                $filepath = $folder.$filename;
                $fileExtension = pathinfo($filepath,PATHINFO_EXTENSION);
                $allowedFormats = array("jpg","jpeg","png","webp");
                $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $tmp_name = $_FILES['image']['tmp_name'];
                if(in_array($fileExtension,$allowedFormats)){
                       if(move_uploaded_file($tmp_name,$filepath)){
                            include '../config.php';
                            if($password == "kamankura1"){
                                $query = "INSERT INTO posts(`title`,`author`,`image`,`content`) VALUES('$title','$author','$image','$content')";
                            $action = mysqli_query($conn,$query);
                            if($action){
                                echo "Posted";
                                }else{
                                   echo "Not posted";
                        }
                            }
                           
                    } else{
                        echo "There was a problem handling the image";
                 }

                }else{
                    echo 'Invalid file format';
                }
            }else{
                echo "Image required";
            }
        }else{
            print_r($errors);
            return false;
        }
    }

    if(isset($_POST['submit'])){
        $title = $_POST['post_title'];
        $content = $_POST['post_content'];
        $author = $_POST['post_author'];
        $password = $_POST['password'];
        $image = $_FILES['image']['name'];
        post($title,$image,$content,$author,$password);
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/blog_add.css">
    <title>Admin | Add Post</title>
</head>
<body>

<?php include '../../includes/header.html'; ?>
    

    <main>
        
        <section>      
            <form action="./index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <input type="text" name="post_title" required id="" placeholder="Title">
            <input type="text" name="post_author" id="" placeholder="Author" required>
            <input type="file" name="image" id="" required>
            <input type="password" name="password" id="" required placeholder="Password">
            </div>
            <textarea name="post_content"  placeholder="Write something down" required id="" cols="30" rows="10"></textarea> <br>
             <br>
            <input type="submit" name="submit" value="+ Add post"  class="btn">
        </form>
        </section>
    </main>    

</body>
</html>