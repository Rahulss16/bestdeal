<?php

require_once '../config/config.php';

if(isset($_POST) && !empty($_POST)) {

    $value = $_POST;

    $pro_title = trim($_POST['pro_title']);
    $category = trim($_POST['pro_category_id']);
    $subject = trim($_POST['pro_description']);
    $name = trim($_POST['name']);
    $seller_num = trim($_POST['seller_num']);
    $pro_price = trim($_POST['pro_price']);
    $pro_name = trim($_POST['pro_name']);
    $id = trim($_POST['pro_id']);
    $image = ($_FILES['image']['name']);
//print_r($pro_name); die("ssadas");
    $error = [];
    if (empty($pro_name)){
        $error['pro_name'] = "please enter your name";
    }
    if (empty($pro_title)) {
        $error['pro_title'] = "please enter your title";
    }
    if (empty($category)) {
        $error['pro_category_id'] = "please enter your category";
    }
    if (empty($subject)) {
        $error['pro_description'] = "please enter your description";
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
        header("Location:/add-product.php");
    }

// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

//echo "<pre>"; print_r($db); die;
    if(isset($id) && !empty($id)){

        $sql = " UPDATE tbl_product SET pro_title = '".$pro_title."', pro_description  = '".$subject."', seller_name = '".$name."', seller_num  = '".$seller_num."', pro_category_id = '".$category."', pro_price  = '".$pro_price."', pro_name = '".$pro_name."', pro_image = '".$image."' WHERE pro_id  = $id ";
    } else {
        $sql = " INSERT INTO tbl_product (pro_title,pro_description,seller_name,seller_num,pro_category_id,pro_price,pro_name,pro_image) 
                  VALUES ('" . $pro_title . "','" . $subject . "','" . $name . "','" . $seller_num . "','" . $category . "','".$pro_price ."','".$pro_name ."','".$image."')";
    }

//      echo $sql; die;
    $result = $db->query($sql);
    // echo "<pre>"; print_r($result); die;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))

    {
        echo "success";
    }else{
        echo "sorry";
    }
    if($result){

//        echo 'data inserted successfully';
        header('Location:../product.php');
    }

    else{
        echo 'data can\'t be inserted';
    }

} else {
    header('Location:../index.php');
}





?>