<?php 

include("../../dbConnection/db.php");

$sql=mysqli_query($conn,"SELECT *FROM `customers`");

$profile="<img src='https://bootdey.com/img/Content/avatar/avatar5.png' class='avatar sm rounded-pill me-3 flex-shrink-0' alt='Customer'>";
while($row=mysqli_fetch_assoc($sql)){


    echo 
   "
   <tr class='align-middle'>

   

        <td>
        <div class='d-flex align-items-center'>
        <img src='https://bootdey.com/img/Content/avatar/avatar5.png' class='avatar sm rounded-pill me-3 flex-shrink-0' alt='Customer'>
        <div>
       
        </div>
        ".ucwords($row['name'])."</td>
        <td>".ucwords($row['email'])."</td>
        <td>".ucwords($row['country'])."</td>
        <td>".ucwords($row['payment'])."</td>
        <td>".date('d-m-Y H:i:s')."</td>

        <td class='text-end'>
        <div class='drodown'>
        <a data-bs-toggle='dropdown' href='#' class='btn p-1'>
        <i class='fa fa-bars' aria-hidden='true'></i>
        </a>
        <div class='dropdown-menu dropdown-menu-end'>
        
        <a href='#!' class='dropdown-item' onclick='Userdelete(".$row['id'].")'>Delete Customer</a>
        <a href='#!' class='dropdown-item' onclick='Useredit(".$row['id'].")'>Edit Customer</a>
        </div>
        </div>
        </td>

                                  
     </tr>";

}


?>

<!--Fetching data from the database...-->
<?php
$result = $connection->query("SELECT * FROM customers");

$output = "";
while ($row = $result->fetch_assoc()) {
    $output .= "
    <tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['country']}</td>
        <td>{$row['payment']}</td>

        <td>
            <button class='editButton'  
                data-name='{$row['name']}' 
                data-email='{$row['email']}'
                data-country='{$row['country']}' 
                data-payment='{$row['payment']}'>Update Customer</button>
        </td>
    </tr>";
}

?>