<?php
include_once 'config/config.php';


$latest_product_sql = "SELECT * from tbl_product ORDER  BY pro_id DESC limit 4  ";
$latest_product  =  mysqli_query($db,$latest_product_sql);


$desktop = "SELECT * from tbl_product WHERE pro_category_id = 'Desktop' ORDER  BY pro_id DESC limit 4   ";
$desktop  =  mysqli_query($db,$desktop);


$laptop = "SELECT * from tbl_product WHERE pro_category_id = 'Laptop' ORDER  BY pro_id DESC limit 4   ";
$laptop  =  mysqli_query($db,$laptop);


$mobile = "SELECT * from tbl_product WHERE pro_category_id = 'Mobile' ORDER  BY pro_id DESC limit 4   ";
$mobile  =  mysqli_query($db,$mobile);


$camera = "SELECT * from tbl_product WHERE pro_category_id = 'Cameras' ORDER  BY pro_id DESC limit 4   ";
$camera  =  mysqli_query($db,$camera);
?>
<?php
include_once 'header.php';
?>

    <div id="slide">
        <img src="images/dell.jpg" name="slide">
    </div>




    <script src="js/slide.js"></script>

<div id="latest">
    <h3>Latest Product</h3>

        <?php
        if(mysqli_num_rows($latest_product)>0) {   ?>
        <?php while ($row = mysqli_fetch_assoc($latest_product)) { ?>
       <div class="late">
            <div class="card_box">
                <div class="card_image">
                    <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                        <img src="<?php echo IMAGE_URL . $row['pro_image'];?>" ></a>
                </div>
                <div class="card_text">
                    <h4>
                        <?php echo $row['pro_name']; ?>
                        </a>
                    </h4>
                    <p>
                        <?php
                        if(strlen($row['pro_description']) > 100){
                            echo substr($row['pro_description'],0,100) . '...';
                        }else{
                            echo $row['pro_description'];
                        }
                        ?>
                    </p>
                    <p class="price">
                        <?php
                        echo "₹".$row['pro_price'];
                        ?>

                    </p>
                </div>
                <div class="button-group">
                    <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                        <button type="button"
                        <i class="fa fa-search-plus"></i>
                        View More</button></a>
                </div>
            </div>
    </div>
    <?php }  } ?>
</div>
 <div class="clear"></div>

    <div id="desktop">
        <h3>Desktop</h3>
            <?php
            if(mysqli_num_rows($desktop)>0) {   ?>
            <?php while ($row = mysqli_fetch_assoc($desktop)) { ?>
                    <div class="late">
                        <div class="card_box">
                            <div class="card_image">
                                <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                    <img src="<?php echo IMAGE_URL . $row['pro_image'];?>"></a>
                            </div>
                            <div class="card_text">
                                <h4>
                                    <?php echo $row['pro_name']; ?>

                                </h4>
                                <p>
                                    <?php
                                    if(strlen($row['pro_description']) > 100){
                                        echo substr($row['pro_description'],0,100) . '...';
                                    }else{
                                        echo $row['pro_description'];
                                    }
                                    ?>
                                </p>
                                <p class="price">
                                    <?php
                                    echo "₹".$row['pro_price'];
                                    ?>

                                </p>
                            </div>
                            <div class="button-group">
                                <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                    <button type="button"
                                    <i class="fa fa-search-plus"></i>
                                    View More</button></a>
                            </div>
                        </div>
                    </div>
                <?php }  } ?>
        </div>
        <div class="clear"></div>
    <div id="laptop">
        <h3>Laptop</h3>

            <?php
            if(mysqli_num_rows($laptop)>0) {   ?>
            <?php while ($row = mysqli_fetch_assoc($laptop)) { ?>
                    <div class="late">
                        <div class="card_box">
                            <div class="card_image">
                                <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                    <img src="<?php echo IMAGE_URL . $row['pro_image'];?>" alt="Motorola" title="MacBook" width="200" height="200"></a>
                            </div>
                            <div class="card_text">
                                <h4>
                                    <?php echo $row['pro_name']; ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php
                                    if(strlen($row['pro_description']) > 100){
                                        echo substr($row['pro_description'],0,100) . '...';
                                    }else{
                                        echo $row['pro_description'];
                                    }
                                    ?>
                                </p>
                                <p class="price">
                                    <?php
                                    echo "₹".$row['pro_price'];
                                    ?>

                                </p>
                            </div>
                            <div class="button-group">
                                <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                    <button type="button"
                                    <i class="fa fa-search-plus"></i>
                                    View More</button></a>
                            </div>
                        </div>
                    </div>
                <?php }  } ?>
    </div>


    <div class="clear"></div>
    <div id="mobile">
        <h3>Mobiles</h3>

            <?php
            if(mysqli_num_rows($mobile)>0) {   ?>
            <?php while ($row = mysqli_fetch_assoc($mobile)) { ?>
                    <div class="late">
                        <div class="card_box">
                            <div class="card_image">
                                <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                    <img src="<?php echo IMAGE_URL . $row['pro_image'];?>" ></a>
                            </div>
                            <div class="card_text">
                                <h4>
                                    <?php echo $row['pro_name']; ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php
                                    if(strlen($row['pro_description']) > 100){
                                        echo substr($row['pro_description'],0,100) . '...';
                                    }else{
                                        echo $row['pro_description'];
                                    }
                                    ?>
                                </p>
                                <p class="price">
                                    <?php
                                    echo "₹".$row['pro_price'];
                                    ?>

                                </p>
                            </div>
                            <div class="button-group">
                                <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                <button type="button"
                                <i class="fa fa-search-plus"></i>
                                    View More</button></a>
                            </div>
                        </div>
                    </div>
                <?php }  } ?>
    </div>
    <div class="clear"></div>
<div id="camera">
    <h3>Cameras</h3>

        <?php
        if(mysqli_num_rows($camera)>0) {   ?>
        <?php while ($row = mysqli_fetch_assoc($camera)) { ?>
                <div class="late">
                    <div class="card_box">
                        <div class="card_image">
                            <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                <img src="<?php echo IMAGE_URL . $row['pro_image'];?>" alt="Motorola" title="MacBook" width="200" height="200"></a>
                        </div>
                        <div class="card_text">
                            <h4>
                                <?php echo $row['pro_name']; ?>
                                </a>
                            </h4>
                            <p>
                                <?php
                                if(strlen($row['pro_description']) > 100){
                                    echo substr($row['pro_description'],0,100) . '...';
                                }else{
                                    echo $row['pro_description'];
                                }
                                ?>
                            </p>
                            <p class="price">
                                <?php
                                echo "₹".$row['pro_price'];
                                ?>

                            </p>
                        </div>
                        <div class="button-group">
                            <a href="<?php echo "product/description.php?id=" . $row['pro_id']; ?>">
                                <button type="button"
                                <i class="fa fa-search-plus"></i>
                                View More</button></a>
                        </div>
                    </div>
                </div>
            <?php }  } ?>
</div>
<div class="clear"></div>
<?php
include_once 'footer.php';
?>
</body>
</html>
