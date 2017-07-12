<?php
include_once 'config/config.php';
$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);

include_once 'header.php';
?>

<html>
<head>
    <meta charset="utf-8">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/posting.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<div id="contact">

    <ul>
        <li><a href="<?php echo SITE_URL . 'index.php'; ?>"><i class="fa fa-home"></i></a></li>
        <li></li>
        <li><a href="contact.php">Contact-Us</a></li>
    </ul>

</div>
<div>
    <div class="container">
        <form action="<?php echo SITE_URL . '/action/contact_us.php'; ?>" method="post" enctype="multipart/form-data" class="submit_form">
            <h3 class="submit_title">Contact Form</h3>
            <div class="submit_from_section">
                <label for="name"><div class="red">*</div>Your Name</label>
                <input type="text" id="name" name="name" value="<?php echo isset($value['name'])?$value['name']:''; ?>" >
                <span><?php echo isset($error['name'])?$error['name']:''; ?></span>
            </div>
            <div class="submit_from_section">
                <label for="email"><div class="red">*</div>E-mail Address</label>
                <input type="email" id="email" name="email" value="<?php echo isset($value['email'])?$value['email']:''; ?>" >
                <span><?php echo isset($error['email'])?$error['email']:''; ?></span>
            </div>
            <div class="submit_from_section">
                <label for="description"><div class="red">*</div>Enquiry</label>
                <textarea id="description" name="description" placeholder="Write something.." style="height: 200px"><?php echo isset($value['description'])?$value['description']:''; ?></textarea>
                <span><?php echo isset($error['description'])?$error['description']:''; ?></span>


                <div class="submit_from_section">
                    <input type="submit" value="Submit">
                </div>
        </form>
    </div>
</div>
    <div class="clear"></div>


<?php

include_once 'footer.php';
?>
</body>
</html>






