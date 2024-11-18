<?php
include("../dbConnection/db.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql=mysqli_query($conn, "SELECT *FROM customers WHERE id='$id'");

    while($row=mysqli_fetch_assoc($sql)){
        $name=$row['name'];
        $email=$row['email'];
        $country=$row['country'];
        $payment=$row['payment'];
    }
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Table</title>
       <!--Bootstrap CSS Link-->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <!--Sweet Alert CSS-->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css"/>
        
        <style>
            .card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.avatar.sm {
    width: 2.25rem;
    height: 2.25rem;
    font-size: .818125rem;
}
.table-nowrap .table td, .table-nowrap .table th {
    white-space: nowrap;
}
.table>:not(caption){
    padding: 0.75rem 1.25rem;
    border-bottom-width: 1px;
}
table th {
    font-weight: 600;
    background-color: "#eeecfd !important";
}

</style> 
<div class="container col-md-9">

                <div class="modal-body">

                <form class="row g-3" method="POST" id="customerform">
                    <div class="col-md-12">
                        <label for="file" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="profile"  id="profile">
                      </div>
            
                    <div class="col-md-6">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name"  id="name" value="<?php echo $name; ?>">
                    </div>

                    <input type="hidden" style="display:none" name="id" value="<?php echo $id; ?>">
            
                    <div class="col-md-6">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email"  id="email" value="<?php echo $email; ?>">
                    </div>
            
                    <div class="col-md-6">
                      <label for="country" class="form-label">Country</label>
                      <input type="text" class="form-control" name="country" id="country" value="<?php echo $country;?>">
                    </div>
            
                    <div class="col-md-6">
                      <label for="payment" class="form-label">Payment Method</label>
                      <select id="payment" name="payment" class="form-select">
                        <option selected value="<?php echo $payment ?>"> <?php echo $payment ?> </option>
                        <option value="M-pesa">M-pesa</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Cash">Cash</option>
                      </select>
                    </div>
                    </form>
                    <br><br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        &nbsp;
                        &nbsp;
                        <button type="button" class="btn btn-primary" onclick="edituser()" >Update Customer</button>
                      </div>
                    
                  
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="create()" >Send message</button>
            </div>-->
          </div>
        </div>
      </div>
</div>

<script>
     function edituser(){
        
        var Mydata= $('#customerform').serialize();
        var id="<?php 

        $_GET['id'];

        ?>";
        
        $.ajax({
        url:'ajax/edit.php?id='+id,
         method: "POST",
         data:Mydata,
         cache:false,
         processData:false,

         success: function (data) {
             
            alert (data);
        }
     });
     }

</script>


    <script src="jquery.js"></script>
  <script src="customer.js"></script>

      <!--Bootstrap JS Link-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <!--sweet Alert JS-->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>  

