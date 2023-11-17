<?php
$servername = "localhost";
$username = "root";
$password = "";
$sdbname ="crud_php";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$sdbname );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}