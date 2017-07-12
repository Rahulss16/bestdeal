<?php
include_once ('../header.php');
include_once('../config/config.php');


$category = $_GET['search'];

$category_sql = "SELECT * from tbl_product 
                WHERE 
                  pro_category_id LIKE '%". $category ."%'
                 OR pro_name LIKE  '%". $category ."%'
                 OR pro_title LIKE  '%". $category ."%'
                 OR pro_description LIKE  '%". $category ."%'";

$category  =  mysqli_query($db,$category_sql);

    // output data of each row
    while($row = mysqli_fetch_assoc($category)) { ?>

        <div class="product-thumb transition">
            <div class="image">

                    <img src="<?php echo IMAGE_URL . $row['pro_image'];?>" alt="MacBook" title="MacBook" class="img-responsive"></a></div>
            <div class="caption">
                <h4>

                        <?php echo $row['pro_name']; ?>
                    </a>
                </h4>
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