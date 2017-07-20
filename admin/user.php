<?php
include_once 'header.php';
include_once 'left-section.php';
include_once '../config/config.php';

$user = $_GET['user'];
$user_sql = "SELECT * FROM tbl_employe";

$user = mysqli_query($db,$user_sql);
?>
<div class="contact_box">
    <div class="upper-head-section">
        <h3>Products</h3>
        <a class="add" href="add-user.php"><i class="fa fa-plus"></i></a>
        <div class="clear"></div>
    </div>
    <form method="post" action="#" enctype="multipart/form-data">

        <table width="90%" cellpadding="0" cellspacing="0" class="dashboard-category-tables">
            <thead>

            <td>
                <b>S.No.</b>
            </td>
            <td>
                <b>Name</b>
            </td>
            <td>
                <b>Email</b>
            </td>
            <td>
                <b>Mobile</b>
            </td>
            <td>
                <b>Action</b>
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
                            <?php echo $row["name"];?>
                        </td>
                        <td>
                            <?php echo $row["email"];?>
                        </td>
                        <td>
                            <?php echo $row["mobile"];?>
                        </td>

                        <td>
                            <a href="add-user.php?id=<?php echo $row['pro_id']; ?>"><i class="fa fa-pencil-square"></i></a>

                            <a Onclick="return ConfirmDelete()" href="action/delete-user.php?id=<?php echo $row['pro_id']; ?>"><i class="fa fa-trash"></i>

                            </a>
                        </td>
                    </tr>

                    <?php $i++; }

            } ?>

        </table>


    </form>
</div>
<div class="clear"></div>

<script>

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");

        if (x)
            return true;
        else
            return false;

    }


</script>

</body>

</html>

