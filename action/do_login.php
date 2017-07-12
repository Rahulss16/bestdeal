<?php

include_once '../config/config.php';

$username='';
$password='';
$error=[];
if (!empty($_POST['email'])) {
    $username = $_POST['email'];
} else {
    $error['email'] = 'please enter email';

}

if (!empty($_POST['pass'])) {
    $password = $_POST['pass'];
} else {
    $error['pass'] = 'please enter password';

}
if (!empty($error)){
    $_SESSION['errors'] =$error;
    header("Location:../login.php");
    die;
}

//login
login($username,$password);
function login($email,$pw){
    $db=mysqli_connect('localhost','root','password','employee');
    $sql="SELECT * FROM tbl_employe
          WHERE email='".$email."'
          AND password='".$pw."'";



    if (!$result = $db->query($sql)) {
        return 'There was an error running the query [' . $db->error . ']';
    } else {

        if ($result->num_rows > 0 ) {
            while($row = $result->fetch_assoc()){
                $_SESSION['id'] = $row['id'];
                $_SESSION['is_login'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['name'];

                if( isset($_POST['remember']) && $_POST['remember'] == 1) {

                    setcookie('uname',$email, time()+60*60*7, "/");
                    setcookie('pass',$pw,time()+60*60*7, "/");
                }

            }

            header('location:../index.php');
            //die;
        } else {
            $_SESSION['values'] =$_POST;
            $_SESSION['errors']['wrong_login']= 'Username or password is incorrect';
            header("Location:../login.php");
        }
    }



}

?>