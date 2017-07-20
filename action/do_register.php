<?php
include_once '../config/config.php';

if(isset($_POST['submit']) && !empty('submit')) {


    $name = $_POST['name'];

    $mobile = $_POST['mobile'];

    $email = $_POST['email'];
    $password = $_POST['password'];

    $error = [];
    if (empty($name)) {
        $error['name'] = "Please enter your Name";

    }
    if (empty($mobile)) {
        $error['mobile'] = "please enter your mobile number";
    }
    if (empty($email)) {
        $error['email'] = "Please enter your email address";
    }
    if (empty($password)) {
        $error['password'] = "Please enter password";
    }

    if(!empty($error)){
        $_SESSION['value'] =$value;
        $_SESSION['errors'] =$error;
        header('Location:../registration.php');
        die();
    }
    $db=mysqli_connect('localhost','root','password','employee');


// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

//echo "<pre>"; print_r($db); die;

    $sql = "INSERT INTO tbl_employe (name,mobile,email,password) VALUES ('".$name."','".$mobile."','".$email."','".$password."')";
   // echo $sql; die;
    $result = $db->query($sql);
   // echo "<pre>"; print_r($result); die;
    if($result){
        header('Location:../index.php');
//        echo 'data inserted successfully';
    }

    else{
        echo 'data can\'t be inserted';
    }

} else {
    header('Location:../index.php');
}





?>