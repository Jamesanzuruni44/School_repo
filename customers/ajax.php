<?php
 include("../dbConnection/db.php");
 if(isset($_POST['name']));

    $name=$_POST['name'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $payment=$_POST['payment'];
    $date=date('d-m-Y H:i:s');

//we are inserting data into database
$sql=mysqli_query($conn,"INSERT INTO customers SET

 `name`='$name',
 email ='$email',
`country`='$country',
payment='$payment'
");

if($sql){
    echo "successful";
}


else{
    echo "failed to create, try again later";
}

    


?>