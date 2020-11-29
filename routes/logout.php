<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
header("Location: ../dang-nhap.html");
?>