<?php
//logout php
session_start();
header('location:index.php');
session_destroy();
?>