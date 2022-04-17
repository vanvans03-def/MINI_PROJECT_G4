<?php 

    session_start();

    require_once "config/db.php";
    
    

    if(isset($_POST['changepass'])){
        $id = $_POST['id'];
        $newpass = $_POST['newpassword'];
        $conpass = $_POST['newpassword2'];
        $oldpass = $_POST['password'];
        $stmt = $conn->query("SELECT * FROM users WHERE `id` = '$id'");
                        $stmt->execute();
                        $data = $stmt->fetch();
        if($data['password'] != $oldpass){
            $_SESSION['error'] = "รหัสผ่านผิด";
        }elseif($newpass != $conpass){
            $_SESSION['error'] = "รหัสผ่านไม่ตรงกัน";
        }else{
            $sql = $conn->prepare("UPDATE `users` SET `password` = :password WHERE `id` = :id");
            $sql->bindParam(":password", $newpass);
            $sql->bindParam(":id", $id);
            $sql->execute();
            $_SESSION['success'] = "อัพเดตข้อมูลแล้ว";
    
        }


    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $Lname = $_POST['Lname'];
        $telephone = $_POST['telephone'];
        $sql = $conn->prepare("UPDATE `users` SET `name` = :name ,`Lname` = :Lname ,`telephone` = :telephone   WHERE `id` = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":Lname", $Lname);
        $sql->bindParam(":telephone", $telephone);
        $sql->execute();
      
        if ($sql) {

                $_SESSION['success'] = "Edit Data Admin successfully";
              
            }

        } else {
           
        }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/js/bootstrap.js">
    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION['success'])) : ?>

<script>
    var session = '<?php echo $_SESSION['success']; ?>';
    alert(session);
</script>
<?php unset($_SESSION['success']); ?>
<?php endif ?>

<?php if (isset($_SESSION['error'])) : ?>
<div class="error">
    <script>
        var session = '<?php echo $_SESSION['error']; ?>';
        alert(session);
    </script>
</div>
<?php unset($_SESSION['error']); ?>
<?php endif ?>

    <div class="container mt-5">
   
        <h1>Edit Data</h1>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM users WHERE `id` = '$id'");
                        $stmt->execute();
                        $data = $stmt->fetch();
                }
            ?>
                <div class="mb-3">
                    <label for="id" class="col-form-label">ID:</label>
                    <input type="text" readonly value="<?php echo $data['id']; ?>" required class="form-control" name="id" >
                
                    <div class="mb-3">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="text" readonly value="<?php echo $data['email']; ?>" required class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" value="<?php echo $data['name']; ?>" required class="form-control" name="name" >
              
                </div>
                
                <div class="mb-3">
                    <label for="Lname" class="col-form-label">Last Name :</label>
                    <input   type="text"  value="<?php echo $data['Lname']; ?>" required class="form-control" name="Lname">
                </div>
                
                <div class="mb-3">
                    <label for="telephone" class="col-form-label">Telephone:</label>
                    <input  type="text" value="<?php echo $data['telephone']; ?>" required class="form-control" name="telephone">
                </div>

               
             
                <hr>
                <input type="button" class="btn btn-secondary" onclick="history.back()"  value="Go Back">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
           
                 <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#productModal" data-bs-whatever="@mdo">Change password</button>
              
            </form>



            <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        
                                    </div>

                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                    <input type="hidden" readonly value="<?php echo $data['id']; ?>" required class="form-control" name="id" >
                                            <div class="mb-3">
                                                <label for="newpassword" class="col-form-label">New Password:</label>
                                                <input type="password" required="" class="form-control" name="newpassword">
                                            </div>

                                            
                                            <div class="mb-3">
                                                <label for="newpassword2" class="col-form-label">Confirm New Password</label>
                                                <input type="password" required=""  class="form-control" name="newpassword2">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="col-form-label">Password</label>
                                                <input type="password" required="" class="form-control " name="password">
                                            </div>


                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="changepass" class="btn btn-success">Submit</button>
                                            </div>
                                      
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


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