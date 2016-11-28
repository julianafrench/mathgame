<?php
session_start();
extract($_POST);

$error = "<p style='color:red'>Email or password is incorrect.</p>";
$_SESSION["email"] = $email;
$_SESSION["pwd"] = $password;

if ($email == "a@a.a" && $password == "aaa") {
    header("Location:index.php");
    die();
} else { 
    header("Location:login.php?msg=$error");
    die();
}

?>