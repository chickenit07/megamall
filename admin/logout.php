<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
unset($_SESSION['flash_message']);
unset($_SESSION['flash_level']);
unset($_SESSION['errors']);

header("Location: login.php");
?>