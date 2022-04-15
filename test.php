<?php
    $connect = new mysqli('localhost', 'root', '', 'appleshop');
    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }
    $sql = "SELECT * FROM product";
    $result = $connect->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple_test</title>
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container">
      <h1>ตะกร้าสินค้า</h1>
      <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">รูปสินค้า</td>
                    <td width="25%">ราคา (บาท) </td>
                    <td width="25%">รูปภาพประกอบ</td>
                </tr>
            </thead>
            <tbody>
 <?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td>
       <?php echo $row['product_id']; ?>
   </td>
   <td class="name">
       <?php echo $row['name']; ?>
   </td>
       <td><?php echo $row['price']; ?>
   </td>
   <td width="250px"><img class="rounded" width="100%" src="admin/uploads/<?php echo $row['img']; ?>" alt=""></td>   <td>
       
   </td>
   </tr>
 <?php endwhile ?>
</tbody>
        </table>
    </div>
</body>
</html>