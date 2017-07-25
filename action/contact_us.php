<?php
require_once '../config/config.php';


if(isset($_POST) && !empty($_POST)) {

    $value = $_POST;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['description']);


    $error = [];
    if (empty($name)) {
        $error['name'] = "Please enter your Name";

    }
    if (empty($email)) {
        $error['email'] = "please enter your E-mail Address";
    }
    if (empty($subject)) {
        $error['description'] = "please enter your Enquiry";
    }

    if(!empty($error)){
        $_SESSION['value'] =$value;
        $_SESSION['errors'] =$error;
        //  echo "<pre>";
        //   print_r($error); die;

        header("Location:../contact.php");
        die;
    }

// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

//echo "<pre>"; print_r($db); die;

    $sql = "INSERT INTO tbl_contact_us (con_name,con_email,con_enquiry) VALUES ('".$name."','".$email."','".$subject."')";
//    echo $sql; die;
    $result = $db->query($sql);
    // echo "<pre>"; print_r($result); die;
    if($result){
        header('Location: ../index.php');
        echo 'data inserted successfully';
    }

    else{
        echo 'data can\'t be inserted';
    }

} else {
    header('Location:../index.php');
}


?>
