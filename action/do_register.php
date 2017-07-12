<?php
include_once '../config/config.php';

if(isset($_POST['submit']) && !empty('submit')) {


    $name = $_POST['name'];
    $adr = $_POST['adr'];
    $mobile = $_POST['mobile'];
//    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
//    $hobbies = $_POST['hobbies'];
    $country = $_POST['country'];
//    $status = $_POST['status'];

    $error = [];
    if (empty($name)) {
        $error['name'] = "please enter your name";

    }
    if (empty($adr)) {
        $error['adr'] = "please enter your address";
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
    if (empty($gender)){
        $error['gender']="Please enter gender";
    }

    if (empty($country)){
        $error['country']="Please enter password";
    }


    if(!empty($error)){
        $_SESSION['value'] =$value;
        $_SESSION['errors'] =$error;
        header('Location:../registration.php');
    }
    $db=mysqli_connect('localhost','root','password','employee');


// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

//echo "<pre>"; print_r($db); die;

    $sql = "INSERT INTO tbl_employe (name,address,mobile,email,password,gender,country) VALUES ('".$name."','".$adr."','".$mobile."','".$email."','".$password."','".$gender."','".$country."')";
   // echo $sql; die;
    $result = $db->query($sql);
   // echo "<pre>"; print_r($result); die;
    if($result){
        echo 'data inserted successfully';
    }

    else{
        echo 'data can\'t be inserted';
    }

} else {
    header('Location:../index.php');
}





?>