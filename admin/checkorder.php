<?php

session_start();

require_once "config/db.php";




if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM order_item WHERE order_id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {

        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted succesfully";
        header("refresh:1; url=checkorder.php");
    }
}
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if ($_SESSION['type'] != 1) {
    header("location: ../index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/js/bootstrap.js">

    <!-- Custom styles for this template-->
    <link href="sb-admin-2.min.css" rel="stylesheet">
    <style>
        .currSign:before {
            content: '฿';
        }
    </style>

</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Addmin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Heading -->
            <div class="sidebar-heading fs-6 text-light " style="padding-bottom:20px;">
                Product Function
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="" style="color: #C0C0C0;">CRUD Product</span></a>
            </li>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active" data-bs-toggle="modal" data-bs-target="#addproductModal" data-bs-whatever="@mdo">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Add Product Category</span></a>
            </li>
            <!-- add product modal -->
            <div class="modal fade" id="addproductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>

                        </div>


                        <div class="modal-body">
                            <form action="insert.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="cateID" class="col-form-label">Category ID:</label>
                                    <input type="number" required="" class="form-control" name="cateID">
                                </div>

                                <div class="mb-3">
                                    <label for="CateName" class="col-form-label">Category Name:</label>
                                    <input type="text" required="" class="form-control" name="CateName">
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="addcate" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- add cate modal -->
            <!-- edith cate modal -->

            <li class="nav-item active" data-bs-toggle="modal" data-bs-target="#editproductModal" data-bs-whatever="@mdo">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Edit Product Category</span></a>
            </li>

           

                        <div class="modal fade" id="editproductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        
                                    </div>
                                
                                
                                    <div class="modal-body">
                                        <form action="editcate.php" method="post" enctype="multipart/form-data">
                                             <div class="input-group mb-3">
                                               
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="category_id">Old Category_id</label>
                                                </div>
                                                <select class="custom-select col-form-label " id="category_id" name="category_id">
                                                    <option selected="">Choose...</option>
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
                                                <label for="CateID" class="col-form-label">New Category ID:</label>
                                                <input type="number" class="form-control" name="CateID">
                                            </div>
                                            <div class="mb-3">
                                                <label for="CateName" class="col-form-label">Category Name:</label>
                                                <input type="text" class="form-control" name="CateName">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="editeCate" class="btn btn-warning">Edit</button>
                                            <button onclick="return confirm('Are you sure you want to delete?');" type="submit" name="deleteCate" class="btn btn-danger">Delete</button>
                                   

                                            
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- edith cate modal -->

            <div class="sidebar-heading fs-6 text-light " style="padding-top:20px;">
                Order Function
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="checkorder.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Check Order</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="confirmorder.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Confirm Order</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="success.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;"> Order Success</span></a>
            </li>

            <div class="sidebar-heading fs-6 text-light " style="padding-top:20px;">
                Admin Function
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="edituser.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Apple ID</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="addAdmin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Add admin</span></a>
            </li>






        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="padding-top:50px;">



                <div class="container-fluid">


                    <div class="container-md-auto">

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

                        <div class="row">
                            <div class="col-md-6">
                                <h1>Check Order </h1>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end" style="height: 50px;">
                                <a href="checkorder.php" class="btn btn-success  ">ดูทั้งหมด</a>&nbsp;
                                <a href="?orderFilter=<?php echo "neworder" ?>" class="btn btn-primary  ">ออเดอร์ที่เข้ามาใหม่</a>&nbsp;
                                <a href="?orderFilter=<?php echo "oldorder" ?>" class="btn btn-secondary">ออเดอร์ที่เคยสั่ง</a>

                            </div>

                        </div>
                        <hr>

                        <table class="table">

                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">User</th>
                                    <th scope="col">PaymentID</th>
                                    <th scope="col">CartID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>

                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>


                            <?php
                            if (isset($_GET['orderFilter'])) {
                                $order = $_GET['orderFilter'];
                                if ($order == "neworder") {



                            ?>
                                    <tbody>
                                        <?php
                                        $status = "ชำระเงินเรียบร้อย";
                                        $stmt = $conn->query("SELECT order_detail.`id`,order_detail.`order_id`,order_detail.`user_id`,order_detail.`payment_id`,order_detail.`total`,order_item.`order_id`,order_item.`cart_id`,order_item.`quantity`,cart_item.`cart_id`,cart_item.`user_id`,cart_item.`product_id`,cart_item.`quantity`,product.`name`,product.`descrip`,product.`rom`,payment_details.`status`
                                        FROM order_detail 
                                        JOIN order_item
                                        ON order_detail.`order_id` = order_item.`order_id` 
                                        JOIN cart_item 
                                        ON order_item.`cart_id` = cart_item.`cart_id`
                                        JOIN payment_details
                                        ON order_detail.`payment_id` = payment_details.`payment_id`
                                        JOIN product
                                        ON cart_item.`product_id` = product.`product_id` AND `status` !=   '$status'  ORDER BY id DESC ;");

                                        $stmt->execute();
                                        $orders = $stmt->fetchAll();

                                        if (!$orders) {
                                            echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                                        } else {
                                            foreach ($orders as $order) {

                                        ?>


                                                <tr>
                                                    <th scope="row"><?php echo $order['order_id']; ?></th>
                                                    <td><?php echo $order['user_id']; ?></td>
                                                    <td><?php echo $order['payment_id']; ?></td>
                                                    <td><?php echo $order['cart_id']; ?></td>

                                                    <td><?php echo $order['name']." ";
                                                    
                                                if($order['rom'] > 0 && $order['rom'] != 1024 ){ 
                                                    echo "ความจุ"." ".$order['rom']." "."GB"." ".$order['descrip'];; 
                                                    }elseif($order['rom'] == 1024){
                                                        echo "ความจุ"." "."1"." "."TB"." ".$order['descrip'];;
                                                    } ?></td>                                        


                                                    <td><?php echo $order['quantity']; ?></td>
                                                    <td><?php echo "฿" . number_format($order['total'], 2); ?> </td>
                                                    <td><?php echo $order['status']; ?></td>
                                                    <td>
                                               

                                                        <a href="editorder.php?id=<?php echo $order['cart_id']; ?>" class="btn btn-warning">แก้ไขออเดอร์</a>
                                                        <a onclick="return confirm('Are you sure you want to delete?');"
                                                        href="?delete=<?php echo $order['order_id']; ?>" class="btn btn-danger">ยกเลิกออเดอร์</a>
                                               

                                                    </td>

                                                </tr>






                                    </tbody>
                    





                    <?php } ?>

                

                    <?php  }
                             }
                             if ($order == "oldorder") {    
                                ?>
                
                <tbody>
                    <?php
                                        $status = "ชำระเงินเรียบร้อย";
                                        $stmt = $conn->query("SELECT order_detail.`id`,order_detail.`order_id`,order_detail.`user_id`,order_detail.`payment_id`,order_detail.`total`,order_item.`order_id`,order_item.`cart_id`,order_item.`quantity`,cart_item.`cart_id`,cart_item.`user_id`,cart_item.`product_id`,cart_item.`quantity`,product.`name`,product.`descrip`,product.`rom`,payment_details.`status` FROM order_detail 
                                   JOIN order_item
                                   ON order_detail.`order_id` = order_item.`order_id` 
                                   JOIN cart_item 
                                   ON order_item.`cart_id` = cart_item.`cart_id`
                                   JOIN payment_details
                                   ON order_detail.`payment_id` = payment_details.`payment_id`
                                   JOIN product
                                   ON cart_item.`product_id` = product.`product_id` AND `status` =  '$status'  ORDER BY id DESC ;");

                                        $stmt->execute();
                                        $orders = $stmt->fetchAll();



                                        if (!$orders) {
                                            echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                                        } else {
                                            foreach ($orders as $order) {




                    ?>


                            <tr>
                                <th scope="row"><?php echo $order['order_id']; ?></th>
                                <td><?php echo $order['user_id']; ?></td>
                                <td><?php echo $order['payment_id']; ?></td>
                                <td><?php echo $order['cart_id']; ?></td>

                                <td><?php echo $order['name']." ";
                                                if($order['rom'] > 0 && $order['rom'] != 1024 ){ 
                                                    echo "ความจุ"." ".$order['rom']." "."GB"." ".$order['descrip'];; 
                                                    }elseif($order['rom'] == 1024){
                                                        echo "ความจุ"." "."1"." "."TB"." ".$order['descrip'];;
                                                    } ?></td>    


                                <td><?php echo $order['quantity']; ?></td>
                                <td><?php echo "฿" . number_format($order['total'], 2); ?> </td>
                                <td><?php echo $order['status']; ?></td>
                           

                            </tr>



                    <?php }
                                        } ?>


                </tbody>
                </table>




            <?php
                }
            ?>



        <?php

                            } else {
        ?>

            <tbody>
                <?php
                                 $status = "ชำระเงินเรียบร้อย";
                                $stmt = $conn->query("SELECT order_detail.`id`,order_detail.`order_id`,order_detail.`user_id`,order_detail.`payment_id`,order_detail.`total`,order_item.`order_id`,order_item.`cart_id`,order_item.`quantity`,cart_item.`cart_id`,cart_item.`user_id`,cart_item.`product_id`,cart_item.`quantity`,product.`name`,product.`descrip`,product.`rom`,payment_details.`status` FROM order_detail 
                                JOIN order_item
                                ON order_detail.`order_id` = order_item.`order_id` 
                                JOIN cart_item 
                                ON order_item.`cart_id` = cart_item.`cart_id`
                                JOIN payment_details
                                ON order_detail.`payment_id` = payment_details.`payment_id`
                                JOIN product
                                ON cart_item.`product_id` = product.`product_id`ORDER BY id DESC;");

                                $stmt->execute();
                                $orders = $stmt->fetchAll();



                                if (!$orders) {
                                    echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                                } else {
                                    foreach ($orders as $order) {




                ?>


                        <tr>
                            <th scope="row"><?php echo $order['order_id']; ?></th>
                            <td><?php echo $order['user_id']; ?></td>
                            <td><?php echo $order['payment_id']; ?></td>
                            <td><?php echo $order['cart_id']; ?></td>

                            <td><?php echo $order['name']." ";
                                                if($order['rom'] > 0 && $order['rom'] != 1024 ){ 
                                                    echo "ความจุ"." ".$order['rom']." "."GB"." ".$order['descrip'];; 
                                                    }elseif($order['rom'] == 1024){
                                                        echo "ความจุ"." "."1"." "."TB"." ".$order['descrip'];;
                                                    } ?></td>    



                            <td><?php echo $order['quantity']; ?></td>
                            <td><?php echo "฿" . number_format($order['total'], 2); ?> </td>
                            <td><?php echo $order['status']; ?></td>
                            <td>
                                <?php if($order['status'] != $status ){?>
                                <form action="editorder.php" method="POST">

                                <a href="editorder.php?id=<?php echo $order['cart_id']; ?>" class="btn btn-warning">แก้ไขออเดอร์</a>
                                    <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $order['order_id']; ?>" class="btn btn-danger">ยกเลิกออเดอร์</a>
                                </form>



                                <?php } ?>

                            </td>

                        </tr>
                <?php }
                                } ?>


            </tbody>
            </table>
        <?php
                            }
        ?>






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

                    </div>

                </div>
            </div>




            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>