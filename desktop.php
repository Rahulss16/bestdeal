<html>

<body><?php


include_once "../index.html";

$qry="SELECT * FROM tbl_product";

$result = mysqli_query($db,$qry);
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['pro_id'];
        echo $row['pro_name'];
        echo $row['pro_title'];
        echo $row['pro_description'];

    ?> <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="product-thumb transition">
            <div class="image">
                <a href="#">
                </a>
            </div>
            <div class="caption">
                <h4><a href="#"><?php echo $row['pro_name']; ?></a></h4>

            </div>
            <div class="button-group">
                <button type="button" onclick="cart.add('43');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>
            </div>
        </div>
    </div>
        <?php
    }
}
?>












</body>
</html>
