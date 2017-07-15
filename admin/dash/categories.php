<?php
//include_once '../include.php';
include_once '../config/config.php';

$category = $_GET['category'];
$category_sql = "SELECT * FROM tbl_category";

$category = mysqli_query($db,$category_sql);



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
                <h3>Categories</h3>
                <a href="../dash/add-category.php"><i class="fa fa-plus"></i></a>
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
                                    Category Name
                                </td>
                                <td>
                                    Status
                                </td>
                            <td>
                                Action
                            </td>

                            </thead>
                            <?php if(mysqli_num_rows($category)>0)
                            {$i=1;
                                // output data of each row
                                while($row = mysqli_fetch_assoc($category))
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
                                    <?php echo $row["status"];?>
                                </td>

                                        <td>
                                            <a href="../dash/add-category.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square"></i></a>
                                        </td>
                                <td>
                                    <a href="../action/delete-category.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i>

                                    </a>
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