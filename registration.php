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
    <div id="topbar">

            <h2 align="center">Register For Employee </h2>
            <hr class="upper">
    <form method="post" action="<?php echo SITE_URL . 'action/do_register.php'; ?>">
        Name :<input type="text" name="name" class="name" value="<?php echo isset($value['name'])?$value['name']:''; ?>">
        <span><?php echo isset($error['name'])?$error['name']:''; ?></span>

        <br>
        Address :<input type="text" name="adr" class="address" value="<?php echo isset($value['adr'])?$value['adr']:''; ?>">
        <span><?php echo isset($error['adr'])?$error['adr']:''; ?></span>
        <br>
        Mobile :<input type="text" name="mobile" class="mob" value="<?php echo isset($value['mobile'])?$value['mobile']:''; ?>">
        <span><?php echo isset($error['mobile'])?$error['mobile']:''; ?></span>

        <br>
        E-mail :<input type="email" name="email"class="email" value="<?php echo isset($value['email'])?$value['email']:''; ?>">
        <span><?php echo isset($error['email'])?$error['email']:''; ?></span>

        <br>
        Password :<input type="password" name="password" class="passw" value="<?php echo isset($value['password'])?$value['password']:''; ?>">
        <span><?php echo isset($error['password'])?$error['password']:''; ?></span>

        <br>
        Gender :<input type="radio" name="gender" class="mob" value = "Male">Male
                <input type="radio" name="gender" value = "Female">Female
                <input type="radio" name="gender" value = "Other">Other
        <br>


        Country :<select class="address" name="country">
            <option>Choose Your Country</option>
            <option>India</option>
            <option>USA</option>
            <option>England</option>
            <option>Sri-Lanka</option>
        </select><br>

        <button class="button" type="submit" name="submit">Register</button>
        <p>
        <a href="index.php">Login</a></p>
    </form>


    </div>
</body>
</html>