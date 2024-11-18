<?php
$host="localhost";
$user="root";
$password="";
$db="schoolapp";

$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){

    echo "not connected";
}
?>