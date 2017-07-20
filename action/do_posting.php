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
    $image = ($_FILES['image']['name']);
//    print_r($image);
//    die("h");
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
    if (empty($image)){
        $error['image'] = "Please select an image";
    }
    if (isset($_POST['submit'])){
        $target = '/var/www/html/bestdeal/uploads/';
        $target = $target .basename($_FILES['image']['name']);

    }

    if(!empty($error)){
        $_SESSION['value'] =$value;
        $_SESSION['errors'] =$error;
      //  echo "<pre>";
     //   print_r($error); die;
       // $site_url = SITE_URL . 'product/posting.php';
        header("Location:../product/posting.php");
        die;
    }

// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

//echo "<pre>"; print_r($db); die;

    $sql = "INSERT INTO tbl_product (pro_title,pro_description,seller_name,seller_num,pro_category_id,pro_price,pro_name,pro_image)
            VALUES ('".$ad_title."','".$subject."','".$name."','".$seller_num."','".$category."','".$pro_price."','".$pro_name."','".$image."')";
//    echo $sql; die;
    $result = $db->query($sql);
    // echo "<pre>"; print_r($result); die;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))

    {
        echo "success";
    }else{
        echo "sorry";
    }
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