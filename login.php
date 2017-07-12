<html>
<head>
    <title>Login-Pannel</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php
include_once 'config/config.php';
$error = $_SESSION['errors'];
$values = $_SESSION['values'];

unset($_SESSION['errors']);
unset($_SESSION['values']);
?>
    <div id="form">


            <h2 align="center">Login</h2>
        <?php echo  isset($error['wrong_login'])?$error['wrong_login']:'';  ?>
    <form method="post" action="action/do_login.php">
        <p>
            <input type="email" name="email" value="<?php echo ($values['email'])?$values['email']:''; ?>" class="email" placeholder="E-mail">
            <span><?php echo isset($error['email'])?$error['email']:''; ?></span>
        </p>
        <p>
            <input type="password" name="pass" value="<?php echo ($values['pass'])?$values['pass']:''; ?>" class="email" placeholder="Password">
            <span><?php echo isset($error['pass'])?$error['pass']:''; ?></span>
        </p>
        <p>
            <button class="button" type="submit" name="submit">Login</button>
        </p>
    </form>

    <p class="register">Not a User then <a href="registration.php">SIGN-UP</a></p>

    </div>
</body>
</html>