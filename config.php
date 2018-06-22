<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'system';

$conn = mysqli_connect($server,$user,$pass) or die("error");

$selectdbb = mysqli_connect_db($conn,$db) or die ("error");
?>