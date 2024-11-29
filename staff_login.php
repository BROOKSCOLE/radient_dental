<?php
session_start();
if (!isset($_SESSION['staff_logged_in'])) {
    header('Location: staff_login.php');
    exit();
}
?>