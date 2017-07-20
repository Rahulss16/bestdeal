<?php
include_once 'config/config.php';
$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);

?>


<html>
    <head>
        <title>Change-Password</title>
        <link href="css/register.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
            <form method="post" action="action/do-change.php" enctype="multipart/form-data">
                <h2 align="center">Change Password</h2>
                <p>
                    <label for="password" class="floatLabel">Current-Password</label>
                    <input id="password" name="password" type="password" value="<?php echo isset($value['password'])?$value['password']:''; ?>">
                    <span><?php echo isset($error['password'])?$error['password']:''; ?></span>
                </p>
                <p>
                    <label for="password" class="floatLabel">New-Password</label>
                    <input  id="txtPassword" name="newpassword" type="password" value="<?php echo isset($value['newpassword'])?$value['newpassword']:''; ?>">
                    <span><?php echo isset($error['newpassword'])?$error['newpassword']:''; ?></span>
                </p>
                <p>
                    <label for="password" class="floatLabel">Confirm Password</label>
                    <input  id="txtConfirmPassword" name="confirmpassword" type="password" value="<?php echo isset($value['confirmpassword'])?$value['confirmpassword']:''; ?>">
                    <span><?php echo isset($error['confirmpassword'])?$error['confirmpassword']:''; ?></span>
                </p>

                <p>
                    <input id="btnSubmit" type="submit" value="Update Password" name="submit" onclick="return Validate()" >
                </p>
            </form>
            <script type="text/javascript">
                function Validate() {
                    var password = document.getElementById("txtPassword").value;
                    var confirmPassword = document.getElementById("txtConfirmPassword").value;
                    if (password != confirmPassword) {
                        alert("Passwords do not match.");
                        return false;
                    }
                    return true;
                }
            </script>
    </body>
</html>