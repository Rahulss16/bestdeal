<?php

session_start();
$db = mysqli_connect('localhost','root','password','employee');

define('SITE_URL' , 'http://localhost/bestdeal/');
define('IMAGE_URL','http://localhost/bestdeal/uploads/');

?>