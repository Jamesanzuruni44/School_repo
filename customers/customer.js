$(document).ready(function(){

    //alert("Testing");
 
 });

 function create(){
    $profile=$("#profile").val();
    $name=$("#name").val();
    $email=$("#email").val();
    $country=$("#country").val();
    $payment=$("#payment").val();

    if($profile=="" || $name=="" || $email=="" || $country=="" || $payment=="" ){

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Please fiil out the form.!",
            

        });
    }

    else{
        var userdata=$("#customerform").serialize();
        $.ajax({
            url:"ajax.php",
            type:"POST",
            data:userdata,
            cache:false,
            processData:false,
            success:function(res){
    
                if(res=="successful"){
    
                Swal.fire({
    
                    title:res,
                    text:res,
                    icon:"success"
    
                });
    
                //open customers Table
               // window.location= "customers.html";
    
            }
            
            else{
                
                Swal.fire({
    
                    title:res,
                    text:res,
                    icon:"error"
    
                })
            }
                
            }
    
        })
    }
    }

    function Userdelete(id){

       // var confirm=confirm("Sure to delete user?");


        if(confirm("Sure to delete user?")){
        $.ajax({
            url:'ajax/delete.php?id='+id,
            type:"GET",
            cache:false,
            processData:false,
            success:function(res){
                
                if(res.trim() == "deleted"){
                    Swal.fire({
    
                        title:"User deleted",
                        text:res,
                        icon:"success"
        
                    });

                    window.location.reload();

                }else{

                    Swal.fire({
    
                        title:res,
                        text:res,
                        icon:"error"
        
                    });
                }
            
            }
        })
    }
}





//Edit data in js..!

//Load data
function Useredit(id) {
    // $.ajax({
    //     url:'ajax/edit.php?id='+id,
    //     method: "GET",
    //     cache:false,
    //     processData:false,

    //     success: function (data) {
    //         $('#customerform tbody').html(data);
    //     }
    // });

    window.location="edituser.php?id="+id;
}

// Open edit form
$(document).on('click', '.editButton', function () {
    const name = $(this).data('name');
    const email = $(this).data('email');
    const country = $(this).data('country');
    const payment = $(this).data('payment');



    $('#name').val(name);
    $('#email').val(email);
    $('#country').val(country);
    $('#payment').val(payment);
    $('#customerform').show();
});

// Save edited data
$('#saveButton').on('click', function () {
    const name = $('#name').val();
    const email = $('#email').val();
    const country = $('#country').val();
    const payment = $('#payment').val();

    $.ajax({
        url: "edit.php",
        method: "POST",
        data: { name: name, email: email, country: country, payment: payment },
        success: function (response) {
            alert(response);
            $('#customerform').hide();
            loadUsers();
        }
    });
});

// Initialize data
$(document).ready(function () {
    loadUsers();
});
    
    