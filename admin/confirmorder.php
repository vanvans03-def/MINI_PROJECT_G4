<?php

session_start();

require_once "config/db.php";
if (isset($_GET['UnConfrim'])) {
    $payid = $_GET['UnConfrim'];
    $status = "การชำระเงินถูกปฏิเสธ";
    $sql = $conn->prepare("UPDATE `payment_details` SET `status` = :status WHERE `payment_id` = :payment_id");
    $sql->bindParam(":status", $status);
    $sql->bindParam(":payment_id", $payid);
  
    $sql->execute();

    if ($sql) {
     
        echo "<script>alert('ยืนยันการชำระเงินเรียบร้อย');</script>";
        $_SESSION['success'] = "Data has been deleted succesfully";
        header("refresh:1; url=confirmorder.php");
    }


}


if (isset($_GET['comfirmOrder'])) {
    $payid = $_GET['comfirmOrder'];
    $status = "ชำระเงินเรียบร้อย";
    $sql = $conn->prepare("UPDATE `payment_details` SET `status` = :status WHERE `payment_id` = :payment_id");
    $sql->bindParam(":status", $status);
    $sql->bindParam(":payment_id", $payid);
    $sql->execute();

    if ($sql) {
     
        //edit stock in product table

        $stmt = $conn->query("SELECT order_detail.`payment_id`,order_item.`order_id`,order_item.`cart_id`,order_item.`quantity`,cart_item.`product_id`,product.`quantity`
        FROM order_detail
        JOIN payment_details
        ON order_detail.`payment_id` = $payid
        JOIN order_item
        ON order_detail.`order_id` = order_item.`order_id`
        JOIN cart_item
        ON order_item.`cart_id` = cart_item.`cart_id`
        JOIN product
        ON cart_item.`product_id` = product.`product_id` ");
        $stmt->execute();
        $orders = $stmt->fetch();
     
        if($orders){

   
        $quntityCon = $orders['quantity'];
        $product_id = $orders['product_id'];
        $cartid = $orders['cart_id'];

        //get Stock
        $pdstmt = $conn->query("SELECT * FROM `cart_item` WHERE `cart_id` = '$cartid' ");
        $pdstmt->execute();
        $data = $pdstmt->fetch();
        if($data){
           
        $stock = $orders['quantity'];
        if($stock > 0 ){
        $UpdateQuantity = $stock - $data['quantity'];;
       if($UpdateQuantity > 0){
        $sql = $conn->prepare("UPDATE `product` SET `quantity` = :quantity WHERE `product_id` = :product_id");
        $sql->bindParam(":quantity", $UpdateQuantity);
        $sql->bindParam(":product_id", $product_id);
        $sql->execute();

        if ($sql) {
     
            echo "<script>alert('ยืนยันการชำระเงินเรียบร้อย');</script>";
            $_SESSION['success'] = "Data has been deleted succesfully";
           
    

        }
    }else{
        echo "<script>alert('มีบางอย่างผิดพลาดเช่น สินค้าหมด');</script>";
    }        
       

}
    }else{
        echo "<script>alert('มีบางอย่างผิดพลาดเช่น สินค้าหมด');</script>";
        
       
    }

}


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
                <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
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
                                <h1>Confirm Order </h1>
                            </div>

                        </div>
                        <hr>
                        <table class="table">

                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">order_id</th>
                                    <th scope="col">User_id</th>
                                    <th scope="col">Provider</th>
                                    <th scope="col">PaymentID</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Img</th>
                                  

                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $statuscon = "ชำระเงินเรียบร้อย";
                                $stmt = $conn->query("SELECT payment_details.`payment_id` , payment_details.`order_id` , payment_details.`status`,payment_details.`provider`,payment_details.`img`,order_detail.`user_id`,order_detail.`total`
                                FROM payment_details 
                                JOIN order_detail ON payment_details.`order_id` = order_detail.`order_id` AND status !=  '$statuscon' ORDER BY order_id DESC");
                                $stmt->execute();
                                $datas = $stmt->fetchAll();


                                if (!$datas) {
                                    echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                                } else {
                                    foreach ($datas as $data) {




                                ?>


                                        <tr>
                                            <th scope="row"><?php echo $data['order_id']; ?></th>
                                            <td><?php echo $data['user_id']; ?></td>
                                            <td><?php echo $data['provider']; ?></td>
                                            <td class="text-danger fw-bold "><?php echo $data['payment_id']; ?></td>
                                            <td><?php echo "฿" . number_format( $data['total'], 2,'.',); ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td width="250px"><img class="rounded" width="100%" src="../paymentImg/<?php echo $data['img']; ?>" alt=""></td>
                                            <td> 

                                                <form action="showaddress.php" method="POST">
                                                <a  href="?comfirmOrder=<?php echo $data['payment_id']; ?>" class="btn btn-success">ยืนยัน</a>
                                                <a onclick="return confirm('Are you sure you want to change status?');" href="?UnConfrim=<?php echo $data['payment_id'];?>" class="btn btn-danger">ไม่ผ่าน</a>
                                                </form>

                                            </td>

                                        </tr>
                        <?php }  } ?>







                            </tbody>
                        </table>


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



            <li class="my-nav-item ">
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
            </li>
</body>

</html>