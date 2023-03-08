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
    <title>Zenix - Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<?php
session_start();

?>
<script type="text/javascript">
  
window.onbeforeunload = function() {
   localStorage.setItem("E", $('#val-username').val());
   console.log($('#val-username').val());
}
window.onload = function() {
   var saveValue = localStorage.getItem("E");
   document.getElementById("val-username").value = saveValue;
   console.log("hi");
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
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                <form class="form-valide-with-icon" action="#" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="val-username"
                                                name="val-username" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label"></label>
                                        <div class="input-group transparent-append">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            </div>
                                            <input type="password" class="form-control" id="dz-password"
                                                name="val-password" placeholder="Password *">
                                            <div class="input-group-append show-pass ">
                                                <span class="input-group-text ">
                                                    <i class="fa fa-eye-slash"></i>
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- PHP -->
<?php
 
 if(isset($_POST['login'])){
     
     $email=$_POST['val-username'];
     $password=$_POST['val-password'];
     $conn = mysqli_connect("127.0.0.1","root","","fyp");
     $sql = "SELECT * FROM user " ;
     $rs = 	mysqli_query($conn,$sql)or die(mysqli_error($conn));
     while($rc=mysqli_fetch_assoc($rs)){
         if($email==$rc['email']&&$password==$rc['password']&&$rc['role']== 0){
            $_SESSION["LoginUser"] = $rc['user_name'];
            $_SESSION["LoginUserEmail"] = $rc['email'];
            $_SESSION["LoginUserRole"] = $rc['role'];
            $_SESSION["LoginUserID"] = $rc['user_id'];
            echo "<script>location.href='ProjectPlan(Student).php'</script>";
             
         }else if($email==$rc['email']&&$password==$rc['password']&&$rc['role']== 1){
            $_SESSION["LoginUser1"] = $rc['user_name'];
            $_SESSION["LoginUserEmail1"] = $rc['email'];
            $_SESSION["LoginUserRole1"] = $rc['role'];
            $_SESSION["LoginUserID1"] = $rc['user_id'];
            echo "<script>location.href='ViewProject(Supervisor).php'</script>";
             
         }else if($email==$rc['email']&&$password==$rc['password']&&$rc['role']== 2){
            $_SESSION["LoginUser2"] = $rc['user_name'];
            $_SESSION["LoginUserEmail2"] = $rc['email'];
            $_SESSION["LoginUserRole2"] = $rc['role'];
            $_SESSION["LoginUserID2"] = $rc['user_id'];
            echo "<script>location.href='admin.php'</script>";
         }else if($email==$rc['email']&&$password==$rc['password']&&$rc['role']== 3){
            $_SESSION["LoginUser3"] = $rc['user_name'];
            $_SESSION["LoginUserEmail3"] = $rc['email'];
            $_SESSION["LoginUserRole3"] = $rc['role'];
            $_SESSION["LoginUserID3"] = $rc['user_id'];
            echo "<script>location.href='AssignSupervisor.php'</script>";
        }else if($email==$rc['email']&&$password!=$rc['password']){
           
             echo'<div style="margin-top: 7px; color:red" ><i class="fa fa-warning" style="color:red"></i>Your email or password is wrong!!</div>';
             break;
         }
     }
 }

 ?>
                                    <div style="margin-top: 7px;" id="Check"></div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox ml-1">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="basic_checkbox_1" checked>
                                                <label class="custom-control-label" for="basic_checkbox_1">Remember
                                                    my preference</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="page-forgot-password.php">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"  name="login" id="login" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                    <div class="new-account mt-3">
                                        
                                            
                                                 
                                                    <div class="dropdown">
                                                        <a>Don't have an account? </a> 
                                                       <button type="button" class="btn dropdown " data-toggle="dropdown">
                                                            Sign up
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="page-register(Leader).php">Supervisor</a>
                                                            <a class="dropdown-item " href="page-register(Student).php">Other Members</a>
                                                            
                                                        </div>
                                                    </div>
                                                
                                            
                                                        
                                                   
                                          
                                        
                                      
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

    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Jquery Validation -->
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="js/plugins-init/jquery.validate-init.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script>-->
</body>




</html>