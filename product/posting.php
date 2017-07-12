<?php
include_once '../config/config.php';

$category_sql = "SELECT * from tbl_category WHERE status = 'active'  ORDER  BY name DESC";
$categories  =  mysqli_query($db,$category_sql);

$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);
?>
<?php
include_once '../header.php';
?>

    <link href="../css/posting.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">

<div>
<div class="container">
    <form action="<?php echo SITE_URL . 'action/do_posting.php'; ?>" method="post" enctype="multipart/form-data" class="submit_form">
        <h3 class="submit_title">Submit a Free Ad</h3>
        <div class="submit_from_section">
        <label for="fname">Product Name<div class="red">*</div></label>
        <input type="text" id="fname" name="pro_name" value="<?php echo isset($value['pro_name'])?$value['pro_name']:''; ?>" >
        <span><?php echo isset($error['pro_name'])?$error['pro_name']:''; ?></span>
        </div>
        <div class="submit_from_section">
        <label for="fname">Ad Title<div class="red">*</div></label>
        <input type="text" id="fname" name="ad_title" value="<?php echo isset($value['ad_title'])?$value['ad_title']:''; ?>" >
        <span><?php echo isset($error['ad_title'])?$error['ad_title']:''; ?></span>
        </div>
        <div class="submit_from_section">
        <label for="category">Category<div class="red">*</div></label>
        <select id="category" name="category">
            <option value="">Select a Category</option>
            <?php while ($row = mysqli_fetch_assoc($categories)) { ?>
                <option <?php echo (isset($value['category']) && ($value['category'] == $row['name']))?'selected':''; ?> value="<?php echo $row['name'];  ?>"><?php echo $row['name'];  ?></option>
           <?php } ?>
        </select>
        <span><?php echo isset($error['category'])?$error['category']:''; ?></span>
        </div>
        <div class="submit_from_section">
        <label for="description">Ad Discription<div class="red">*</div></label>
        <textarea id="description" name="description" placeholder="Write something.." style="height: 200px"><?php echo isset($value['description'])?$value['description']:''; ?></textarea>
        <span><?php echo isset($error['description'])?$error['description']:''; ?></span>

        <div class="submit_from_section photo_box">
        <label for="upload">Upload Photo<div class="red">*</div></label>
        <input type="file" name="file[]" value="">
        <input type="file" name="file[]" value="">
        <input type="file" name="file[]" value="">
        </div>
        <div class="submit_from_section">
            <label for="name">Name<div class="red">*</div></label>
        <input type="text" id="name" name="name" value="<?php echo isset($value['name'])?$value['name']:''; ?>" >
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
<?php
//include_once '../footer.php';
//?>

</body>
</html>
