<?php 
if(!isset($_SESSION['username'])) {
    header("location: login.php");
}

$username = $_SESSION['username'];

?>