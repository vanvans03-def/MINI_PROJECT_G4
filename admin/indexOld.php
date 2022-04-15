<?php

session_start();

require_once "config/db.php";

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM product WHERE product_id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted succesfully";
        header("refresh:1; url=index.php");
    }
}
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
} elseif ($_SESSION['type'] == '0') {
    header("location: ../store.php");
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/js/bootstrap.js">

    <style>
        .currSign:before {
            content: '฿';
        }
    </style>

</head>

<body>


    <li class="my-nav-item ">
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="productname" class="col-form-label">Product Name:</label>
                                <input type="text" required class="form-control" name="productname">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="col-form-label">Desc</label>
                                <textarea type="text" style="height:100px;" required class="form-control" name="desc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="col-form-label">Rom</label>
                                <input type="text" required class="form-control currency" name="rom">
                            </div>


                            <div class="mb-3">
                                <label for="quantity" class="col-form-label">Quantity:</label>
                                <input type="number" required class="form-control" name="quantity">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="category_id">Category_id</label>
                                </div>
                                <?php
                                $stmt = $conn->query("SELECT * FROM product ");
                                $stmt->execute();
                                $products = $stmt->fetchAll();
                                $img = ("SELECT * FROM product img");
                                if (!$products) {
                                    echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                                } else {

                                ?>
                                    <select class="custom-select col-form-label " id="category_id" name="category_id">
                                        <option selected>Choose...</option>
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
                        <?php  } ?>


                        <div class="mb-3">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="text" required class="form-control currency" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="col-form-label">Image:</label>
                            <input type="file" required class="form-control" id="imgInput" name="img">
                            <img loading="lazy" width="100%" id="previewImg" alt="">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1>CRUD Dashboard </h1>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" data-bs-whatever="@mdo">Add Product</button>
                </div>
            </div>
            <hr>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    //header("refresh:1; url=index.php");

                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                  
                    ?>
                </div>
            <?php } ?>

            <table class="table">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Productname</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Rom</th>

                        <th scope="col">Quantity</th>
                        <th scope="col">Category_id</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $conn->query("SELECT * FROM product");
                    $stmt->execute();
                    $products = $stmt->fetchAll();
                    $img = ("SELECT * FROM product img");



                    if (!$products) {
                        echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                    } else {
                        foreach ($products as $product) {


                    ?>






                            <tr>
                                <th scope="row"><?php echo $product['product_id']; ?></th>
                                <td><?php echo $product['name']; ?></td>
                                <td><?php echo $product['descrip']; ?></td>
                                <td><?php echo $product['rom']; ?></td>
                                <td><?php echo $product['quantity']; ?></td>
                                <td><?php echo $product['category_id']; ?>
                                    <span>
                                        (<?php
                                            $idcate = $product['category_id'];
                                            $stmt = $conn->query("SELECT * FROM `product_category` WHERE `category_id` = $idcate");
                                            $stmt->execute();
                                            $data = $stmt->fetch();
                                            echo $data['name'];
                                            ?>)
                                    </span>
                                </td>


                                <td class="currency"><?php echo $product['price']; ?></td>
                                <td width="250px"><img class="rounded" width="100%" src="uploads/<?php echo $product['img']; ?>" alt=""></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $product['product_id']; ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $product['product_id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                    <?php }
                    } ?>


                </tbody>
            </table>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
        <script>
            let x = document.querySelectorAll(".currency");
            for (let i = 0, len = x.length; i < len; i++) {
                let num = Number(x[i].innerHTML)
                    .toLocaleString('en');
                x[i].innerHTML = num;
                x[i].classList.add("currSign");
            }
        </script>
</body>

</html>