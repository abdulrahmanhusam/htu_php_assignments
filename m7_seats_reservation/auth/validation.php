<?php

session_start();
include '../functions.php';


$_SESSION['error'] = null;



if ($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST)) {
    die("You are a bad guy and you are trying to access this code directly!");
}

$email= isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';

if (!empty($email) && !empty($password)) {
    login($email, $password);
} else {
    $erroe = true;
    $error_msg = "please fill all the fields";
}


if ($error) {
    $_SESSION['error'] = $error_msg;
    header('Location: ../login.php');
} else {
    header('Location: ./home.php');
}
