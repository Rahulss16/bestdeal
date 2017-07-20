<?php
include_once '../config/config.php';

if(isset($_POST['submit']) && !empty('submit')) {

     $id = $_SESSION['id'];

    $name = $_POST['password'];

    $newpass = $_POST['newpassword'];

    $confirm = $_POST['confirmpassword'];


    $error = [];
    if (empty($name)) {
        $error['password'] = "Please enter your Current-Password";

    }
    if (empty($newpass)) {
        $error['newpassword'] = "please enter your New Paswword";
    }
    if (empty($confirm)) {
        $error['confirmpassword'] = "Please enter your Confirm Password";
    }


    if (!empty($error)) {
        $_SESSION['value'] = $value;
        $_SESSION['errors'] = $error;
        header('Location:../change_password.php');
        die();
    }
    $db = mysqli_connect('localhost', 'root', 'password', 'employee');


// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = " UPDATE tbl_employe SET  password  = '".$newpass."' WHERE id  = $id ";
    $result = $db->query($sql);
    if($result){
        header('Location:../index.php');
        //echo 'data inserted successfully';
    }

    else{
        echo 'data can\'t be inserted';
    }

} else {
    header('Location:../index.php');

}
?>