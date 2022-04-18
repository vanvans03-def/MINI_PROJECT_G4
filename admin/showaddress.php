<?php

session_start();

require_once "config/db.php";

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
        <h1>User Address</h1>

        <?php



        if (isset($_POST)) {
            $uid = $_POST['userid'];
            $stmt = $conn->query("SELECT users_address.`user_id`,users_address.`address_line_1`,users_address.`address_line_2`,users_address.`city`,users_address.`Postcode`,users_address.`country`,users_address.`telephone`,users.`email`,users.`name`,users.`Lname`
        FROM users_address
        JOIN users 
        ON users_address.`user_id` =   $uid");
            $stmt->execute();
            $data = $stmt->fetch();
            if (!$data) {
                echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
            } else {
        ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                    </div>
                    <div class="modal-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="productname" class="col-form-label">user_id</label>
                                <input type="text" readonly class="form-control" value="<?php echo $data['user_id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="col-form-label">Email</label>
                                <input type="text" readonly class="form-control" value="<?php echo $data['email']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="col-form-label">ชื่อ-นามสกุล</label>
                                <input type="text" readonly class="form-control currency currSign" value="<?php echo $data['name'] . " " . $data['Lname']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="col-form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" readonly value="<?php echo $data['telephone']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="col-form-label">ที่อยู่</label>
                                <input type="text" required="" class="form-control " readonly value="<?php echo $data['address_line_1']; ?>">
                                <div class="mb-3">
                                    <label for="price" class="col-form-label">ที่อยู่ เพิ่มเติม</label>
                                    <input type="text" required="" class="form-control " readonly value="<?php echo $data['address_line_2'] . " " . $data['city'] . " " . $data['Postcode']; ?>">
                                </div>
                                <div class="modal-footer"">
                                           <input type=" button" class="btn btn-secondary" onclick="javascript:location.href='success.php'" value="Close">
                                </div>
                        </form>
                    </div>
                </div>
    </div>
    </div>
<?php }
        } ?>
</div>
</div>

</div>
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