<?php
$conn=mysqli_connect('localhost','root','','api_db');
if($conn->connect_error()){
    die("connection failed:".$conn->connect_error);
}
?>