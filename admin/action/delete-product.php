<?php
require_once '../config/config.php';


if(isset($_GET['id']) && !empty($_GET['id'])){


// Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];
    $sql = "DELETE  FROM tbl_product WHERE  pro_id  = $id";


    $result = $db->query($sql);
    // echo "<pre>"; print_r($result); die;
    if($result){
//        echo 'data inserted successfully';
        header('Location:../dash/product.php');
    }


} else {
    die("Wrong Url");
}


?>
