<?php
include_once '../config/config.php';

$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);
?>
<?php


if ((isset($_GET['id']) && $_GET['id'] > 0) || (isset($value['pro_id']) && $value['pro_id'] > 0)) {
    $id = (isset($_GET['id']))?$_GET['id']:$value['pro_id'];


    $sql = "SELECT * FROM tbl_product
				WHERE pro_id =" . $id;
    if (!$result = $db->query($sql)) {
        die('There was an error running the query');
    }
    $value = $result->fetch_assoc();
//print_r($value); die("sa");
}
?>


<?php
$category_sql = "SELECT * from tbl_category WHERE status = 'active'  ORDER  BY name DESC";
$categories  =  mysqli_query($db,$category_sql);


?>

<link href="../css/add.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">

<div>
    <div class="container">

        <form action=" ../action/do-product.php" method="post" enctype="multipart/form-data" class="submit_form">
            <h3 class="submit_title"><?php echo (isset($value['pro_id']) && !empty($value['pro_id']))?'EDIT':'ADD'; ?> PRODUCT</h3>
            <?php
            if(isset($value['pro_id']) && !empty($value['pro_id'])){ ?>
                <input type="hidden" id="id" name="pro_id" value="<?php echo isset($value['pro_id'])?$value['pro_id']:''; ?>" >
            <?php }
            ?>
            <div class="submit_from_section">
                <label for="fname">Product Name<div class="red">*</div></label>
                <input type="text" id="fname" name="pro_name" value="<?php echo isset($value['pro_name'])?$value['pro_name']:''; ?>" >
                <span><?php echo isset($error['pro_name'])?$error['pro_name']:''; ?></span>
            </div>
            <div class="submit_from_section">
                <label for="fname">Ad Title<div class="red">*</div></label>
                <input type="text" id="fname" name="pro_title" value="<?php echo isset($value['pro_title'])?$value['pro_title']:''; ?>" >
                <span><?php echo isset($error['pro_title'])?$error['pro_title']:''; ?></span>
            </div>
            <div class="submit_from_section">
                <label for="category">Category<div class="red">*</div></label>
                <select id="category" name="pro_category_id">
                    <option value="">Select a Category</option>
                    <?php while ($row = mysqli_fetch_assoc($categories)) { ?>
                        <option <?php echo (isset($value['pro_category_id']) && ($value['pro_category_id'] == $row['name']))?'selected':''; ?> value="<?php echo $row['name'];  ?>"><?php echo $row['name'];  ?></option>
                    <?php } ?>
                </select>
                <span><?php echo isset($error['pro_category_id'])?$error['pro_category_id']:''; ?></span>
            </div>
            <div class="submit_from_section">
                <label for="description">Ad Discription<div class="red">*</div></label>
                <textarea id="description" name="pro_description" placeholder="Write something.." style="height: 200px"><?php echo isset($value['pro_description'])?$value['pro_description']:''; ?></textarea>
                <span><?php echo isset($error['pro_description'])?$error['pro_description']:''; ?></span>

                <div class="submit_from_section photo_box">
                    <label for="upload">Upload Photo<div class="red">*</div></label>
                    <input type="file" name="file[]" value="">
                </div>
                <div class="submit_from_section">
                    <label for="name">Name<div class="red">*</div></label>
                    <input type="text" id="name" name="name" value="<?php echo isset($value['seller_name'])?$value['seller_name']:''; ?>" >
                    <span><?php echo isset($error['name'])?$error['name']:''; ?></span>
                </div>
                <div class="submit_from_section">
                    <label for="phone"><i class="fa fa-phone"></i> Phone<div class="red">*</div></label>
                    <input type="text" name="seller_num" placeholder="+91" value="<?php echo isset($value['seller_num'])?$value['seller_num']:''; ?>">
                    <span><?php echo isset($error['seller_num'])?$error['seller_num']:''; ?></span>
                </div>
                <div class="submit_from_section">
                    <label for="price">Product Price<div class="red">*</div></label>
                    <input type="text" name="pro_price" value="<?php echo isset($value['pro_price'])?$value['pro_price']:''; ?>">
                    <span><?php echo isset($error['pro_price'])?$error['pro_price']:''; ?></span>
                </div>
                <div class="submit_from_section">
                    <input type="submit" value="Submit">
                </div>
        </form>
    </div>
</div>
<div class="clear"></div>

</body>
</html>
