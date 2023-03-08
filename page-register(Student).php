<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
    <title>Project Managment System  </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <!-- sweet alert -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>


<script>
  function UpdateSuccess(){
  Swal.fire({
  icon: 'success',
  title: 'Register Success!',
  confirmButtonText: 'OK',
  
}).then(function() {
    window.location = "page-login.php";
});
 }
</script>


 <!-- How To Validate Password And Confirm Password Using JQuery - techsolutionstuff.com< -->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
 $(document).ready(function () {
   $("#ConfirmPassword").on('keyup', function(){
    var password = $("#dz-password").val();
    var confirmPassword = $("#ConfirmPassword").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Password does not match !").css("color","red");
    else
        $("#CheckPasswordMatch").html("<i class='fa fa-check-circle' style='color:green'></i>"+"Password match !").css("color","green");
   });
});
</script>

<script type="text/javascript">
$(document).ready(function () {
  
   $("#email").focusout(function(){
   var email = $("#email").val();
   var ajax = new XMLHttpRequest();
   var method ="GET";
   var url ="data.php";
   var asynchronous =true;
   
   ajax.open(method,url,asynchronous);
   ajax.send();
   ajax.onreadystatechange=function(){
    
    if(this.readyState==4&&this.status==200){
      var data=JSON.parse(this.responseText);
      for(var a =0;a<data.length;a++){
        if(email==data[a].email){
          localStorage.clear();
          sessionStorage.setItem("Email", data[a].email);
          break
        }  
      }
    }
   }
  });
}); 

$(document).ready(function () {
  
  $("#Phone").focusout(function(){
  var Phone = $("#Phone").val();
  var ajax = new XMLHttpRequest();
  var method ="GET";
  var url ="data.php";
  var asynchronous =true;
  
  ajax.open(method,url,asynchronous);
  ajax.send();
  ajax.onreadystatechange=function(){
   
   if(this.readyState==4&&this.status==200){
     var data=JSON.parse(this.responseText);
     for(var a =0;a<data.length;a++){
       if(Phone==data[a].phone_number){
         localStorage.clear();
         console.log("Hello world!");
         sessionStorage.setItem("Phone", data[a].phone_number);
         break
       }  
     }
   }
  }
 });
}); 
</script> 

<script type="text/javascript">
$(function () {
  $("#rg").click(function () {
   
            var email = $("#email").val();
            var name = $("#name").val();
            var password = $("#dz-password").val();
            var confirmPassword = $("#ConfirmPassword").val();
            var Phone = $("#Phone").val();
            
            


            if (password != confirmPassword) {
                return false;
            }else if (email==""&&Phone==""&&name==""&&password==""&&confirmPassword==""){  
              $("#CheckEmailMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your email!").css("color","red");    
              $("#CheckPasswordMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your password!").css("color","red");
              $("#CheckPassword").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your confirm password!").css("color","red");
              $("#CheckPhone").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your phone number!").css("color","red");
              $("#CheckName").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your name!").css("color","red");
              return false;
            }else if (password==""&&confirmPassword==""){  
    
              $("#CheckPasswordMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your password!").css("color","red");
              $("#CheckPassword").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your confirm password!").css("color","red");       
              $("#CheckName").html("").css("color","red");
              return false;
            }
            
            else if (email==sessionStorage.getItem("Email")&&Phone==sessionStorage.getItem("Phone")){  
              $("#CheckEmailMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Email is already used!").css("color","red");
              $("#CheckPhone").html("<i class='fa fa-warning' style='color:red'></i>"+"Phone is already used!").css("color","red");
              $("#CheckPassword").html("").css("color","red");
              
              $("#CheckName").html("").css("color","red");
              return false;
            }else if (email!=sessionStorage.getItem("Email")&&Phone!=sessionStorage.getItem("Phone")){  
              $("#CheckEmailMatch").html("<i class='fa fa-check-circle' style='color:green'></i>"+"Email can be used!").css("color","green");
              $("#CheckPhone").html("<i class='fa fa-check-circle' style='color:green'></i>"+"Phone can be used!").css("color","green");
              $("#CheckPassword").html("").css("color","red");
              
              $("#CheckName").html("").css("color","red");
              return true;
            }else if (email!=sessionStorage.getItem("Email")&&Phone==sessionStorage.getItem("Phone")){  
              $("#CheckEmailMatch").html("<i class='fa fa-check-circle' style='color:green'></i>"+"Email can be used!").css("color","green");
              $("#CheckPhone").html("<i class='fa fa-warning' style='color:red'></i>"+"Phone is already used!").css("color","red");
              $("#CheckPassword").html("").css("color","red");
              
              $("#CheckName").html("").css("color","red");
              return false;
            }else if (email==sessionStorage.getItem("Email")&&Phone!=sessionStorage.getItem("Phone")){  
              $("#CheckEmailMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Email is already used!").css("color","red");
              $("#CheckPhone").html("<i class='fa fa-check-circle' style='color:green'></i>"+"Phone can be used!").css("color","green");
              $("#CheckPassword").html("").css("color","red");
              $("#CheckName").html("").css("color","red");
              return false;
            }

            
           
            
            return true;
        

        

        });
    });
</script>



 <!-- PHP -->
 <?php
 
	if(isset($_POST['rg'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$np =$_POST['np'];
    $Phone =$_POST['Phone'];
		$conn = mysqli_connect("127.0.0.1","root","","fyp");
		$sql2 = "SELECT * FROM user " ;
		
	}

	?>


<body class="vh-100">

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo-full.png" width="85" height="85"alt="">
									</div>
                                    <h4 class="text-center mb-4">Sign up your account(Other Members)</h4>
                                      <div class="container">
                                     
                                        <form action="#"method="POST"  id="form1" name="form1">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="username">
                                            <div style="margin-top: 7px;" id="CheckName"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Phone Number</strong></label>
                                            <input type="text" name="Phone" id="Phone" class="form-control" placeholder="e.g. 12345678" pattern="[1-9]{1}[0-9]{7}">
                                            <div style="margin-top: 7px;" id="CheckPhone"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="hello@example.com">
                                            <div style="margin-top: 7px;" id="CheckEmailMatch"></div>
 <!-- PHP -->
<?php
	if(isset($_POST['rg'])){
    $rs=mysqli_query($conn,$sql2);
    while($rc= mysqli_fetch_assoc($rs)){
      
      if($email==$rc['email']){
        
       
        
       
        break;
      }else {
        $sql = "INSERT INTO user(user_name,password,email,role,phone_number) VALUES('".$name."','".$password."','".$email."','0','".$Phone."')" ;
        mysqli_query($conn,$sql);
        echo "<script> UpdateSuccess(); </script>"; 
        break;
         }
      }
     
  }
?>
                                          </div>

                                          
                                        <div class="form-group">
                                              <label class="mb-1"><strong> Password</strong></label>
                                              <div class="input-group transparent-append">
                                              <input onkeyup="trigger()"  name="np" id="dz-password" class="form-control" type="password" > 
                                              <div class="input-group-append show-pass ">
                                                <span class="input-group-text ">
                                                    <i class="fa fa-eye-slash"></i>
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                            </div>
                                        </div>
                                        <div style="margin-top: 7px;" id="CheckPassword"></div>
                                        <div class="form-group">
                                              <label class="mb-1"><strong>Confirm Password</strong></label>
                                              <input type="password" name="password" id="ConfirmPassword" class="form-control" >
   
                                        </div>
                                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                           <div class="indicator">
                                              <span class="weak"></span>
                                              <span class="medium"></span>
                                              <span class="strong"></span>
                                           </div>
                                           <div class="text"></div>
                                          </div>
                                          <div class="text-center mt-4">
                                          <input type="submit" name="rg" id="rg" value="Sign me up" class="btn btn-primary btn-block "/>
	           
                                          
                                        </div>
                                          <div class="new-account mt-3">
                                          <p>Already have an account? <a class="text-primary" href="page-login.php">Sign in</a></p>
                                      </div>
                                        </form>
                                     </div>
                                      <!-- Js for password strength -->
                                     <script>
                                        const indicator = document.querySelector(".indicator");
                                        const input = document.querySelector("#dz-password");
                                        const weak = document.querySelector(".weak");
                                        const medium = document.querySelector(".medium");
                                        const strong = document.querySelector(".strong");
                                        const text = document.querySelector(".text");
                                        const showBtn = document.querySelector(".showBtn");
                                        let regExpWeak = /[a-z]/;
                                        let regExpMedium = /\d+/;
                                        let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
                                        function trigger(){
                                          if(input.value != ""){
                                            indicator.style.display = "block";
                                            indicator.style.display = "flex";
                                            if(input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong)))no=1;
                                            if(input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong))))no=2;
                                            if(input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong))no=3;
                                            if(no==1){
                                              weak.classList.add("active");
                                              text.style.display = "block";
                                              text.textContent = "Your password is too week";
                                              text.classList.add("weak");
 $("#rg").click(function () {
  if(no==1||no==2){
    $("#CheckPasswordMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Your password not safty!").css("color","red");
   return false;
  }else{
  return true;
 }
                                                
});

                                            }
                                            if(no==2){
                                              medium.classList.add("active");
                                              text.textContent = "Your password is medium";
                                              text.classList.add("medium");
                                            }else{
                                              medium.classList.remove("active");
                                              text.classList.remove("medium");

                                            }
                                            if(no==3){
                                              weak.classList.add("active");
                                              medium.classList.add("active");
                                              strong.classList.add("active");
                                              text.textContent = "Your password is strong";
                                              text.classList.add("strong");

                                            }else{
                                              strong.classList.remove("active");
                                              text.classList.remove("strong");
                                            }
                                            showBtn.style.display = "block";
                                            showBtn.onclick = function(){
                                              if(input.type == "password"){
                                                input.type = "text";
                                                showBtn.textContent = "HIDE";
                                                showBtn.style.color = "#23ad5c";
                                              }else{
                                                input.type = "password";
                                                showBtn.textContent = "SHOW";
                                                showBtn.style.color = "#000";
                                              }
                                            }
                                          }else{
                                            indicator.style.display = "none";
                                            text.style.display = "none";
                                            showBtn.style.display = "none";
                                          }
                                        }
                                     </script>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>

</body>
</html>