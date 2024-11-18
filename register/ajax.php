<?php
 include("../dbConnection/db.php");
 if(isset($_POST['name']));

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
    $date=date('Y-m-d H:i:s');

    $password=md5($password);
    $check=mysqli_query($conn,"SELECT email FROM admin WHERE 
    email='$email'");

    if(mysqli_num_rows($check) > 0){

        echo "You are already registered, please login";
    }else{
 
 

//we are inserting  the data from the database
$sql=mysqli_query($conn,"INSERT INTO admin SET 

 `name`='$name',
 email ='$email',
`password`='$password'
");

if($sql){
    echo "successful";
}


else{
    echo "failed to register, try again later";
}

    }
?>