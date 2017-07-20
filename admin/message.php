<?php
include_once 'header.php';
include_once 'left-section.php';
include_once 'config/config.php';


$user = $_GET['user'];
$user_sql = "SELECT * FROM tbl_contact_us";

$user = mysqli_query($db,$user_sql);
?>
<div class="contact_box">
    <div class="upper-head-section">
        <h3>Messages</h3>
        <div class="clear"></div>
    </div>
    <form method="post" action="#" enctype="multipart/form-data">

        <table width="90%" cellpadding="0" cellspacing="0" class="dashboard-category-tables">
            <thead>

            <td>
                <b>S.No.</b>
            </td>
            <td>
                <b>User Name</b>
            </td>
            <td>
                <b>User E-mail Address</b>
            </td>
            <td>
                <b>Enquiry</b>
            </td>

            </thead>
            <?php if(mysqli_num_rows($user)>0)
            {$i=1;
            // output data of each row
            while($row = mysqli_fetch_assoc($user))
            {
            ?>
            <tr>
                <td>
                    <?php echo $i;?>

                </td>
                <td>
                    <?php echo $row["con_name"];?>
                </td>
                <td>
                    <?php echo $row["con_email"];?>
                </td>
                <td>
                    <?php echo $row["con_enquiry"]?>
                </td>
            </tr>
                <?php $i++; }

            } ?>
        </table>


    </form>
</div>
<div class="clear"></div>
</body>

</html>
<?php
include_once 'footer.php';
?>

