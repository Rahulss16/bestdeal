<?php

require_once '../config/config.php';

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
     if (!empty($error)) {
         $_SESSION['value'] = $value;
         $_SESSION['errors'] = $error;
         //  echo "<pre>";
         //   print_r($error); die;
         // $site_url = SITE_URL . 'product/posting.php';
         header("Location:/add-user.php");
     }
     if (!$db) {
         die("Connection failed: " . mysqli_connect_error());
     }
     if(isset($id) && !empty($id)){
         $sql = " UPDATE tbl_employe SET name = '".$name."', mobile  = '".$mobile."', email = '".$email."', password  = '".$password."' WHERE id  = $id ";
     } else {
         $sql = "INSERT INTO tbl_employe (name,mobile,email,password) VALUES ('".$name."','".$mobile."','".$email."','".$password."')";
     }
     $result = $db->query($sql);
     if($result){

//        echo 'data inserted successfully';
         header('Location:../user.php');
     }

     else{
         echo 'data can\'t be inserted';
     }

 }else {
     header('Location:../index.php');
 }
?>