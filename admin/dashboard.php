<?php
include_once 'config/config.php';
 $count_user = "SELECT COUNT(*)  as total_count FROM tbl_employe ";

$result = mysqli_query($db,$count_user);
 if(!$result){
     print_r(mysqli_error());
 }
$user_count = mysqli_fetch_assoc($result);

 $count_product = "SELECT COUNT(*)  as total_count FROM tbl_product ";

 $result = mysqli_query($db,$count_product);
 if (!$result){
     print_r(mysqli_error());
 }
 $count_product = mysqli_fetch_assoc($result);

$count_message = "SELECT COUNT(*)  as total_count FROM tbl_contact_us ";

$result = mysqli_query($db,$count_message);
if (!$result){
    print_r(mysqli_error());
}
$count_message = mysqli_fetch_assoc($result);
?>


<html>

    <head>
            <link href="css/style.css" rel="stylesheet">
            <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <header class="deshboard_head">
            <img src="images/best_deal.png" alt="BestDeals">
            <ul>
                <li>Welcome Rahul</li>
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?php echo  'action/sign_out.php'?>"><i class="fa fa-sign-out"> Sign-out</i></a></li>
            </ul>

        </header>
        <div id="container">
            <div class="icon-bar">
                <a class="active" href="#"><i class="fa fa-tachometer"> &nbsp; Dashboard</i></a>
                <a href="<?php echo SITE_URL . '/categories.php'?>"><i class="fa fa-tags"></i> &nbsp; Category</a>
                <a href="#"><i class="fa fa-bars"></i> &nbsp; Products</a>
                <a href="<?php echo  'dash/user.php'?>"><i class="fa fa-user"></i> &nbsp; User</a>
                <a href="#"><i class="fa fa-envelope"></i> &nbsp; Message</a>
            </div>
            <div class="contact_box">
                <div class="header-box">
                <ul>

                    <li><div class="upper-section"><h4>Total-User</h4></div>
                        <div class="mid-section"><i class="fa fa-user"></i>
                        <span class="count-section"><h1><?php echo $user_count['total_count']; ?></h1></span>
                        </div>
                        <div class="lower-section"><h5><a href="#">View-More..</a></h5></div></li>
                    <li><div class="upper-section"><h4>Total-Products</h4></div>
                        <div class="mid-section"><i class="fa fa-bars"></i>
                            <span class="count-section"><h1><?php echo $count_product ['total_count']; ?></h1></span>
                        </div>
                        <div class="lower-section"><h5><a href="#">View-More..</a></h5></div></li>
                    <li><div class="upper-section"><h4>Total-Messages</h4></div>
                        <div class="mid-section"><i class="fa fa-envelope"></i>
                            <span class="count-section"><h1><?php echo $count_message ['total_count']; ?></h1></span>
                        </div>
                        <div class="lower-section"><h5><a href="#">View-More..</a></h5></div></li>
                </ul>
                <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </body>

</html>