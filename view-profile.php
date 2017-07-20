<?php

include_once 'header.php';

include_once 'config/config.php';

?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <?php
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM tbl_employe
              WHERE id=".$id;

    $result =  mysqli_query($db,$sql);

    if(mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_assoc($result)){?>

            <div class="privacy">
                <div class="profile-box">
            <div class="form-group">
                <label>Name: </label>
                <span><?php  echo $row["name"]?></span>
            </div>
                <div class="form-group">
                    <label>Email: </label>
                    <span><?php  echo $row["email"]?></span>
                </div>
                <div class="form-group">
                    <label>Number: </label>
                    <span><?php  echo $row["mobile"]?></span>
                </div>
      <?php
        }
    }

    ?></div>
            </div>
    </body>
</html>
<?php
include_once 'footer.php';
?>