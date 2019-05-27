<?php
session_start();
$host="localhost";
$user="root";
$password="";
$dbname="agile";

$con = mysqli_connect($host,$user,$password,$dbname);

if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL: " .mysqli_connect_error();
}
?>