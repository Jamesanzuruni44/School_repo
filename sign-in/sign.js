$(document).ready(function(){

   // alert("Testing");

});

function login(){

    $email=$("#email").val();
    $password=$("#password").val();

    if($email=="" || $password=="" ){
        
      //sweet alert
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Please fill out.!",
      });
}

else{
    var userdata=$("#signform").serialize();
    $.ajax({
        url:"ajax.php",
        type:"POST",
        data:userdata,
        cache:false,
        processData:false,
        success:function(res){

            if(res=="successful login"){

            Swal.fire({

                title:res,
                text:res,
                icon:"success"

            });

            //open dashaboard
            window.location= "../dashboard/index.html";

        }else{
            
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

