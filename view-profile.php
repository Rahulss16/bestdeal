<?php

include_once 'header.php';
include_once 'footer.php';
include_once 'config/config.php';

?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <?php
    $sql = "SELECT * FROM tbl_employe";
    $result =  mysqli_query($db,$sql);

    if(mysqli_num_rows($result)>0){
       
        while($row = mysqli_fetch_assoc($result)){


            echo $row["name"];
            echo $row["email"];
            echo $row["mobile"];
        }
    }

    ?>

    </body>
</html>
