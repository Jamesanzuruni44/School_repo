<?php 

include("../../dbConnection/db.php");

$sql=mysqli_query($conn,"SELECT *FROM `admin`");

$no="1";
while($row=mysqli_fetch_assoc($sql)){


    echo 
   "
    <tr>
        <td>". $no++."</td>
        <td>".strtoupper($row['name'])."</td>
        <td>".strtoupper($row['email'])."</td>
        <td><button class='btn btn-info'>Edit</button></td>
        <td><button class='btn btn-danger'>Delete</button></td>

</tr>";

}


?>