<?php

session_start();
include '../functions.php';

$dname = isset($_POST['display_name']) ? $_POST['display_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null ;

$_SESSION['error'] = null;


if ($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST)) {
    die("You are a bad guy and you are trying to access this code directly!");
}


$error = false;
$error_msg = '';


if (!empty($email) && !empty($password)  && !empty($dname)) {
    add_user($dname, $email, $password);
} else {
    $error_msg = "Please Fill all the Fields";
    $error = true;
}


if ($error) {
    $_SESSION['error'] = $error_msg;
    header('Location: ../index.php');
} else {
    $_SESSION['dispaly_name'] = array('display_name' => $dname);
    header('Location: ../home.php');
}
