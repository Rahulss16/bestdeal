<?php session_start();

?>
<html>
<head>
    <title>Dashboard</title>
    <link href="../css/style2.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
</head>
<body>

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
</div>
    <div class="clear"></div>
            <div id="vertical">
                <ul>
                    <li><a class="nav" href="#">Desktop</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Cameras</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>

             </div>

            <?php
                echo "Welcome".$_SESSION['name'];
            ?>
</body>
</html>

