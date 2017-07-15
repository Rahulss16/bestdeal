
<?php
include_once 'config/config.php';
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
                <a href="<?php echo  'dash/categories.php'?>"><i class="fa fa-tags"></i> &nbsp; Category</a>
                <a href="#"><i class="fa fa-bars"></i> &nbsp; Products</a>
                <a href="<?php echo  'dash/user.php'?>"><i class="fa fa-user"></i> &nbsp; User</a>
                <a href="#"><i class="fa fa-envelope"></i> &nbsp; Message</a>
            </div>
            <div class="contact_box">
                <?php
                include_once 'config/config.php';
                $category = $_GET['category'];
                $category_sql = "SELECT * FROM tbl_category";

                $category = mysqli_query($db,$category_sql);
                if(mysqli_num_rows($category)>0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($category))
                    {
                        echo $row["id"];
                        echo $row["name"];
                        echo $row["status"];
                    }


                }
                else
                {
                    echo "no result";
                }

                ?>

            </div>
            <div class="clear"></div>
        </div>

    </body>

</html>