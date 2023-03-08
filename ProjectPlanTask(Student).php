<!DOCTYPE html>
<html lang="en">

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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Project Management System</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <!-- sweet alert -->
	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<?php
session_start();

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	window.onload = function () {//from ww  w . j  a  va2s. c  o  m
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
	}
	
</script>




<script>
  function DeleteAll(){
    Swal.fire({
      title: 'Are you sure delete all task?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it !'
	}).then(function(result) {
  if (!result.value) {
    return;
  }
  $.ajax({
    type: "POST",
    url: "delete_all_task.php",
    data: { pjid: "<?php echo $_SESSION["enterTask"]; ?>" },
    success: function(response) {
      window.location = "ProjectPlanTask(Student).php";
    }
  });
});
  }

 
</script>

<style>
	.others {
    color:black

}

</style>
<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->


	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
				<img src="images/logo-full.png" width="70" height="70" alt="">

			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->
<!-- Upload form -->

	
		<!--**********************************
           Edit
        ***********************************-->
        
       
		 <!--**********************************
           add
        ***********************************-->

		<script>
 $(document).ready(function () {

	$("#Deadline").change(function(){
		const startDate = $('#start').val();
		const Deadline = $('#Deadline').val();
		if (Deadline < startDate) {
    // Show the error message
   
	$("#errorMessage").html("<i class='fa fa-warning' style='color:red'></i>"+"Deadline date cannot be before start date!").css("color","red");
  }else{
	$("#errorMessage").html("");
  }
		
	});	
});
</script>
<?php
echo '<form method="post">
<div class="modal fade" id="addTask">

	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Task</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5>Task Name</h5>
				<input type="text" class="form-control" id="TaskName" name="TaskName"
					placeholder="Your Task Name">
				<hr>
				<h5>Person in charge</h5>
				<select id="addPerson" name="addPerson" class="form-control">
					<option value="">--Please choose a person--</option>
					
				</select>
				<hr>
				<h5>Start Date</h5>
				<input type="date" class="form-control" id="start" name="start" min="'.$_SESSION["min"].'" max="'.$_SESSION["max"].'">
				<hr>
				<h5>Deadline Date</h5>
				<input type="date" class="form-control" id="Deadline" name="Deadline"  min="'.$_SESSION["min"].'" max="'.$_SESSION["max"].'">
				<div id="errorMessage" style="color:red"></div>
			   
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger light"
					data-dismiss="modal">Close</button>
				<button type="submit" name="addsubmit" id="addsubmit"class="btn btn-primary">Add</button>
			</div>
		</div>
	</div>

</div>
</form >';


?>

<script type="text/javascript">

   
  var select = document.getElementById("addPerson");
  var ajax = new XMLHttpRequest();
  var method ="GET";
  var url ="data(Groupmate).php";
  var asynchronous =true;
  
  ajax.open(method,url,asynchronous);
  ajax.send();
  ajax.onreadystatechange=function(){
   
   if(this.readyState==4&&this.status==200){
     var data=JSON.parse(this.responseText);
	 console.log(data);
     for(var i =0;i<data.length;i++){
		var option = document.createElement("OPTION");
		option.innerHTML = data[i].user_name;
		option.value = data[i].user_name;
      	select.appendChild(option);
     }
   }
  }

</script>
<!-- PHP(need change) -->
<?php

 if(isset($_POST['addsubmit'])){
		
					
	 $conn = mysqli_connect("127.0.0.1","root","","fyp");
	 $TASKNAME=$_POST['TaskName'];
	 $addPerson=$_POST['addPerson'];
	 $start=$_POST['start'];
	 $Deadline =$_POST['Deadline'];
	 $enter= $_SESSION["enterTask"] ;
	 $gpID=$_SESSION["GroupID"];
	 $sql = "INSERT INTO task(task_name,ChargePerson,Start,status,deadline,ProjectID,group_id ) VALUES('$TASKNAME','$addPerson','$start','1','$Deadline','$enter','$gpID')";	
	 mysqli_query($conn,$sql);
	
 }

 ?>
 
		<!--**********************************
            Header start
       ***********************************-->
	   <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
								<input type="text" class="form-control" placeholder="Find something here...">
								<div class="input-group-append">
									<span class="input-group-text">
										<a href="javascript:void(0)">
											<i class="flaticon-381-search-2"></i>
										</a>
									</span>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right main-notification">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="#">
									<i id="icon-light" class="fa fa-sun-o"></i>
                                    <i id="icon-dark" class="fa fa-moon-o"></i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="#">
                                    <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                    <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                   <svg class="bell-icon" width="24" height="24" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#EB8153"></path>
									</svg>
									<div class="pulse-css"></div>
                                </a>
								<div class="dropdown-menu dropdown-menu-right">
                                    <div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">

                                                        <?php 
													
                                                        $servername = "localhost";
                                                        $username = "root";
                                                        $password = "";
                                                        $dbname = "fyp";
														$loginId=$_SESSION["LoginUserID"];
                                                        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
                                                        $sql='SELECT content,receiver_id,sender_id,request_id,user_name from user,request WHERE request.sender_id=user.user_id AND status=0 AND receiver_id="'.$loginId.'"';
                                                        $rs = mysqli_query($conn, $sql);
                                                        while ($rc = mysqli_fetch_assoc($rs)) {
                                                            $content=$rc["content"];
                                                            $sender_id=$rc['sender_id'];
                                                            $request=$rc['request_id'];
                                                            $receiver=$rc['receiver_id'];
                                                            $sender=$rc['user_name'];
																
															
														echo "
                                                        <li>
                                                        <form method='POST' action='YES.php' id=form$request>
                                                        <input name='receiver3' id='receiver3' type='hidden' value=$receiver />
                                                        <input name='sender3' id='sender3' type='hidden' value=$sender_id />
                                                        <input name='request3' id='request3' type='hidden' value=$request />
                                                        <div class='timeline-panel'>
                                                            <div class='media-body'>
                                                            <h6 class='mb-1'>$content</h6>
														<small class='d-block'>$sender</small>
														<div class='d-flex'>
                                                        <button type='button'  class='btn btn-info shadow btn-xs sharp mr-1' onclick='modify($request)' ><i class='fa fa-check'></i></button>
                                                        </form>
                                                        <form method='POST' action='No.php' id=form2$request>
                                                        <input name='request4' id='request4' type='hidden' value=$request />
                                                        <button type='button' class='btn btn-danger shadow btn-xs sharp mr-1' onclick='cancel($request)'><i class='fa fa-close'></i></button>
                                                        </form>
                                                       </div>
                                                        </div>
                                                    </li>
                                                    ";
                                                        }
                                              
                                                        ?>
										</ul>
									</div>
                                </div>
							</li>
						

							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<img src="images/Untitled-1.jpg" width="20" alt="">
									<div class="header-info">
										<span><?php echo $_SESSION["LoginUser"]; ?></span>
										<small><?php 
if ($_SESSION["LoginUserRole"] == 0) {
    echo "Student";
} else if ($_SESSION["LoginUserRole"] == 1) {
    echo "Supervisor";
} else if ($_SESSION["LoginUserRole"] == 2) {
    echo "Admin";
} 
?></small>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="app-profile.php" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ml-2">Profile </span>
									</a>

									<a href="page-login.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ml-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<div class="sub-header">
					<div class="d-flex align-items-center flex-wrap mr-auto">
						<h5 class="dashboard_bar">Project Task</h5>

					</div>
					<div class="d-flex align-items-center ">


						<li class="breadcrumb-item"><a >Project</a></li>
						<li class="breadcrumb-item active"><a href="ProjectPlan(Student).php">Project Planning</a></li>
                        <li class="breadcrumb-item active"><a href="ProjectPlanTask(Student).php">Project Task</a></li>

					</div>





				</div>

			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">
				<div class="main-profile">
					<div class="image-bx">
						<img src="images/Untitled-1.jpg" alt="">
						<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h5 class="name"><span class="font-w400">Hello,</span> <?php echo $_SESSION["LoginUser"]; ?></h5>
					<p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
							data-cfemail="c3aea2b1b2b6a6b9b9b9b983aea2aaafeda0acae">[<?php echo $_SESSION["LoginUserEmail"]; ?>]</a></p>
							<?php 
					$conn = mysqli_connect("127.0.0.1","root","","fyp");
					$loginId=$_SESSION["LoginUserID"];
					$sql13 = "SELECT group_id FROM student_in_group where student_id = '".$loginId."'";
					$result13 =mysqli_query($conn,$sql13);
					
					if ($result13 && mysqli_num_rows($result13) > 0) {
						$row = mysqli_fetch_assoc($result13);
						$_SESSION["GroupID"]=$row['group_id'];
						echo '<p>Group ' . $row['group_id'] . '</p>';
						
					  } else {
						$_SESSION["GroupID"]=0;
						echo '<p>No Group </p>';
					  }
					 
					?>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>

					<!-- Form Group-->
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="    fa fa-handshake-o"></i>
						<span class="nav-text">Group</span>
					</a>
					<?php 
					$conn = mysqli_connect("127.0.0.1","root","","fyp");
					$loginId=$_SESSION["LoginUserID"];
					$sql13 = "SELECT group_id FROM student_in_group where student_id = '".$loginId."'";
					$result13 =mysqli_query($conn,$sql13);
					
					if ($result13 && mysqli_num_rows($result13) > 0) {
					  } else {
                        echo'					<ul aria-expanded="false">
						<li><a href="creategroup.php">Form Group</a></li>

					</ul>';
					  }
					 
					?>

					<ul aria-expanded="false">
						<li><a href="CheckTeammate.php">Teammate Information</a></li>

					</ul>

					</li>
					<!-- Project-->
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="    fa fa-file-powerpoint-o"></i>
						<span class="nav-text">Project</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="ProjectPlan(Student).php">Project Planning</a></li>

					</ul>


                    <ul aria-expanded="false">
						<li><a href="invitePeople.php">Invite Student</a></li>

					</ul>

					</li>
					<!-- log sheet-->
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="fa fa-file-text-o"></i>
						<span class="nav-text">Log Sheet</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="logsheet.php">Record Log Sheet</a></li>

					</ul>

					</li>
					<!-- Time slot-->
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="fa fa-calendar"></i>
						<span class="nav-text">Time Slot</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="timeslot.php">Create Time Slot</a></li>

					</ul>

					</li>
				</ul>

			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Project</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Project Planning</a></li>
                        </ol>
                    </div>
                </div> -->
              
				<!-- row -->
				<div class="col-lg-12">
                    <div class="card">
					<?php
					
echo '<form method ="post">
<div class="card-header">
<h4 class="card-title">Task Details</h4>
<div class="form-row align-items-center">
	<div class="col-auto my-1">
									
		<select class="mr-sm-2 default-select" id="inlineFormCustomSelect" name="inlineFormCustomSelect">
			<option selected="" value="all">All</option>
			<option value="2">Completed</option>
			<option value="1">In Progress</option>
			<option value="0">Pending</option>
		</select>
	</div>
		
			<button type ="submit" name="check" id="check" class="btn btn-dark"><i class="flaticon-381-search-2"></i></button>
				
			</a>
		
	
</div>	
</div></form>';

                ?>
	
	<?php
	
	$conn = mysqli_connect("127.0.0.1","root","","fyp");
	$sql1 = "SELECT * FROM task WHERE ProjectID='".$_SESSION["enterTask"]."'";
	if(isset($_POST['check'])){
		
		if($_POST['inlineFormCustomSelect']=="all"){
			$sql1 = "SELECT * FROM task WHERE ProjectID='".$_SESSION["enterTask"]."'";
		}else if($_POST['inlineFormCustomSelect']=="2"){
			$sql1 = "SELECT * FROM task WHERE status = 2 and ProjectID='".$_SESSION["enterTask"]."'";
		}else if($_POST['inlineFormCustomSelect']=="0"){
			$sql1 = "SELECT * FROM task WHERE status = 0 and ProjectID='".$_SESSION["enterTask"]."'";
		}else if($_POST['inlineFormCustomSelect']=="1"){
			$sql1 = "SELECT * FROM task WHERE status = 1 and ProjectID='".$_SESSION["enterTask"]."'";
		}
	}
	$rs=mysqli_query($conn,$sql1);
	
	
	


	$gpID=$_SESSION["GroupID"];
	$userNames = array();
	$sql41 = "SELECT user.user_name FROM user INNER JOIN student_in_group ON user.user_id = student_in_group.student_id WHERE student_in_group.group_id = '$gpID'";
	$rs1=mysqli_query($conn,$sql41);




echo'<form method="post">
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-responsive-md">
			<thead>
				<tr>
					
					
					<th><strong>Task Name</strong></th>
					<th><strong>Charge person</strong></th>
					<th><strong>Start Date</strong></th>
					<th><strong>Deadline</strong></th>
					<th><strong>Status</strong></th>
					<th><div class="d-flex">


					

					<button type="submit"  class="btn btn-danger shadow btn-xs sharp mr-1"  name="deleteAllTask"  id="deleteAllTask"><i class="fa fa-trash"></i></button>
					
					
							<a href="#" id="adda" name="adda"data-toggle="modal"data-target="#addTask"class="btn btn-info shadow btn-xs sharp  mr-1"><i
								class="fa fa-plus"></i></a>
					</div></th>
				</tr>
			</thead>

			<tbody>
</form>';

echo "<script>console.log('3');</script>";
	
if(isset($_POST["deleteAllTask"])){
	echo "<script>DeleteAll();</script>";
}


	while($rc1 = mysqli_fetch_assoc($rs1)){
		$userNames[] = $rc1['user_name'];
	}
	
	while($rc = mysqli_fetch_assoc($rs)){

		
		echo "<script>
		
		$(document).ready(function () {
			$('#Deadline1" . $rc['task_id'] . "').change(function(){
				console.log('13');	
				const start = $('#Start1" . $rc['task_id'] . "').val();
				const Dead = $('#Deadline1" . $rc['task_id'] . "').val();
				if (Dead < start) {
					// Show the error message
					$('#errorMessage" . $rc['task_id'] . "').html('<i class=\'fa fa-warning\' style=\'color:red\'></i>'+'Deadline date cannot be before start date!');
				}else{
					$('#errorMessage" . $rc['task_id'] . "').html('');
				
				  }
			
			});
		
		});
	</script>";

	echo'<form method="post">
	<div class="modal fade" id="sug' . $rc['task_id'] . '">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Suggestion</h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
			<h5>Supervisor Suggestion</h5>
			<textarea id="Suggestion" class="form-control" name="Suggestion" rows="5" cols="50" readonly> '.$rc['suggestion'].'</textarea>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light"
						data-dismiss="modal">Close</button>
						</div>
			</div>
		</div>
	</div>
</form>';

		echo'<form method="post">
		<div class="modal fade" id="edit' . $rc['task_id'] . '">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Task</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Task Name</h5>
                        <input type="text" class="form-control" id="tkName" name="tkName"
                            value="' . $rc['task_name'] . '">
                        <hr>
                        <h5>Person in charge</h5>
                        <select id="addPerson1" name="addPerson1" class="form-control">
                            
							<option value="">--Please choose a person--</option>';
							for ($i = 0; $i < count($userNames); $i++) {
								$selected = '';
								if ($userNames[$i] == $rc['ChargePerson']) {
									$selected = 'selected';
								}
								echo '<option value="' . $userNames[$i] . '" ' . $selected . '>' . $userNames[$i] . '</option>';
							}
                            
						echo '</select>
                        <hr>
                        <h5>Start Date</h5>
                        <input type="date" value="' . $rc['Start'] . '" class="form-control" id="Start1' . $rc['task_id'] . '" name="Start1' . $rc['task_id'] . '" min="'.$_SESSION["min"].'" max="'.$_SESSION["max"].'">
                        <hr>
                        <h5>Deadline Date</h5>
                        <input type="date" value="' . $rc['deadline'] . '" class="form-control" id="Deadline1' . $rc['task_id'] . '" name="Deadline1' . $rc['task_id'] . '" min="'.$_SESSION["min"].'" max="'.$_SESSION["max"].'">
                        <div id="errorMessage'.$rc['task_id'] .'" style="color:red"></div>
						<hr>
						
                        <h5>Status</h5>
                        <select id="Status1" name="Status1" class="form-control">
                            
						<option value=1';
						if ($rc['status'] == 1) {
						  echo ' selected';
						}
						echo '>In Progress</option>
											  <option value= 0';
						if ($rc['status'] == 0) {
						  echo ' selected';
						}
						echo '>Pending</option>
											  <option value= 2';
						if ($rc['status'] == 2) {
						  echo ' selected';
						}
						echo '>Completed</option>
                            
                        </select>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light"
                            data-dismiss="modal">Close</button>
                        <button type="submit" name="sb' . $rc['task_id'] . '"    id="sb' . $rc['task_id'] . '" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
	</form>';

	

		echo '<form method="post"><tr>
			
			
			<td><strong>' . $rc['task_name'] . '</strong></td>
			<td><div class="d-flex align-items-center"><span class="w-space-no">' . $rc['ChargePerson'] . '</span></div></td>
			<td>' . $rc['Start'] . '</td>
			<td>' . $rc['deadline'] . '</td>
			<td><div class="d-flex align-items-center">';
			if($rc['status'] == 1) {				
				echo '<i class="fa fa-circle text-info mr-1"></i> In Progress';
			}else if($rc['status'] == 0){
				echo '<i class="fa fa-circle text-warning mr-1"></i> Pending';
			} else {
				echo '<i class="fa fa-circle text-success mr-1"></i> Completed';
			}
			echo '</div></td>
			<td>
				<div class="d-flex">
					<a href="#" data-toggle="modal"  name="edit'.$rc['task_id'] .'"   id="edit'.$rc['task_id'] .'"     data-target="#edit'.$rc['task_id'] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
					
					<a href="#" data-toggle="modal" name="upload'.$rc['task_id'] .'" id="upload'.$rc['task_id'] .'" data-target="#upload'.$rc['task_id'] .'" class="btn btn-dark shadow btn-xs sharp mr-1"><i class="fa fa-upload"></i></a>
					<a href="#" data-toggle="modal"  name="sug'.$rc['task_id'] .'"   id="sug'.$rc['task_id'] .'"     data-target="#sug'.$rc['task_id'] .'" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-tag"></i></a>
			
					<button type="submit" class="btn btn-danger shadow btn-xs sharp mr-1"  name="delete'.$rc['task_id'] .'"  id="delete'.$rc['task_id'] .'"><i class="fa fa-trash"></i></button>
				</div>
			</td>
		</tr></form>';




		$button_name = 'delete'.$rc['task_id'];
if (isset($_POST[$button_name])) {
	$sqlDeleteTask = "DELETE FROM task WHERE task_id  = " . $rc['task_id'];	
	mysqli_query($conn,$sqlDeleteTask);
	echo "<script>location.reload();</script>";
	break;
  } 


  $Editbutton_name = 'sb'.$rc['task_id'];

  if (isset($_POST[$Editbutton_name])) {
	
	$EditStart = $_POST['Start1' . $rc['task_id']];
		$EditPerson=$_POST['addPerson1'];
	  $EditDeadline=$_POST['Deadline1'. $rc['task_id']];
	  $EditStatus=$_POST['Status1'];
		$EditName=$_POST['tkName'];

	  $sqlEdit = "UPDATE task SET task_name='".$EditName."', status='".$EditStatus."', Start='".$EditStart."' , deadline='".$EditDeadline."', ChargePerson='".$EditPerson."' WHERE task_id=".$rc['task_id'];
		mysqli_query($conn,$sqlEdit);
		echo "<script>location.href='ProjectPlanTask(Student).php'</script>";
		
	  } 


	//textvalue need sql
	
	
	echo '<form method="post" enctype="multipart/form-data">
	<div class="modal fade" id="upload'.$rc['task_id'] .'" >
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Project</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>';
			
			 $task_id = $rc['task_id'];
	$Selectsql = "SELECT task_description FROM task WHERE task_id=$task_id";
	 $rs1=mysqli_query($conn,$Selectsql);
    $row1 = mysqli_fetch_array($rs1);

		$detail= $row1['task_description'];
			echo'
			<div class="modal-body">
				<h5>Project Description</h5>
				<textarea id="Description" class="form-control" name="Description" rows="5" cols="50" >'.$detail.'</textarea>
					
				

				<hr>
				<h5>Upload Details</h5>
				<div class="basic-form custom_file_input">

					<div class="input-group mb-3">
					<div class="input-group">
					<div class="custom-file">
						<input type="file" name="file'.$rc['task_id'] .'" id="file'.$rc['task_id'] .'" class="custom-file-input">
						<label class="custom-file-label">Choose file</label>
						
					</div></div></div>';
					
				
					
					echo 'Your File : ';
					
					$task_id = $rc['task_id'];
					$selectfile = mysqli_query($conn, "SELECT file FROM task WHERE task_id=$task_id");
					$row = mysqli_fetch_array($selectfile);
					$file1 = $row['file'];	
					
					echo '<a href="download.php?task_id='.$task_id.'&source=ProjectPlanTask">'.$file1.'</a>';
					
					
				

			echo'
						
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger light"
					data-dismiss="modal">Close</button>
				<button type="submit" name="saveD'.$rc['task_id'] .'" id="saveD'.$rc['task_id'] .'" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
</form>';

$Savebtn = 'saveD'.$rc['task_id'];
$task_id = $rc['task_id'];
if (isset($_POST[$Savebtn])) {
	$description=$_POST['Description'];


	if($_FILES["file" . $rc['task_id']]["name"]==null){
		$sqlSave = "UPDATE task SET  task_description='$description' WHERE task_id=$task_id";
	
}else{
	$file_name = $_FILES["file" . $rc['task_id']]["name"];
	$file_content = base64_encode(file_get_contents($_FILES["file" . $rc['task_id']]["tmp_name"]));	
	$sqlSave = "UPDATE task SET file='$file_name', task_description='$description', file_content='$file_content' WHERE task_id=$task_id";
}
	
	
	
	
	mysqli_query($conn,$sqlSave);
	echo "<script>location.href='ProjectPlanTask(Student).php'</script>";
	
	
}
	}
	
$sqlCalBar = "SELECT * FROM task WHERE group_id='".$_SESSION["GroupID"]."' AND status = 2 AND ProjectID='".$_SESSION["enterTask"]."'";
$numofcompleted = mysqli_num_rows(mysqli_query($conn, $sqlCalBar));
$sqlCalBar1 = "SELECT * FROM task WHERE group_id='".$_SESSION["GroupID"]."' AND ProjectID='".$_SESSION["enterTask"]."'";
$numofall = mysqli_num_rows(mysqli_query($conn, $sqlCalBar1));




if ($numofall > 0) {
$bar = ($numofcompleted / $numofall)*100;

$UpdateBar = "UPDATE project SET ProgressBar=$bar WHERE ProjectID='".$_SESSION["enterTask"]."'";

if($bar==100){
	$UpdateStat = "UPDATE project SET Project_State= 'Completed' WHERE Project_State!= 'Pending' and ProjectID='".$_SESSION["enterTask"]."'";
	mysqli_query($conn, $UpdateStat);
}else if($bar!=100){
	$UpdateStat = "UPDATE project SET Project_State= 'Progress' WHERE Project_State!= 'Pending' and ProjectID='".$_SESSION["enterTask"]."'";
	mysqli_query($conn, $UpdateStat);
}
} else {
	
	$UpdateBar = "UPDATE project SET ProgressBar=0,Project_State= 'Progress' WHERE Project_State!= 'Pending' and ProjectID='".$_SESSION["enterTask"]."'";
}
mysqli_query($conn, $UpdateBar);
?>									
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->


		<!--**********************************
            Footer start
        ***********************************-->

		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--removeIf(production)-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>


	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/ProjectPlan(Student).js"></script>

</body>

</html>