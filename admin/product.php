<?php
include_once 'header.php';
include_once 'left-section.php';
include_once '../config/config.php';

$product = $_GET['category'];
$product_sql = "SELECT * FROM tbl_product";

$product = mysqli_query($db,$product_sql);
?>
<div class="contact_box">
    <div class="upper-head-section">
        <h3>Products</h3>
        <a class="add" href="add-product.php"><i class="fa fa-plus"></i></a>
        <div class="clear"></div>
    </div>
    <form method="post" action="#" enctype="multipart/form-data">

        <table width="90%" cellpadding="0" cellspacing="0" class="dashboard-category-tables">
            <thead>

            <td>
                <b>S.No.</b>
            </td>
            <td>
                <b>Product Name</b>
            </td>
            <td>
                <b>Product Price (₹)</b>
            </td>
            <td>
                <b>Action</b>
            </td>

            </thead>
            <?php if(mysqli_num_rows($product)>0)
            {$i=1;
                // output data of each row
                while($row = mysqli_fetch_assoc($product))
                {
                    ?>
                    <tr>
                        <td>
                            <?php echo $i;?>

                        </td>
                        <td>
                            <?php echo $row["pro_name"];?>
                        </td>
                        <td>
                            <?php echo $row["pro_price"];?>
                        </td>

                        <td>
                            <a href="add-product.php?id=<?php echo $row['pro_id']; ?>"><i class="fa fa-pencil-square"></i></a>

                            <a Onclick="return ConfirmDelete()" href="action/delete-product.php?id=<?php echo $row['pro_id']; ?>"><i class="fa fa-trash"></i>

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

<?php
include_once 'footer.php';
?>