<?php
session_start();

extract($_POST);
if (strcmp($email, "a@a.a") == 0 && strcmp($password, "aaa") == 0) {
    $_SESSION["login"] = 1;
    header("Location: index.php");
} else if (strcmp($email, "a@a.a") != 0 && strcmp($password, "aaa") == 0) {
    $msg = "Invalid username";
    header("Location: login.php?msg=$msg");
} else if (strcmp($email, "a@a.a") == 0 && strcmp($password, "aaa") != 0) {
    $msg = "Invalid password";
    header("Location: login.php?msg=$msg");
} else {
    $msg = "Invalid username or password";
    header("Location: login.php?msg=$msg");
}
?>