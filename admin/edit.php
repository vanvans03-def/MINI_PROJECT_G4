<?php 

    session_start();

    require_once "config/db.php";
    
  


    if (isset($_POST['update'])) {
        $product_id = $_POST['product_id'];
        $name = $_POST['name'];
        $descrip = $_POST['descrip'];
        $rom = $_POST['rom'];
        
        $quantity = $_POST['quantity'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $img = $_FILES['img'];

        $img2 = $_POST['img2'];
        $upload = $_FILES['img']['name'];

        if ($upload != '') {
            $allow = array('jpg', 'jpeg', 'png');
            $extension = explode('.', $img['name']);
            $fileActExt = strtolower(end($extension));
            $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
            $filePath = 'uploads/'.$fileNew;

            if (in_array($fileActExt, $allow)) {
                if ($img['size'] > 0 && $img['error'] == 0) {
                   move_uploaded_file($img['tmp_name'], $filePath);
                }
            }

        } else {
            $fileNew = $img2;
        }

        $sql = $conn->prepare("UPDATE `product` SET `product_id` = :product_id, `name` = :name, `descrip` = :descrip,`rom` = :rom , `quantity` = :quantity,`category_id` = :category_id,`price` = :price, img = :img WHERE `product_id` = :product_id");
        $sql->bindParam(":product_id", $product_id);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":descrip", $descrip);
        $sql->bindParam(":rom", $rom);
        $sql->bindParam(":quantity", $quantity);
        $sql->bindParam(":category_id", $category_id);
        $sql->bindParam(":price", $price);
        $sql->bindParam(":img", $fileNew);
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "Data has been updated successfully";
            header("location: index.php");
        } else {
            $_SESSION['error'] = "Data has not been updated successfully";
            header("location: index.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data</h1>
        <hr>
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <?php
                if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM `product` WHERE `product_id` = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                }
            ?>
                <div class="mb-3">
                    <label for="product_id" class="col-form-label">ID:</label>
                    <input type="text" readonly value="<?php echo $data['product_id']; ?>" required class="form-control" name="product_id" >

                    <label for="name" class="col-form-label">Product Name:</label>
                    <input type="text" value="<?php echo $data['name']; ?>" required class="form-control" name="name" >
                    <input type="hidden" value="<?php echo $data['img']; ?>" required class="form-control" name="img2" >
                </div>
                <div class="mb-3">
                    <label for="descrip" class="col-form-label">Desc :</label>
                    <input   type="text" value="<?php echo $data['descrip']; ?>" required class="form-control" name="descrip">
                </div>
                <div class="mb-3">
                    <label for="rom" class="col-form-label">Rom:</label>
                    <input type="number" value="<?php echo $data['rom']; ?>" required class="form-control" name="rom">
                </div>

                
                <div class="mb-3">
                    <label for="quantity" class="col-form-label">quantity:</label>
                    <input  type="number" value="<?php echo $data['quantity']; ?>" required class="form-control" name="quantity">
                </div>

               


                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="category_id">Category_id</label>
                                                </div>

                                                    <select class="custom-select col-form-label " id="category_id" name="category_id" required>
                                                  
                                                <?php 
                                                
                                                
                                              
                                                $stmt = $conn->query("SELECT * FROM `product_category` WHERE `category_id`");
                                                $stmt->execute();
                                                $catedatas = $stmt->fetchAll();
                                                
                                                if (!$catedatas) {
                                                    echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                                                }else{

                                                foreach($catedatas as $catedata){
                                                 
                                            
                                                
                                                
                                                ?>
                                              
                                                    <option value="<?php   echo $catedata['category_id']; ?>">
                                                    <?php echo $catedata['name']?> (<?php   echo $catedata['category_id']; ?>)</option>
                                                 
                                              
                                                <?php   }}?>
                                                </select>

                </div>
               
                <div class="mb-3">
                    <label for="price" class="col-form-label">price:</label>
                    <input type="text" value="<?php echo  $data['price'];?>" required class="form-control" name="price">
                </div>
                <div class="mb-3">
                    <label for="img" class="col-form-label">Image:</label>
                    <input type="file" class="form-control" id="imgInput" name="img">
                    <img width="100%" src="uploads/<?php echo $data['img']; ?>" id="previewImg" alt="">
                </div>
                <hr>
                <a href="index.php" class="btn btn-secondary">Go Back</a>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
    </div>

    <script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file)
            }
        }

    </script>
</body>
</html>