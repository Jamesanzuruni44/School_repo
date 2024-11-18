<?php
 include("../dbConnection/db.php");
 if(isset($_POST['email']));

    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
 

//we are selecting the data from the database
$sql=mysqli_query($conn,"SELECT *FROM admin WHERE 

 email ='$email' AND 
`password`='$password'
");

if(mysqli_num_rows($sql) > 0){
    echo "successful login";
}

else{
    echo "incorrect Username Or Password.!";
}

?>