<?php
include_once '../config/config.php';
unset($_SESSION);
session_destroy();
header("Location:../index.php");


?>