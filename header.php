<?php include_once('../config/config.php'); ?>

<html>
<head>
    <meta charset="utf-8">
        <link href="http://localhost/bestdeal/css/home.css" rel="stylesheet">
    <link href="http://localhost/bestdeal/css/footer.css" rel="stylesheet">
    <link href="http://localhost/bestdeal/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="head">
    <div align="right" id="font">
        <div class="contact"> <a href="<?php echo SITE_URL . 'contact.php'; ?>"><i class="fa fa-phone-square"></i> +919460004026</a></div>&nbsp;
        <ul class="head_top_navgation">
            <?php if(isset($_SESSION['email'])){?>
            <li>

                    <a href="#" id="account"><i class="fa fa-user" ></i> My Account</a>
                    <ul>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="#">Change Profile</a></li>

                    </ul>
            </li>
<!--            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Wish List</a>&nbsp;</li>-->
                <!--            <li><a href="#"><i class="fa fa-upload" aria-hidden="true"></i>Submit a free Ad</a></li>-->
             <li><a href="<?php echo SITE_URL . 'action/sign_out.php'; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign-Out</a></li>
            <?php } else { ?>
                <li><a href="<?php echo SITE_URL . 'login.php'; ?>"><i class="fa fa-user" aria-hidden="true"></i> Login</a>&nbsp;</li>
                <li><a href="<?php echo SITE_URL . 'registration.php'; ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>&nbsp;</li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>

</div>
<div id="midbar">
    <div id="logo">
        <a href="<?php echo SITE_URL . 'index.php'; ?>"><img src="http://localhost/21-06/images/best_deal.png"></a>&nbsp;
    </div>
    <div id="search_btn">
        <form action="<?php echo SITE_URL . 'product/search.php'; ?>" >
            <input type="text" name="search" class="form-control input-lg" value="" required placeholder="What are you looking for?">
            <button type="submit" class="btn-default btn-lg"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="right_cart_box">
        <a type="button" href="<?php echo SITE_URL . 'product/posting.php'; ?>"  class="btn-block btn"><i class="fa fa-upload" aria-hidden="true"></i> Submit a free Ad</a>
    </div>
    <div class="clear"></div>
</div>

<div id="navigation_sec">

    <ul>
        <li><a href="<?php echo SITE_URL . 'product/category.php?category=Desktop'; ?>">Desktop </a></li>

        <li><a href="<?php echo SITE_URL . 'product/category.php?category=Laptop'; ?>">Laptop</a></li>
        <li><a href="<?php echo SITE_URL . 'product/category.php?category=Mobile'; ?>">Mobile</a></li>
        <li><a href="<?php echo SITE_URL . 'product/category.php?category=Cameras'; ?>">Cameras</a></li>
        <li><a href="<?php echo SITE_URL . 'product/category.php?category=Accessories'; ?>">Accessories</a></li>
    </ul>

</div>

</body>
</html>