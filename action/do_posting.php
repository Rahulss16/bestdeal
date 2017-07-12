<?php
require_once '../config/config.php';

if(isset($_POST) && !empty($_POST)) {

    $value = $_POST;
    $ad_title = trim($_POST['ad_title']);
    $category = trim($_POST['category']);
    $subject = trim($_POST['description']);
    $name = trim($_POST['name']);
    $seller_num = trim($_POST['seller_num']);
    $pro_price = trim($_POST['pro_price']);
    $pro_name = trim($_POST['pro_name']);

    $error = [];
    if (empty($pro_name)){
        $error['pro_name'] = "please enter your name";
    }
    if (empty($ad_title)) {
        $error['ad_title'] = "please enter your title";
    }
    if (empty($category)) {
        $error['category'] = "please enter your category";
    }
    if (empty($subject)) {
        $error['description'] = "please enter your description";
    }
    if (empty($name)) {
        $error['name'] = "Please enter your name";

    }
    if (empty($seller_num)) {
        $error['seller_num'] = "Please enter your Phone No.";
    }
    if (empty($pro_price)){
        $error['pro_price'] = "Please enter the Product Price";
    }

    if(!empty($error)){
        $_SESSION['value'] =$value;
        $_SESSION['errors'] =$error;
      //  echo "<pre>";
     //   print_r($error); die;
       // $site_url = SITE_URL . 'product/posting.php';
        header("Location:../product/posting.php");
    }

// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

//echo "<pre>"; print_r($db); die;

    $sql = "INSERT INTO tbl_product (pro_title,pro_description,seller_name,seller_num,pro_category_id,pro_price,pro_name) VALUES ('".$ad_title."','".$subject."','".$name."','".$seller_num."','".$category."','".$pro_price."','".$pro_name."')";
//    echo $sql; die;
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