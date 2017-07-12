<?php

include_once '../config/config.php';

$username='';
$password='';
$error=[];

    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $error['username'] = 'please enter Username';

    }

    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $error['password'] = 'please enter password';

    }
    if (!empty($error)) {
        $_SESSION['errors'] = $error;
        header("Location:../index.php");
        die;
    }


//login
login($username,$password);
function login($username,$pw){
    $db=mysqli_connect('localhost','root','password','employee');
    $sql="SELECT * FROM tbl_user
          WHERE username='".$username."'
          AND password='".$pw."'";



    if (!$result = $db->query($sql)) {
        return 'There was an error running the query [' . $db->error . ']';

    } else {

        if ($result->num_rows > 0 ) {
            while($row = $result->fetch_assoc()){
                $_SESSION['id'] = $row['id'];
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $row['name'];

                if( isset($_POST['remember']) && $_POST['remember'] == 1) {

                    setcookie('uname',$username, time()+60*60*7, "/");
                    setcookie('pass',$pw,time()+60*60*7, "/");
                }

            }

          header('location:../dashboard.php');
            //die;
        } else {
            $_SESSION['values'] =$_POST;
            $_SESSION['errors']['wrong_login']= 'Username or password is incorrect';
            header("Location:../index.php");
        }
    }



}

?>