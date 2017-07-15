
<?php
//include_once '../include.php';
include_once '../config/config.php';

$product = $_GET['category'];
$product_sql = "SELECT * FROM tbl_product";

$product = mysqli_query($db,$product_sql);



?>
<html>
<head>
    <link href="../css/category.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container-body">
    <div class="pannel">
        <div class="pannel-heading">
            <h3>Products</h3>
            <a href="../dash/add-product.php"><i class="fa fa-plus"></i></a>
        </div>
        <div class="pannel-body">
            <form method="post" action="#" enctype="multipart/form-data">
                <div class="table-section">
                    <table>
                        <thead>

                        <td>
                            S.No.
                        </td>
                        <td class="t-head">
                            Product Name
                        </td>
                        <td>
                            Status
                        </td>
                        <td>
                            Action
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
                                        <?php echo $row["pro_status"];?>
                                    </td>

                                    <td>

                                        <a href="../dash/add-product.php?id=<?php echo $row['pro_id']; ?>"><i class="fa fa-pencil-square"></i></a>
                                    </td>
                                    <td>
                                        <a href="../action/delete-product.php?id=<?php echo $row['pro_id']; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>

                                <?php $i++; }

                        } ?>

                    </table>
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>


