<?php
$host="localhost";
$username="Kuralarasan";
$password="123456789";
$db_name="kural";

$conn=mysqli_connect($host,$username,$password,$db_name);

if(!$conn){
    die("connection failed:".mysqli_connect());
}

?>