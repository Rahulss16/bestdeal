<?php
include_once 'config/config.php';
$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);
?>

<html>
<head>
    <title>Registration-Form</title>
   <link href="css/register.css" rel="stylesheet" >
</head>
<body>


<form method="post" action="<?php echo SITE_URL . 'action/do_register.php'; ?>">
    <h2>Sign Up</h2>
    <p>
        <label for="Name" class="floatLabel">Name</label>
        <input id="Name" name="name" type="text" value="<?php echo isset($value['name'])?$value['name']:''; ?>">
        <span><?php echo isset($error['name'])?$error['name']:''; ?></span>
    </p>
    <p>
        <label for="Email" class="floatLabel">Email</label>
        <input id="Email" name="email" type="email" value="<?php echo isset($value['email'])?$value['email']:''; ?>">
        <span><?php echo isset($error['email'])?$error['email']:''; ?></span>
    </p>
    <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password" name="password" type="password" value="<?php echo isset($value['password'])?$value['password']:''; ?>">
        <span><?php echo isset($error['password'])?$error['password']:''; ?></span>
    </p>
    <p>
        <label for="mobile" class="floatLabel">Mobile</label>
        <input id="mobile" name="mobile" type="text" value="<?php echo isset($value['mobile'])?$value['mobile']:''; ?>">
        <span><?php echo isset($error['mobile'])?$error['mobile']:''; ?></span>
    </p>
    <p>By creating an account you agree to our <a href="<?php echo SITE_URL . '/product/terms.php';?>">Terms & Privacy</a>.</p>
    <p>
        <input type="submit" value="Create My Account" name="submit">
    </p>
    <p>
        <a href="login.php">LOG-IN</a>
    </p>
</form>

</body>
</html>