<?php

include("../../dbConnection/db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = ($_POST['id']);
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $country = ($_POST['country']);
    $payment = ($_POST['payment']);

    $query = mysqli_query($conn, "UPDATE customers SET `name` = '$name',
     email = '$email', country = '$country', 
     payment = '$payment' WHERE id = '$id'");
    if (($query)) {
   
        echo "$name.$email.$id";
    }else{

        echo "failed to update";
    }

}


?>
