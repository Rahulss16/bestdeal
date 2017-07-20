<?php
include_once 'config/config.php';
?>
<html>
<head>
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
   <footer>
           <div class="social_icon">
               <ul>
                   <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                   <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
               </ul>

           </div>
           <div class="clear"></div>
            <div class="info">
                <ul>
                    <li><a href="<?php echo SITE_URL . 'index.php'; ?>">HOME</a></li>
                    <li><a href="<?php echo SITE_URL . '/product/privacy.php';?>">Privacy & Policy</a></li>
                    <li><a href="<?php echo SITE_URL . '/product/terms.php';?>">Terms and Conditions</a></li>
                </ul>
            </div>
           <div class="clear"></div>
           <div class="footer_contact">
               <ul>
                   <li><a href="contact.php">Contact Us</a></li>
                   <li><a href="#">Site Map</a></li>
                   <li><a href="#">Brands</a></li>
               </ul>
           </div>

       <hr>

           <div class="footer_bottem">Powered By <a href="<?php echo SITE_URL . 'index.php'; ?>">BestDeals</a> Your Store &copy; 2017</div>
   </footer>




</body>
</html>