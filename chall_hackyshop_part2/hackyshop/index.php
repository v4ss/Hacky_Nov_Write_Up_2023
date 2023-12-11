<?php
session_start();
$_SESSION["file"] = "csv/file.csv";
header('Location: store/index.php');
?>