<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['cart']);

header("Location: login.php");
?>