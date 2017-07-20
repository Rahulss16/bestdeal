<?php
include_once 'config/config.php';
$error = $_SESSION['errors'];
$values = $_SESSION['values'];

unset($_SESSION['errors']);
unset($_SESSION['values']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
<div id="header">
	<img src="images/best_deal.png">
</div>
<div class="login_box">
    <div class="heading">
        <h1 class="upr_title"><i class="fa fa-lock"></i> Please enter your login details.</h1>
    </div>
    <div class="mid-body">
        <?php echo  isset($error['wrong_login'])?$error['wrong_login']:'';  ?>
        <form action="action/login.php" method="post" enctype="multipart/form-data">
            <div class="form-input">
                <label for="input-username">Username</label>
                <div class="input-group"><span class="input-icon"><i class="fa fa-user"></i></span>
                    <input name="username" value="<?php echo ($values['username'])?$values['username']:''; ?>" placeholder="Username" id="input-username" class="form-in" type="text">
                    <span><?php echo isset($error['username'])?$error['username']:''; ?></span>
                </div>
            </div>
            <div class="form-input">
                <label for="input-password">Password</label>
                <div class="input-group"><span class="input-icon"><i class="fa fa-lock"></i></span>
                    <input name="password" value="<?php echo ($values['password'])?$values['password']:''; ?>" placeholder="Password" id="input-password" class="form-in" type="password">
                    <span><?php echo isset($error['password'])?$error['password']:''; ?></span>
                </div>
            </div>
                <button type="submit" class="btn"><i class="fa fa-key"></i> Login</button>

        </form>
    </div>

</div>
<footer class="foot">
    <a href="#">Bestdeal</a>
    © 2017-2018 All Rights Reserved.
    <br>
</footer>
</body>
</html>