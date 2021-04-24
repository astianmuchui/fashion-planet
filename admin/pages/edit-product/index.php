<?php
    // Get ID
    $ROOT_URL = "../my-products/";
    function redirect(){
        global $ROOT_URL;
        header("Location: ../my-products/");
    }
    $passcode = "kamankura1";
    $errors = array();
    function UpdateProduct($name,$image,$price,$status,$category,$info,$password){
        $PRODUCTID = $_GET['id'];
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
                                $queries = array("UPDATE `products` SET `product_name` = '$name' WHERE `products`.`product_id`=$PRODUCTID","UPDATE `products` SET `product_image` = '$filename' WHERE `products`.`product_id`=$PRODUCTID","UPDATE `products` SET `price` = '$price' WHERE `products`.`product_id`=$PRODUCTID","UPDATE `products` SET `availability` = '$status' WHERE `products`.`product_id`=$PRODUCTID","UPDATE `products` SET `category` = '$category' WHERE `products`.`product_id`=$PRODUCTID","UPDATE `products` SET `description` = '$info' WHERE `products`.`product_id`=$PRODUCTID");
                                
                                foreach($queries as $query):
                                $action = mysqli_query($conn,$query); 
                            endforeach; 
                                if($action){
                                    redirect();
                                }else{
                                    array_push($errors ,'Failed');
                                    echo 'Failed to add product';
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


    if(isset($_GET['id'])){
        $PRODUCTID = $_GET['id'];
        require '../config.php';
        
        $query = "SELECT * FROM products WHERE product_id = $PRODUCTID";
        $result = mysqli_query($conn,$query);
        $product = mysqli_fetch_assoc($result);
        if($product){
            //Id is correct
        }else{
            redirect();
        }
        mysqli_free_result($result);
   
        mysqli_close($conn);
   
        if(isset($_POST['update'])){
            
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $price = $_POST['price'];
        $status = $_POST['availability'];
        $category = $_POST['category'];
        $password = $_POST['pass'];
        $info = $_POST['info'];
        UpdateProduct($name,$image,$price,$status,$category,$info,$password);
    
        }
    }else{
        redirect();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?php echo $product['product_name'];?></title>
</head>
<body>
    <?php include '../../includes/header.html'; ?>
<main>

        <div class="form-container">
                <form action="./index.php?id=<?php echo $PRODUCTID;?>" method="post" enctype="multipart/form-data">
                    <div class="form-grp">
                    <input type="text" name="name" id=""  value="<?php echo $product['product_name']; ?>" placeholder="Product Name" autocomplete="off"> 
                    <input type="file" name="image" id=""  placeholder="Product Image"  autocomplete="off" required>
                    <input type="number" name="price" id="" value="<?php echo $product['price']; ?>" placeholder="price" autocomplete="off">
                    
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
                    <textarea name="info" placeholder="<?php echo $product['description']; ?>" value=""  id="" cols="30" rows="10" autocomplete="off"></textarea>
                <input type="submit" value="update" class="wide-btn"  name="update">
                </div>
                
            </form>
        </div>

    </main>
</body>
</html>