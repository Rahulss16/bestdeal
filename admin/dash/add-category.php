<?php
include_once '../config/config.php';
$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);

if ((isset($_GET['id']) && $_GET['id'] > 0) || (isset($value['id']) && $value['id'] > 0)) {
    $id = (isset($_GET['id']))?$_GET['id']:$value['id'];


    $sql = "SELECT * FROM tbl_category
				WHERE id =" . $id;
    if (!$result = $db->query($sql)) {
        die('There was an error running the query');
    }
    $value = $result->fetch_assoc();

}

?>

<html>
<head>
    <meta charset="utf-8">
    <link href="../css/add.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
</head>

<div>
    <div class="container">
        <form action="../action/do-catergory.php" method="post" enctype="multipart/form-data" class="submit_form">
            <h3 class="submit_title"><?php echo (isset($value['id']) && !empty($value['id']))?'EDIT':'ADD'; ?> CATEGORY</h3>
            <?php
            if(isset($value['id']) && !empty($value['id'])){ ?>
                <input type="hidden" id="id" name="id" value="<?php echo isset($value['id'])?$value['id']:''; ?>" >
            <?php }
            ?>
            <div class="submit_from_section">
                <label for="name"><div class="red">*</div>Name</label>
                <input type="text" id="name" name="name" value="<?php echo isset($value['name'])?$value['name']:''; ?>" >
                <span><?php echo isset($error['name'])?$error['name']:''; ?></span>
            </div>
            <div class="submit_from_section">
                <label for="status"><div class="red">*</div>Status</label>
                <select name="status">
                    <option  value="Active">Active</option>
                    <option  value="Inactive">In-Active</option >
                </select>
                <span><?php echo isset($error['status'])?$error['status']:''; ?></span>
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






