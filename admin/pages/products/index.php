<?php
    require '../config.php';
    $passcode = "kamankura1";
    $errors = array();
    function UploadProduct($name,$image,$price,$status,$category,$info,$password){
        global $passcode,$conn,$errors;        
        if(empty($name)){
            array_push($errors,"Name Required");
        }
        if(empty($price)){
            array_push($errors,"Add price");

        }
        if(empty($status)){
            array_push($errors,"Add the availability of the product");
        }
        if(empty($category)){
            array_push($errors,"Add category");
        }
        if(empty($info)){
            array_push($errors,"Add a short description of the product");
        }
        if(empty($image)){
            array_push($errors,"Image");
        }

        if(count($errors) == 0){
            if(!empty($image)){
                $folder = '../../products/';
                $filename = basename($image);
                $file_path = $folder.$filename;
                $extension  = pathinfo($file_path, PATHINFO_EXTENSION);
                $formats = array('jpg','jpeg','png','webp');
                $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $tmp_name = $_FILES['image']['tmp_name'];
                if(in_array($extension,$formats)){
                    if(move_uploaded_file($tmp_name,$file_path)){
            
                        if($passcode == $password){
                            include '../config.php';
                                $query = "INSERT INTO products (`product_name`,`product_image`,`price`,`availability`,`category`,`description`) VALUES('$name','$filename','$price','$status','$category','$info')";
                                $action = mysqli_query($conn,$query);  
                                if($action){
                                    echo 'Uploaded succesfully';
                                }else{
                                    echo 'Failed to add assignment';
                                    return false;
                                }
                            
                            }else{
                                echo 'Invalid password';    
                            }
                            

                        
                    }else{
                        echo 'Failed operation';
                    }
                }else{
                    array_push($errors,"Could not complete request");
                    echo 'Invalid file format';
                }
            }else{
                echo 'Document Required';
            }
        }else{
            print_r($errors);
            return false;
        }
    }


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $price = $_POST['price'];
        $status = $_POST['availability'];
        $category = $_POST['category'];
        $password = $_POST['pass'];
        $info = $_POST['info'];

        UploadProduct($name,$image,$price,$status,$category,$info,$password);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add product</title>
</head>
<body>
       <?php include '../../includes/header.html';?> 

    <main>
        <div class="bar">
            <h3> Add product</h3>
            <a href="#" class="red-btn">My products</a>
        </div>

        <div class="form-container">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                    <div class="form-grp">
                    <input type="text" name="name" id="" placeholder="Product Name" autocomplete="off" required> 
                    <input type="file" name="image" id="" placeholder="Product Image" autocomplete="off" required>
                    <input type="number" name="price" id="" placeholder="Price" autocomplete="off" required>
                    
                </div>
                 <div class="form-grp">
                    <select name="availability" id="" >
                        <option value="">Availability (SELECT HERE)</option>
                        <option value="available">Available</option>
                        <option value="unavailabe">Unavailable</option>
                    </select>
                    
                    <select name="category" id="" >
                        <option value="">Category</option>
                        <option value="makeup">Makeup</option>
                        <option value="clothing">Clothing</option>
                        <option value="accesories">Accesories</option>

                    </select>
                    
                    <input type="password" name="pass" id="" placeholder="Enter your password" autocomplete="off" required>

                </div>
                
                <div class="big-grp">
                    <textarea name="info" placeholder="Add more information" id="" cols="30" rows="10" autocomplete="off" required></textarea>
                <input type="submit" value="+ Add  product" class="wide-btn"  name="submit">
                </div>
                
            </form>
        </div>

    </main>
       
</body>
</html>