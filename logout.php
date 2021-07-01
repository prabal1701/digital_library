<?php
session_start();
session_destroy();
header('location:http://localhost/BRM2/login.php');
?>