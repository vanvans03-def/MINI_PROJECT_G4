<?php 

    session_start();

    require_once "config/db.php";
    
    


    if (isset($_POST['update'])) {
        $orderid = $_POST['order_id'];
        $updatequan = $_POST['quantity'];
        $cartid = $_POST['cart_id'];
        $productprice = $_POST['price'];
        $sql = $conn->prepare("UPDATE `order_item` SET `quantity` = :quantity WHERE `order_id` = :order_id");
        $sql->bindParam(":quantity", $updatequan);
        $sql->bindParam(":order_id", $orderid);
        $sql->execute();

        if ($sql) {
            $sql = $conn->prepare("UPDATE `cart_item` SET `quantity` = :quantity WHERE `cart_id` = :cart_id");
            $sql->bindParam(":quantity", $updatequan);
            $sql->bindParam(":cart_id", $cartid);
            $sql->execute();
            if ($sql) {
                $total = $productprice * $updatequan;
                $sql = $conn->prepare("UPDATE `order_detail` SET `total` = :total WHERE `order_id` = :order_id");
                $sql->bindParam(":total", $total);
                $sql->bindParam(":order_id", $orderid);
                $sql->execute();
                $_SESSION['success'] = "Edit Product quantity successfully";
                header('location: order.php');
                header('Location: checkorder.php');
            }

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
        <form action="editorder.php" method="post" enctype="multipart/form-data">
            <?php
                if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT order_detail.`order_id`,order_detail.`total`,order_item.`quantity`,order_item.`order_id`,order_item.`cart_id`,cart_item.`cart_id`,cart_item.`product_id`,product.`product_id`,product.`name`,product.`descrip`,product.`rom`,product.`price`
                        FROM order_detail
                        JOIN order_item
                        ON order_detail.`order_id` =  order_item.`order_id`
                        JOIN cart_item
                        ON order_item.`cart_id` = cart_item.`cart_id`
                        JOIN product
                        ON cart_item.`product_id` = product.`product_id` WHERE cart_item.`cart_id` = '$id'");
                        $stmt->execute();
                        $data = $stmt->fetch();
                }
            ?>
                <div class="mb-3">
                    <label for="order_id" class="col-form-label">ID:</label>
                    <input type="text" readonly value="<?php echo $data['order_id']; ?>" required class="form-control" name="order_id" >
                
                  
                    <label for="name" class="col-form-label">Product Name:</label>
                    <input type="text" readonly value="<?php echo $data['name']; ?>" required class="form-control" name="name" >
                   <input type="hidden"  value="<?php echo $data['cart_id']; ?>"   name="cart_id" >
                </div>
                <div class="mb-3">
                    <label for="descrip" class="col-form-label">Desc :</label>
                    <input   type="text"readonly  value="<?php echo $data['descrip']; ?>" required class="form-control" name="descrip">
                </div>
                <div class="mb-3">
                    <label for="rom" class="col-form-label">Rom:</label>
                    <input type="number" readonly value="<?php echo $data['rom']; ?>" required class="form-control" name="rom">
                </div>
                <input   type="hidden"  value="<?php echo $data['price']; ?>" required class="form-control" name="price">
                
                <div class="mb-3">
                    <label for="quantity" class="col-form-label">quantity:</label>
                    <input  type="number" value="<?php echo $data['quantity']; ?>" required class="form-control" name="quantity">
                </div>

               
               
                <div class="mb-3">
                    <label for="total" class="col-form-label">price:</label>
                    <input type="text" readonly value="<?php echo "฿" . number_format( $data['total'], 2,'.',); ?>" required class="form-control" name="total">
                </div>
                
                <hr>
                <input type="button" class="btn btn-secondary" onclick="history.back()"  value="Go Back">
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