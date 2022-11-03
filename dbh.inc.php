<?php
$conn=mysqli_connect('localhost','root','','eco') ;
if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}