<?php
require_once '../config/config.php';


if(isset($_POST) && !empty($_POST)) {

    $value = $_POST;
    $name = trim($_POST['name']);
    $status = trim($_POST['status']);
    $id = trim($_POST['id']);
//    print_r($name);


    $error = [];
    if (empty($name)) {
        $error['name'] = "Please enter your Name";

    }
    if (empty($status)) {
        $error['status'] = "please enter your Product Status";
    }


    if(!empty($error)){
        $_SESSION['value'] =$value;
        $_SESSION['errors'] =$error;
        //  echo "<pre>";
        //   print_r($error); die;

        header("Location:../dash/add-category.php");
        die;
    }

// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if(isset($id) && !empty($id)){
        $sql = "UPDATE tbl_category SET name = '".$name."', status  = '".$status."' WHERE id  = $id ";
    }else{
        $sql = "INSERT INTO tbl_category (name,status) VALUES ('".$name."','".$status."')";
    }

//    echo $sql; die;
    $result = $db->query($sql);
    // echo "<pre>"; print_r($result); die;
    if($result){
//        echo 'data inserted successfully';
        header('Location:../dash/categories.php');
    }

    else{
        echo 'data can\'t be inserted';
    }

} else {
    header('Location:../index.php');
}


?>
