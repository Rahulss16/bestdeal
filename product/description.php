<?php
include_once '../header.php';
include_once '../config/config.php';
$db = mysqli_connect('localhost','root','password','employee');

$id = $_GET['id'];

$latest_product_sql = "SELECT * from tbl_product WHERE  pro_id = " . $id;
$latest_product  =  mysqli_query($db,$latest_product_sql);


    // output data of each row
    while($row = mysqli_fetch_assoc($latest_product)) { ?>

        <div class="product-thumb transition">
            <div class="image_detail">

                    <img src="<?php echo IMAGE_URL . $row['pro_image'];?>" ></a></div>
            <div class="caption_detail">
                <p>

                        <?php echo $row['pro_name']; ?>

                </p>
                <p>
                    <?php
                        echo $row['pro_description'];
                    ?>
                </p>
                <p class="price">
                    <?php
                    echo "₹".$row['pro_price'];
                    ?>
                </p>
            </div>
            <div class="button-group">


            </div>
        </div>

    <?php }

?>
<div class="clear"></div>
<?php include_once '../footer.php';
?>
