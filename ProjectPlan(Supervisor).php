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

	<title>Project Management System </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	
	<!-- Calendar icon -->
	<link href="vendor/fullcalendar/css/main.min.css" rel="stylesheet">
</head>


<?php
session_start();
?>

<!-- Gantt Chart -->
<script src="lib/d3/d3.min.js"></script>
        <script src="lib/jquery-3.1.0.min.js"></script>
        <script src="dist/d3-gantt.js"></script>
        <link href="dist/d3-gantt.css" rel="stylesheet">






<script type="text/javascript">
	window.onload = function () {//from ww  w . j  a  va2s. c  o  m
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
	}
    function modify(x){
        const form = document.getElementById("form"+x);
		const sender = document.getElementById("sender3"+x);
		const receiver = document.getElementById("receiver3"+x);
        const request=document.getElementById("request3"+x);
        form.submit();
    }
    function cancel(x){
        const form = document.getElementById("form2"+x);
        const request=document.getElementById("request4"+x);
        form.submit();
    }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
										<span><?php echo $_SESSION["LoginUser1"]; ?></span>
										<small>
<?php 
if ($_SESSION["LoginUserRole1"] == 0) {
    echo "Student";
} else if ($_SESSION["LoginUserRole1"] == 1) {
    echo "Supervisor";
} else if ($_SESSION["LoginUserRole1"] == 2) {
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
										<span class="ml-2" >Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<div class="sub-header">
					<div class="d-flex align-items-center flex-wrap mr-auto">
						
						<div class="default-tab">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#Planning"><i class="la la-file-text mr-2"></i> Project Planning</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#Gantt"><i class="la la-align-left mr-2"></i> Gantt Chart</a>
								</li>
								
							</ul>
							
						</div>
					</div>
					<div class="d-flex align-items-center ">

                    <li class="breadcrumb-item"><a>Teams</a></li>
						
					<li class="breadcrumb-item active"><a href="ViewProject(Supervisor).php">View Teams</a></li>
                    <li class="breadcrumb-item active"><a href="ProjectPlan(Supervisor).php">Student Project Plan</a></li>

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
					<h5 class="name"><span class="font-w400">Hello,</span> <?php echo $_SESSION["LoginUser1"]; ?></h5>
					<p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
							data-cfemail="c3aea2b1b2b6a6b9b9b9b983aea2aaafeda0acae">[<?php echo $_SESSION["LoginUserEmail1"]; ?>]</a></p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>

					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

							<i class="fa fa-group"></i>
							<span class="nav-text">Teams</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ViewProject(Supervisor).php">View Teams </a></li>
							

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
				<div class="tab-content">
					<!-- Planning -->
                
				<div class="tab-pane fade show active" id="Planning" role="tabpanel">

					<div class="project-nav">
                        <form id="form1" method="post">
						<div class="card-action card-tabs  mr-auto">
                            
							<ul class="nav nav-tabs style-2">
								<li class="nav-item">
                                <input id="All" name="All" class="btn btn-outline-light"  type='submit' value="All Projects"><span
											class="badge badge-pill shadow-primary badge-primary" style="color:white">
<?php
$groupID = $_SESSION["gp"];;
$conn = mysqli_connect("127.0.0.1","root","","fyp");
$sql3 = "SELECT * FROM project where group_id = $groupID";
$result =mysqli_query($conn,$sql3);
echo mysqli_num_rows($result);

?> 
</span>
								</li>
								<li class="nav-item">
									<input id="Progress" name="Progress" class="btn btn-outline-light"  type='submit' value="On Progress"> 
                                    <span class="badge badge-pill badge-info shadow-info">
<?php

$sql3 = "SELECT * FROM project where Project_State = 'Progress'and group_id = $groupID";
$result1 =mysqli_query($conn,$sql3);
echo mysqli_num_rows($result1);

?>  </span>
								</li>
								<li class="nav-item">
                                <input id="Pending" name="Pending" class="btn btn-outline-light"  type='submit' value="Pending">
										<span class="badge badge-pill badge-warning shadow-warning">
<?php
$sql3 = "SELECT * FROM project where Project_State = 'Pending'and group_id = $groupID";
$result =mysqli_query($conn,$sql3);
echo mysqli_num_rows($result);

?></span>
								</li>
								<li class="nav-item">
                                <input id="Completed" name="Completed" class="btn btn-outline-light"  type='submit' value="Completed">
										<span class="badge badge-pill badge-success shadow-danger">
<?php
$sql3 = "SELECT * FROM project where Project_State = 'Completed'and group_id = $groupID";
$result =mysqli_query($conn,$sql3);
echo mysqli_num_rows($result);




?></span>
								</li>
							</ul>
                            
						</div>
</form>
<div class="row"></div>





							

						<!-- Add Project -->


					
        
             
					<!-- edit form-->
					
					<!-- Upload form -->
					<div class="modal fade" id="upload">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Upload Project</h5>
									<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5>Project Description</h5>
									<textarea id="w3review" class="form-control" name="w3review" rows="5" cols="50"></textarea>
										
									

									<hr>
									<h5>Upload Details</h5>
									<div class="basic-form custom_file_input">

										<div class="input-group mb-3">
											<div class="custom-file">
												<input type="file" class="custom-file-input">
												<label class="custom-file-label">Choose file</label>
											</div>
											<div class="input-group-append">
												<span class="input-group-text">Upload</span>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger light"
										data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
					</div>
    <!-- Main Content -->




    <?php
	
	
    $conn = mysqli_connect("127.0.0.1","root","","fyp");
	$groupID = $_SESSION["gp"];
   


	if (isset($_POST["Progress"])) {
		$sql1 = "SELECT * FROM project WHERE Project_State = 'Progress' and group_id = $groupID";
	} elseif (isset($_POST["Pending"])) {
		$sql1 = "SELECT * FROM project WHERE Project_State = 'Pending' and group_id = $groupID";
	} elseif (isset($_POST["Completed"])) {
		$sql1 = "SELECT * FROM project WHERE Project_State = 'Completed' and group_id = $groupID";
	} else {
		$sql1 = "SELECT * FROM project WHERE group_id = $groupID";
	}
    
	$hvGp=$_SESSION["gp"];;
	if($hvGp==0){

	}else{
	$sqlGetFYPName = "SELECT FYPName FROM fyp WHERE group_id = $groupID";
	$result = mysqli_query($conn, $sqlGetFYPName);
	$row = mysqli_fetch_array($result);
	if($result && mysqli_num_rows($result) > 0){
	$FypName = $row['FYPName'];	}
	}
    
	
	


    $rs=mysqli_query($conn,$sql1);



	
    while($rc= mysqli_fetch_assoc($rs)){
		if(isset($_POST['enter'.$rc['ProjectID']])){
			$_SESSION["enterTask"] = $rc['ProjectID'];
			echo "<script>location.href='ProjectPlanTask(Supervisor).php'</script>";
		}

		
		echo "<script>
		$(document).ready(function () {
		
			$('#EditDeadline" . $rc['ProjectID'] . "').change(function(){
				const start = $('#EditStart" . $rc['ProjectID'] . "').val();
				const Dead = $('#EditDeadline" . $rc['ProjectID'] . "').val();
				if (Dead < start) {
					// Show the error message
					$('#errorMessage" . $rc['ProjectID'] . "').html('<i class=\'fa fa-warning\' style=\'color:red\'></i>'+'Deadline date cannot be before start date!');
				}else{
					$('#errorMessage" . $rc['ProjectID'] . "').html('');

				}
			});	
		});
	</script>";

	echo'<form method="post">
	<div class="modal fade" id="edit'.$rc['ProjectID'] .'">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Grading</h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Score</h5>
					<input type="number" class="form-control" id="Score" name="Score"  max="100" min="0" value="'.$rc['score'].'"
						>								
						
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light"
						data-dismiss="modal">Close</button>
					<button type="submit"id="Edit'.$rc['ProjectID'] .'" name="Edit'.$rc['ProjectID'] .'" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
</form>';

    echo'	<form  method="post"><div class="tab-content project-list-group" id="myTabContent">
    <div class="tab-pane fade active show" id="navpills-1">
        <div class="card">
            <div class="project-info">
                <div class="col-xl-3 my-2 col-lg-4 col-sm-6">
                    <p class="text-secondary mb-1">#FYPTitle: '.$FypName.'</p>
                    <h5 class="title font-w600 mb-2">
                            '.$rc['Project_name'].'</h5>
                    <div class="text-dark"><i class="fa fa-user mr-1"
                            aria-hidden="true"></i>Created by '.$rc['CreateBy'].'</div>
                </div>

                
                <div class="col-xl-3 my-2 col-lg-6 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="power-ic">
                            <i class="fa fa-calendar " style="font-size:24px" aria-hidden="true"></i>
                        </div>
                        <div class="ml-2">
                            <span>Start Date</span>
                            <h5 class="mb-0 pt-1 font-w500 text-black">'.$rc['Project_StartDate'].'</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 my-2 col-lg-4 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="power-ic">
                            <i class="fa fa-calendar-check-o" style="font-size:24px" aria-hidden="true"></i>
                        </div>
                        <div class="ml-2">
                            <span>Deadline</span>
                            <h5 class="mb-0 pt-1 font-w500 text-black">'.$rc['Project_Deadline'].'</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 my-2 col-lg-6 col-sm-6">
                    <div class="d-flex project-status align-items-center">
                        '.($rc['Project_State'] == "Progress" ? "<span class='btn bgl-info text-info status-btn mr-3'>Progress&ensp; </span>" : ($rc['Project_State'] == "Pending" ? '<span class="btn bgl-warning text-warning status-btn mr-3">Pending&ensp;&ensp;</span>' : "<span class='btn bgl-success text-success status-btn mr-3'>Completed</span>")).'
                        <div class="col-xl-2 my-2 col-lg-4 col-sm-6"></div>
                        <div class="dropdown">
                        

                        
                            <div class="d-flex">
							
                                
								<button type="submit" class="btn btn-info shadow btn-xs sharp mr-1"  name="enter'.$rc['ProjectID'] .'" id="enter'.$rc['ProjectID'] .'"><i class="fa fa-bars"></i></button>
                                <a href="#" data-toggle="modal" data-target="#edit'.$rc['ProjectID'] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-graduation-cap"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="col-6">
					<h6>Progress<span class="pull-right">'.$rc['ProgressBar'] .'%</span></h6>
                            <div class="progress ">
							<div class="progress-bar bg-success progress-animated" style="width: '.$rc['ProgressBar'] .'%; height:6px;" role="progressbar"></div>
                            </div>
                    </div>
                
                
            </div>

        </div>

    </div>
</div></form>';

  $Editbutton_name = 'Edit'.$rc['ProjectID'];
  
if (isset($_POST[$Editbutton_name])) {

$EditStart=$_POST['EditStart'.$rc['ProjectID'].''];
  $EditScore=$_POST['Score'];
 

	$sqlGrade = "UPDATE project SET score ='".$EditScore."' WHERE ProjectID = ". $rc['ProjectID'];	
	mysqli_query($conn,$sqlGrade);
	echo "<script>location.href='ProjectPlan(Supervisor).php'</script>";
	
  } 
    }	
    ?>
				




                    
				</div>
				<!-- Gantt Chart -->
				
				<div class="tab-pane fade" id="Gantt" >
					
				<div id="gantt-chart"></div>

				<script>

var act = [];
var dataPoints = [];  
 
  var ajax = new XMLHttpRequest();
  var method ="GET";
  var url ="data1(ganChart).php";
  var asynchronous =true;
  
  ajax.open(method,url,asynchronous);
  ajax.send();
  ajax.onreadystatechange=function(){
   
   if(this.readyState==4&&this.status==200){
    var data=JSON.parse(this.responseText);
  
    for(var a =0;a<data.length;a++){
      
		act.push({ task: data[a].Project_name , description:"States: "+data[a].Project_State });
	  if (data[a].Project_State === "Completed") {
        var fillColor = 'rgb(107,206,41,255)';
        var strokeColor = 'rgb(0, 255, 0)';
      } else if (data[a].Project_State === "Pending") {
        var fillColor = 'rgb(255,165,40,255)';
        var strokeColor = 'rgb(255, 165, 0)';
      } else {
        var fillColor = 'rgb(79,166,252,255)';
        var strokeColor = 'rgb(0, 160, 255)';
      }
      dataPoints.push({
        activity: data[a].Project_name,
        fillColor: fillColor,
        strokeColor: strokeColor,
        start: new Date(data[a].Project_StartDate),
        end: new Date(data[a].Project_Deadline)
      });
     }
    // check if d3 is loaded before calling the gantt chart
    if(typeof d3 !== 'undefined'){
        var gantt = Object.create(d3.ganttChart);
        gantt.init({
          node: '#gantt-chart',
          activities: act,
          data: dataPoints,
          xAxis: {
            interval: d3.timeDay.every(1),
            height: 80,
            label: {
              format: '%Y-%m-%d',
              dy: '-0.5em'
            }
          },
          yAxis: {
            width: 100
          }
        });
        gantt.draw();
    }
   }
  }

</script> 
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
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/fullcalendar/js/main.min.js"></script>
	<script src="js/plugins-init/fullcalendar-init.js"></script>

	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/ProjectPlan(Student).js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>