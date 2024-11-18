<?php

include("../../dbConnection/db.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sqluery=mysqli_query($conn,"DELETE FROM customers WHERE id='$id'");


    if($sqluery){

        echo "deleted";
    }else{

        echo "failed to delete";
    }
}





?>