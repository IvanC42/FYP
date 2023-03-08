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

	<title>Zenix - Crypto Admin Dashboard </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Calendar icon -->
	<link href="vendor/fullcalendar/css/main.min.css" rel="stylesheet">
</head>
<?php
session_start();

?>
<script type="text/javascript">
	window.onload = function () {//from ww  w . j  a  va2s. c  o  m
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
	}

</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script >





</script>


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
									<svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor"
										stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
										class="css-i6dzq1">
										<path
											d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
											style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
									<svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" class="feather feather-minimize">
										<path
											d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"
											style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link  ai-icon" href="javascript:void(0)" role="button"
									data-toggle="dropdown">
									<svg class="bell-icon" width="24" height="24" viewbox="0 0 28 28" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z"
											fill="#EB8153"></path>
									</svg>
									<div class="pulse-css"></div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0)">See all notifications <i
											class="ti-arrow-right"></i></a>
								</div>
							</li>
							

							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<img src="images/Untitled-1.jpg" width="20" alt="">
									<div class="header-info">
										<span>Johndoe</span>
										<small>Supervisor</small>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ml-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path
												d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
											</path>
											<polyline points="22,6 12,13 2,6"></polyline>
										</svg>
										<span class="ml-2">Inbox </span>
									</a>
									<a href="page-login.html" class="dropdown-item ai-icon">
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
						
						<div class="default-tab">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#Planning"><i class="la la-group mr-2"></i>View Teams </a>
								</li>
								
								
							</ul>
							
						</div>
					</div>
					<div class="d-flex align-items-center ">


						<li class="breadcrumb-item"><a>Teams</a></li>
						
						<li class="breadcrumb-item active"><a href="ViewProject(Supervisor).php">View Teams</a></li>

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
		<script>
  

</script>
		<div class="content-body">
			<div class="container-fluid">
				
				<div class="tab-content">
					<!-- Planning -->
				


                     <!-- Find Group
                    <div class="input-group col-sm">
					
									
									<select class="form-control default-select" id="inlineFormCustomSelect" name="inlineFormCustomSelect">
										<option selected="" value="all">All</option>
										<option value="2">Completed</option>
										<option value="1">In Progress</option>
										<option value="0">Pending</option>
									</select>
								
				
                    </div>
                     -->
                    <div class="col-xl-3 my-2 col-lg-4 col-sm-6">

                    </div>
					
                    <!-- Find Group -->
                    <!-- Group -->
				
						<?php
$conn = mysqli_connect("127.0.0.1","root","","fyp");

$loginId=$_SESSION["LoginUserID1"];



$sql = "SELECT * FROM project_group WHERE supervisor_id='$loginId'";

$rs=mysqli_query($conn,$sql);

	
while($rc = mysqli_fetch_assoc($rs)){
	

$sql1 = "SELECT * FROM fyp WHERE group_id = " . $rc['group_id'];
$rs1=mysqli_query($conn,$sql1);
$rc1=mysqli_fetch_assoc($rs1);

$sql2 = "SELECT user.user_name  FROM user INNER JOIN  student_in_group  on user.user_id = student_in_group.student_id where group_id = " . $rc['group_id'];
$rs2=mysqli_query($conn,$sql2);
$student_names = array();
while($rc2 = mysqli_fetch_assoc($rs2)){
	$student_names[] = $rc2['user_name'];
}
$sql3 = "SELECT user.user_name  FROM user INNER JOIN  student_in_group  on user.user_id = student_in_group.student_id where student_in_group.role = 0 and group_id = " . $rc['group_id'];
$rs3=mysqli_query($conn,$sql3);
$rc3 = mysqli_fetch_assoc($rs3);





if(mysqli_num_rows($rs1)>0){
	
$sqlGrade= "SELECT score  FROM project where group_id = " . $rc['group_id'];
$rsGrade=mysqli_query($conn,$sqlGrade);
$student_score = array();
while($rcGrade = mysqli_fetch_assoc($rsGrade)){

$student_score[] = $rcGrade['score'];

}
$totalScore = 0;
foreach ($student_score as $score) {
    $totalScore += $score;
}
if($totalScore==0){
	$grading = "--";
}else{
	$average_score = $totalScore / count($student_score);
	
	if ($average_score >= 75) {
		$grading = "A";
	} else if ($average_score >= 70 && $average_score < 75) {
		$grading = "A-";
	} else if ($average_score >= 67 && $average_score < 70) {
		$grading = "B+";
	} else if ($average_score >= 63 && $average_score < 67) {
		$grading = "B";
	} else if ($average_score >= 60 && $average_score < 63) {
		$grading = "B-";
	} else if ($average_score >= 57 && $average_score < 60) {
		$grading = "C+";
	} else if ($average_score >= 53 && $average_score < 57) {
		$grading = "C";
	} else if ($average_score >= 50 && $average_score < 53) {
		$grading = "C-";
	} else {
		$grading = "F";
	}

}



echo'
						
						<form method="post" >
						
						
						<div class="card project-card">
							<div class="card-body">
								<div class="d-flex mb-4 align-items-start">
									<div class="dz-media mr-3">
										<img src="images/logos/teams.png" class="img-fluid" alt="">
									</div>
									<div class="mr-auto">
									<p class="text-primary mb-1">#Group' . $rc['group_id'] . '</p>
										<h5 class="title font-w600 mb-2"><a href="post-details.html" class="text-black">FYP Name:'.$rc1['FYPName'].'</a></h5>
										<span>Group Leader :'.$rc3['user_name'].'</span>
									</div>
                                    <button type="submit" id="View'.$rc1['fypID'].'" name="View'.$rc1['fypID'].'"  class="btn btn-success shadow sharp  mr-3">View Details</button>
                                    </div>
								
								<div class="d-flex flex-wrap align-items-center">
									<div class="mr-auto mb-4">
									<div>Members Name:<span class="text-black ml-3 font-w600">' . implode(',', $student_names) . '</span></div>
										<div>Number Of Members:<span class="text-black ml-3 font-w600">'.$num_students = count($student_names).'/4</span></div>
										
									</div>
									
									<div class="d-flex align-items-center mb-4">
										<div class="text-center border-bx mr-3 " >
											<span>Grade</span>
											<p class="mb-0 pt-1 font-w500 text-black">'.$grading.'</p>
										</div>									
									</div>
								</div>								
							</div>
						</div>	
					</form>';
					$button_enter = 'View'.$rc1['fypID'];
					if(isset($_POST[$button_enter])){
						$_SESSION["gp"]=$rc['group_id'];
						echo "<script>location.href='ProjectPlan(Supervisor).php'</script>";
				}

}else{
	echo'
						
						<form method="post" >
						
						
						<div class="card project-card">
							<div class="card-body">
								<div class="d-flex mb-4 align-items-start">
									<div class="dz-media mr-3">
										<img src="images/logos/teams.png" class="img-fluid" alt="">
									</div>
									<div class="mr-auto">
									<p class="text-primary mb-1">#Group' . $rc['group_id'] . '</p>
										<h5 class="title font-w600 mb-2"><a href="post-details.html" class="text-black">FYP Name:No Title</a></h5>
										<span>Group Leader :'.$rc3['user_name'].'</span>
									</div>
                                
                                    </div>
								
								<div class="d-flex flex-wrap align-items-center">
									<div class="mr-auto mb-4">
									<div>Members Name:<span class="text-black ml-3 font-w600">' . implode(',', $student_names) . '</span></div>
										<div>Number Of Members:<span class="text-black ml-3 font-w600">'.$num_students = count($student_names).'/4</span></div>
										
									</div>
									
									<div class="d-flex align-items-center mb-4">
										<div class="text-center border-bx mr-3 " >
											<span>Grade</span>
											<p class="mb-0 pt-1 font-w500 text-black">--</p>
										</div>									
									</div>
								</div>								
							</div>
						</div>	
					</form>';
}
					
}



						
						
						?>
					
				

					
				
				
                    <!-- Group -->
				</div>
				<!-- Gantt Chart -->
				
				
				

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