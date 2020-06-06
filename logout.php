<?php
session_start();
$_SESSION['status'] = false;
$_SESSION['loginfirst'] = true;

header('location:login.php');
?>