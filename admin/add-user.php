<?php
include_once 'header.php';
include_once 'left-section.php';
include_once 'config/config.php';


$error = $_SESSION['errors'];
$value = $_SESSION['value'];
unset($_SESSION['errors']);
unset($_SESSION['value']);

if ((isset($_GET['id']) && $_GET['id'] > 0) || (isset($value['id']) && $value['id'] > 0)) {
    $id = (isset($_GET['id']))?$_GET['id']:$value['id'];


    $sql = "SELECT * FROM tbl_employe
				WHERE pro_id =" . $id;
    if (!$result = $db->query($sql)) {
        die('There was an error running the query');
    }
    $value = $result->fetch_assoc();
//print_r($value); die("sa");
}
?>


<div class="contact_box">


    <form method="post" action="action/do-user.php" class="submit_form">
        <h3 class="submit_title"><?php echo (isset($value['id']) && !empty($value['id']))?'EDIT':'ADD'; ?> USER</h3>
        <?php
        if(isset($value['id']) && !empty($value['pro_id'])){ ?>
            <input type="hidden" id="id" name="id" value="<?php echo isset($value['id'])?$value['id']:''; ?>" >
        <?php }
        ?>
        <div class="submit_from_section">
            <p>
                <label for="Name">Name</label>
                <input id="Name" name="name" type="text" value="<?php echo isset($value['name'])?$value['name']:''; ?>">
                <span><?php echo isset($error['name'])?$error['name']:''; ?></span>
            </p>
        </div>
        <div class="submit_from_section">
            <p>
                <label for="Email">Email</label>
                <input id="Email" name="email" type="email" value="<?php echo isset($value['email'])?$value['email']:''; ?>">
                <span><?php echo isset($error['email'])?$error['email']:''; ?></span>
            </p>
        </div>
        <div class="submit_from_section">
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="text" value="<?php echo isset($value['password'])?$value['password']:''; ?>">
                <span><?php echo isset($error['password'])?$error['password']:''; ?></span>
            </p>
        </div>
        <div class="submit_from_section">
            <p>
                <label for="mobile">Mobile</label>
                <input id="mobile" name="mobile" type="text" value="<?php echo isset($value['mobile'])?$value['mobile']:''; ?>">
                <span><?php echo isset($error['mobile'])?$error['mobile']:''; ?></span>
            </p>
        </div>
            <p>
                <input type="submit" value="Create User Account" name="submit">
            </p>

    </form>
</div>

<div class="clear"></div>

</div>

</body>

</html>
