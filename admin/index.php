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
    }

    if($_SESSION['type'] != 1 ){
        header("location: ../index.php");
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
         <!-- Heading -->
         <div class="sidebar-heading fs-6 text-light "style="padding-bottom:20px;" >
                Product Function
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="" style="color: #C0C0C0;" >CRUD Product</span></a>
            </li>

     

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active"  data-bs-toggle="modal" data-bs-target="#addproductModal" data-bs-whatever="@mdo" >
                <a class="nav-link"  >
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

<li class="nav-item active"  data-bs-toggle="modal" data-bs-target="#editproductModal" data-bs-whatever="@mdo" >
                <a class="nav-link"  >
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
                                        <form action="edit.php" method="post" enctype="multipart/form-data">
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
                                                <input type="number" required="" class="form-control" name="CateID">
                                            </div>
                                            <div class="mb-3">
                                                <label for="CateName" class="col-form-label">Category Name:</label>
                                                <input type="text" required="" class="form-control" name="CateName">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="editeCate" class="btn btn-warning">Edit</button>
                                            <a onclick="return confirm('Are you sure you want to delete?');" href="?deletecate=category_id" class="btn btn-danger">Delete</a>

                                            
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
                <a class="nav-link" href="category.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Confirm Order</span></a>
            </li>

            <div class="sidebar-heading fs-6 text-light " style="padding-top:20px;">
                 Payment Function
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="category.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: #C0C0C0;">Check Payment</span></a>
            </li>
           
            


            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="padding-top:50px;">

              
                
                <div class="container-fluid">

               
                    <div class="container-md-auto">
                        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        
                                    </div>

                                    <form action="insert.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        
                                            <div class="mb-3">
                                                <label for="productname" class="col-form-label">Product Name:</label>
                                                <input type="text" required="" class="form-control" name="productname">
                                            </div>

                                            
                                            <div class="mb-3">
                                                <label for="desc" class="col-form-label">Desc</label>
                                                <textarea type="text" required="" style="height:100px;"  class="form-control" name="desc"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rom" class="col-form-label">Rom</label>
                                                <input type="number" required="" class="form-control " name="rom">
                                            </div>


                                            <div class="mb-3">
                                                <label for="quantity" class="col-form-label">Quantity:</label>
                                                <input type="number" required="" class="form-control" name="quantity">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="category_id">Category_id</label>
                                                </div>




                                                <select class="custom-select col-form-label " id="category_id" name="category_id">
                                                    <option selected="" value="0">Choose...</option>
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
                                                <label for="price" class="col-form-label">Price</label>
                                                <input type="text"  required="" class="form-control currency currSign" name="price" placeholder="฿39,000.00">
                                            </div>
                                            <div class="mb-3">
                                                <label for="img" class="col-form-label">Image:</label>
                                                <input type="file" required="" class="form-control" id="imgInput" name="img">
                                                <img loading="lazy" width="100%" id="previewImg" alt="">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                            </div>
                                      
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']); 
                    //header("refresh:1; url=index.php");
                    
                ?>
            </div>
        <?php } ?>
       
        

        <?php if (isset($_SESSION['errorCate'])) { ?>
            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['errorCate'];
                    unset($_SESSION['errorCate']); 
                  
                ?> </div>
                
                <?php } ?>


                <?php if (isset($_SESSION['erroredit'])) { ?>
            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['erroredit'];
                    unset($_SESSION['erroredit']); 
                  
                ?> </div>
                
                <?php } ?>


                            <div class="row">
                                <div class="col-md-6">
                                    <h1>CRUD Dashboard </h1>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" data-bs-whatever="@mdo">Add Product</button>
                                </div>
                            </div>
                            <hr>
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
                                        foreach($products as $product)  {  
                                    
                                        
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

                        
                        <td class=""><?php echo "฿" . number_format( $product['price'], 2,'.',); ?></td>
                        <td width="250px"><img class="rounded" width="100%" src="uploads/<?php echo $product['img']; ?>" alt=""></td>
                        <td>
                            <a href="edit.php?id=<?php echo $product['product_id']; ?>" class="btn btn-warning">Edit</a>
                        
                            <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $product['product_id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                    </tr>
                    <?php } 
                 } ?>







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