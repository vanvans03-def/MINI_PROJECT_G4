<?php 

    session_start();

    require_once "config/db.php";

          
    if (isset($_POST['deleteCate'])) {
        
        $oldCate_id = $_POST['category_id'];
        $cateID = $_POST['CateID'];
        $cateName= $_POST['CateName'];

        $sql = $conn->prepare("DELETE FROM `product_category` WHERE `category_id` = :OldCategory_id ");
        $sql->bindParam(":OldCategory_id", $oldCate_id);
    
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "Data has been Delete successfully";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        } else {
            $_SESSION['error'] = "Data has not been updated successfully";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        }



    }







    if (isset($_POST['editeCate'])) {
  
        $oldCate_id = $_POST['category_id'];
        $cateID = $_POST['CateID'];
        $cateName= $_POST['CateName'];

        $sql = $conn->prepare("UPDATE `product_category` SET `category_id` = :category_id, `name` = :name WHERE `category_id` = :OldCategory_id ");
        $sql->bindParam(":OldCategory_id", $oldCate_id);
        $sql->bindParam(":category_id", $cateID);
        $sql->bindParam(":name", $cateName);
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "Data has been updated successfully";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        } else {
            $_SESSION['error'] = "Data has not been updated successfully";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        }


    }

    ?>