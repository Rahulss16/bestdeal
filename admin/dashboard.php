<?php
include_once 'header.php';
include_once 'left-section.php';
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
                        <div class="lower-section"><h5><a href="product.php">View-More..</a></h5></div></li>
                    <li><div class="upper-section"><h4>Total-Messages</h4></div>
                        <div class="mid-section"><i class="fa fa-envelope"></i>
                            <span class="count-section"><h1><?php echo $count_message ['total_count']; ?></h1></span>
                        </div>
                        <div class="lower-section"><h5><a href="message.php">View-More..</a></h5></div></li>
                </ul>
                <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        

    </body>

</html>
<?php
include_once 'footer.php';
?>