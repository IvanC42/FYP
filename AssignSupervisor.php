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
							

							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<img src="images/Untitled-1.jpg" width="20" alt="">
									<div class="header-info">
										<span><?php echo $_SESSION["LoginUser3"]; ?></span>
										<small>
<?php 
 if ($_SESSION["LoginUserRole3"]== 3){
    echo "Project Coordinator";
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
									<a class="nav-link active" data-toggle="tab" href="#Planning"><i class="la la-file-text mr-2"></i>Assign Supervisor</a>
								</li>
								
							</ul>
							
						</div>
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
					<h5 class="name"><span class="font-w400">Hello,</span> <?php echo $_SESSION["LoginUser3"]; ?></h5>
					<p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
							data-cfemail="c3aea2b1b2b6a6b9b9b9b983aea2aaafeda0acae">[<?php echo $_SESSION["LoginUserEmail3"]; ?>]</a></p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>

					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

							<i class="fa fa-group"></i>
							<span class="nav-text">Assign</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="AssignSupervisor.php">Assign Supervisor </a></li>
							

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

				<button type="button" class="btn btn-rounded btn-primary"
							><span class="btn-icon-left text-primary"><i class="fa fa-plus "></i>
							</span>Assign</button>
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="table-responsive">
					<table class="table table-responsive-md">
						<thead>
							<tr>
								<th><strong>GroupID</strong></th>
								<th><strong>Member</strong></th>
								<th><strong>LeaderName</strong></th>
                                <th><strong>Supervisor</strong></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
                            <?php
							function randomName() {
						    $conn = mysqli_connect("127.0.0.1","root","","fyp");
                            $sql = "SELECT user_name FROM user WHERE role=1";
                            $rs=mysqli_query($conn,$sql);
							$names = array();
							while($rc=mysqli_fetch_assoc($rs)){
								array_push($names,$rc['user_name']);
							}
								return $names[rand ( 0 , count($names) -1)];
							}
                            $conn = mysqli_connect("127.0.0.1","root","","fyp");
                            $sql1 = "SELECT group_ID FROM project_group ";
                            $rs=mysqli_query($conn,$sql1);
                            while ($rc = mysqli_fetch_assoc($rs)) {
                                $groupID=$rc['group_ID'];
                                $sql2="SELECT student_id,user_name FROM student_in_group,user WHERE student_in_group.student_id=user.user_id AND student_in_group.role=0 and group_id=$groupID ";
                                $rs2=mysqli_query($conn,$sql2);
                                $rc2 = mysqli_fetch_assoc($rs2);
								$sql3="SELECT student_id,user_name FROM student_in_group,user WHERE student_in_group.student_id=user.user_id AND student_in_group.role=1 and group_id=$groupID ";
								$rs3=mysqli_query($conn,$sql3);
								$memeber=array();
								while($rc3=mysqli_fetch_assoc($rs3)){
									array_push($memeber,$rc3['user_name']);
								}
                                echo "<tr>	
								<td><strong>$groupID</strong></td>
								<td><div class='d-flex align-items-center'><span class='w-space-no'</span>";
								foreach ($memeber as $value){
									echo "$value <br>" ;
								}
								echo "
								</div></td>
								<td>".$rc2['user_name']."</td>";
                               echo "<td>";
							   print randomName();
							echo  "</td>
							</tr>";
                            }
                            ?>
						</tbody>
					</table>
				</div>
            </div>
        </div>
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    
</body>
</html>