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
    <title>Zenix -  Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- How To Validate Password And Confirm Password Using JQuery - techsolutionstuff.com< -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>




<!--  PHP email send -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$conn = mysqli_connect("127.0.0.1","root","","fyp");
require 'C:\Users\aaddmin\vendor\autoload.php';
	if(isset($_POST['send'])){	
	$email=$_POST['email'];
	
	$mail = new PHPMailer(true); 
	
	try {
		$mail->SMTPDebug = 0;

		$mail->isSMTP();  
		
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true; 
		
		$mail->Username = 'vtctesting2023@gmail.com';                 // SMTP username
		$mail->Password = 'ypxapktmjijmgtqq'; 
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
		$mail->Port = 587; 
		$mail->CharSet ="utf-8";
		$mail->setFrom('xxxx@gmail.com', 'adnan-tech.com');
		$mail->addAddress($email, 'Joe User');
		$mail->isHTML(true);  
		$verification_code=substr(number_format(time()*rand(),0,'',''),0,6);
		$mail->Subject = 'verification_code';
		$mail->Body    = '<p>Your verification code is :<b style="font-size: 30px;">'.$verification_code.'</b></p>';
		$mail->send();
		
		
		
		
		$sql = "UPDATE user SET verification_code ='".$verification_code."' WHERE email ='".$email."' " ;
		mysqli_query($conn,$sql);
		
	}catch (Exception $e) {
    echo '邮件发送失败: ', $mail->ErrorInfo;
}
session_start();
$_SESSION['EM'] = $email;

}

?>


<script type="text/javascript">

$(document).ready(function () {
  
  $("#rg").click(function(){
    document.getElementById("email").value ="";
  var Rcode = $("#code").val();
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
        
       if(Rcode==data[a].verification_code){
        
        window.location.href="page-change-password.php"; 
         break;
       
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
                var code = $("#code").val();
                if (email==""&&code=="") {
                    $("#CheckEmailMatch").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your email!").css("color","red"); 
                    $("#CheckCode").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your Verification Code!").css("color","red"); 
                    return false;
                }else if (email!=""&&code=="") {
                    console.log("byr");
                    $("#CheckEmailMatch").html("").css("color","red"); 
                    $("#CheckCode").html("<i class='fa fa-warning' style='color:red'></i>"+"Plase input your Verification Code!").css("color","red"); 
                    return false;
                } 
               
                
                return true;

            });
        });



 $(document).ready(function () {
  
  $("#email").focusout(function(){
    console.log("hi");
    console.log($("#email").val());
    localStorage.setItem("a", $('#email').val());
});
        });
</script>


<script type="text/javascript">
window.onbeforeunload = function() {
   localStorage.setItem("a", $('#email').val());

}
window.onload = function() {
   var saveValue = localStorage.getItem("a");
  
   document.getElementById("email").value = saveValue;
   if($('#email').val()!=""){
    $("#CheckCode").html("<i class='fa fa-check-circle' style='color:green'></i>"+"Verification Code has already sent please check your email!").css("color","green");
  
   }else if($('#email').val()==""&& $('#code').val()==""){
    $("#CheckCode").html("").css("color","green");

   }else{
    $("#CheckCode").html("<i class='fa fa-warning' style='color:red'></i>"+"Your Verification Code is wrong!").css("color","red");
   }
  }
</script>
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
										<img src="images/logo-full.png" width="85" height="85" alt="">
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form method="post" >
                                        
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email"  name="email" id="email" class="form-control" placeholder="@example.com">
                                            
                                                <div style="margin-top: 7px;" id="CheckEmailMatch"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1"><strong>Verification Code</strong></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button name="send" id="send"   class="btn btn-primary" >Send Code</button>
                                                    
                                                </div>
                                                
                                                <input type="text" name="code" id="code"class="form-control" placeholder="e.g 123456">
                 
                                            </div>
                                            <div style="margin-top: 7px;" id="CheckCode"></div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" name="rg" id="rg" class="btn btn-primary btn-block">submit</button>
                                        </div>
                                    </form>
                                    
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
   
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    
</body>
</html>