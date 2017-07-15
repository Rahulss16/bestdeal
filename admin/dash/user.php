
<?php
include_once '../config/config.php';
$user = $_GET['user'];
$user_sql = "SELECT * FROM tbl_employe";

$user = mysqli_query($db,$user_sql);
if(mysqli_num_rows($user)>0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($user))
    {
        echo $row["id"];

        echo $row["name"];
        echo "\n"."<br>";
//        echo $row["status"];
    }


}
else
{
    echo "no result";
}



?>