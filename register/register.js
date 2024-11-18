$(document).ready(function(){

    //alert("Testing");
 
 });
 
 function register(){
 
     $name=$("#name").val();
     $email=$("#email").val();
     $password=$("#password").val();
     $conpassword=$("#conpassword").val();
 
     if($name=="" || $email=="" || $password=="" || $conpassword=="" ){
         
       //sweet alert
       Swal.fire({
         icon: "error",
         title: "Oops...",
         text: "Please fill out.!",
       });
 }
 
 else{
     var userdata=$("#register").serialize();
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
 
             //open dashaboard
             //window.location= "../dashboard/index.html";
 
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
 
 