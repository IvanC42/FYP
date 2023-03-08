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
    <title>Project Management System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-full.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<?php
session_start();
?>
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
            Chat box start
        ***********************************-->
		<!--**********************************
            Chat box End
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
                                                    
                                                        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
                                                        $sql='SELECT content,receiver_id,sender_id,request_id,user_name from user,request WHERE request.sender_id=user.user_id AND status=0';
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
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="page-login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
				<div class="sub-header">
					<div class="d-flex align-items-center flex-wrap mr-auto">
						<h5 class="dashboard_bar">Log Sheet</h5>
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
					<p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3aea2b1b2b6a6b9b9b9b983aea2aaafeda0acae">[<?php echo $_SESSION["LoginUserEmail"]; ?>]</a></p><?php 
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


                    <ul aria-expanded="false">
						<li><a href="invitePeople.php">Invite Student</a></li>

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
				<style>
					html{
						scroll-behavior: smooth;
					}
                    .main {
                        text-align: center;
                    }

					.mainForm {
						width: 98%;
						float: left;
					}
        
                    details > summary {
                        text-align: left;
                        padding: 8px 4px;
                        background-color: #eeeeee;
                        border: none;
                        box-shadow: 1px 1px 2px #bbbbbb;
                        cursor: pointer;
						height: 35px;
                    }
        
                    details > p {
                        background-color: #ffffff;
                        padding: 4px;
                        margin: 0;
                        box-shadow: 1px 1px 2px #bbbbbb;
                    }
        
                    details {
                        margin: 5px;
						width: 100%;
						display: inline;
                    }
        
                    input[type="date"] {
                        background-color: #eeeeee;
						margin: 0;
						height: 20px;
                    } 
        
                    summary > button {
                        float: right;
                        margin-right: 4px;
						border: 0;
                    }

					.btnModify:hover {
						color: grey;
					}

					.btnConfirm:hover {
						color: green;
					}

					.btnCancel:hover, .btnDelete:hover {
						color: red;
					}

					.btnDelete {
						border: 0;
						float: right;
						margin-top: 12px;
						margin-left: 5px;
					}
        
                    textarea {
                        background-color: #ffffff;
                        width: 99%;
                        resize: none;
                        margin: 0;
                    }
					
                    #btnNew {
                        width: 200px;
                        margin-top: 10px;
                    }

					.errorMsg {
						display: none;
						color: #d50000;
					}
                </style>
                <script>
					var editing = 0;

					//when the date is null, the border of datePicker will become red
					//run changeDate(x) when user select a date
                    function changeDate(x) {
                        const datePicker = document.getElementById("datePicker"+x);
						const errorMsg = document.getElementById("errorMsg"+x);

                        if(datePicker.value) {	//datePicker is not null
                            datePicker.style.borderColor = "black";
							errorMsg.style.display = "none";
                        }
                    }
					
					//edit logsheet
                    function modify(x) {
                        const datePicker = document.getElementById("datePicker"+x);
                        const date = document.getElementById("date"+x);
                        const btnModify = document.getElementById("btnModify"+x);
                        const btnConfirm = document.getElementById("btnConfirm"+x);
                        const btnCancel = document.getElementById("btnCancel"+x);
                        const content1 = document.getElementById("content1"+x);
						const content2 = document.getElementById("content2"+x);
						const content3 = document.getElementById("content3"+x);
                        const oldContent1 = document.getElementById("oldContent1");
						const oldContent2 = document.getElementById("oldContent2");
						const oldContent3 = document.getElementById("oldContent3");
        
						if (editing != 0) {	//editing another logsheet
							alert("You are editing another logsheet!");
							document.getElementById("details"+editing).style.border = "3px solid #d50000";
							//scroll to editing logsheet
							window.scrollTo(0, getOffset(document.getElementById("details"+editing)).top-125);
						} else {
							editing = x;
							btnModify.style.display = "none";
							btnConfirm.style.display = "inline";
							btnCancel.style.display = "inline";
							date.style.display = "none"
							datePicker.value = date.innerHTML;
							date.value = "";
							datePicker.style.display = "inline";
							oldContent1.value = content1.value;
							content1.readOnly = false;
							oldContent2.value = content2.value;
							content2.readOnly = false;
							oldContent3.value = content3.value;
							content3.readOnly = false;
						}
                    }
					
					//confirm editing logsheet
                    function confirmEditing(x) {
						const form = document.getElementById("form"+x);
                        const datePicker = document.getElementById("datePicker"+x);
						const errorMsg = document.getElementById("errorMsg"+x);
                        
                        if(datePicker.value) {	//the date is not null
							editing = 0;
							form.submit();
                        } else {	//the date is null
                            datePicker.style.borderColor = "#d50000";
							errorMsg.style.display = "inline";
							alert("Please select the date!");
                        }
                    }
					
					//cancel editing logsheet
                    function cancelEditing(x) {
                        const datePicker = document.getElementById("datePicker"+x);
                        const date = document.getElementById("date"+x);
                        const btnModify = document.getElementById("btnModify"+x);
                        const btnConfirm = document.getElementById("btnConfirm"+x);
                        const btnCancel = document.getElementById("btnCancel"+x);
                        const content1 = document.getElementById("content1"+x);
						const content2 = document.getElementById("content2"+x);
						const content3 = document.getElementById("content3"+x);
                        const oldContent1 = document.getElementById("oldContent1");
						const oldContent2 = document.getElementById("oldContent2");
						const oldContent3 = document.getElementById("oldContent3");
        
                        datePicker.style.display = "none";
                        date.style.display = "inline";
                        btnConfirm.style.display = "none";
                        btnCancel.style.display = "none";
                        btnModify.style.display = "inline";
                        content1.readOnly = true;
                        content1.value = oldContent1.value;
						content2.readOnly = true;
                        content2.value = oldContent1.value;
						content3.readOnly = true;
                        content3.value = oldContent1.value;
						document.getElementById("details"+editing).style.border = "0px";
						editing = 0;
                    }

					//add new logsheet
                    function add() {
						if (editing != 0) {	//editing a logsheet
							alert("You are editing a logsheet!");
							document.getElementById("details"+editing).style.border = "3px solid #d50000";
							//scroll to editing logsheet
							window.scrollTo(0, getOffset(document.getElementById("details"+editing)).top-125);
						} else {
							window.location.replace("addLogsheet.php");
						}
                    }

					//use for auto scroll
					function getOffset(el) {
						const rect = el.getBoundingClientRect();
						return {
							left: rect.left + window.scrollX,
							top: rect.top + window.scrollY
						};
					}

					//delete logsheet
					function deleteLogsheet(x) {
                        const form = document.getElementById("deleteForm"+x);

						if (editing != 0) {	//editing a logsheet
							alert("You are editing a logsheet!");
							document.getElementById("details"+editing).style.border = "3px solid #d50000";
							//scroll to editing logsheet
							window.scrollTo(0, getOffset(document.getElementById("details"+editing)).top-125);
						} else {
							if (confirm("Are you sure you want to delete the logsheet?")) {
								form.submit();
							}
						}
                    }
                </script>
                <?php
					//database connection (need to change)
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "fyp";

                    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
					
					//group ID (need to change)
					$groupID = $_SESSION["GroupID"];

					//get logsheet from database
					$sql = 'SELECT * FROM logsheet WHERE groupID=' . $groupID . ' ORDER BY date';
					$rs = mysqli_query($conn, $sql);

					echo '<div class="main">';

					//show logsheet
					while ($rc = mysqli_fetch_assoc($rs)) {
						$logsheetID = $rc['logsheetID'];
						$date = $rc['date'];
						$content1 = $rc['content1'];
						$content2 = $rc['content2'];
						$content3 = $rc['content3'];
						$today = date('Y-m-d');
						echo <<<EOD
							<form id="form$logsheetID" class="mainForm" action="updateLogsheet.php" method="post">
								<details id="details$logsheetID">
									<summary>
										<text id="errorMsg$logsheetID" class="errorMsg">*</text>
										<input id="datePicker$logsheetID" type="date" name="date" max="$today" onchange="changeDate($logsheetID)" style="display:none;" />
										<text id="date$logsheetID">$date</text>
										<button id="btnModify$logsheetID" class="btnModify" type="button" title="Edit logsheet" onclick="modify($logsheetID)">
											<i class="fa fa-edit"></i>
										</button>
										<button id="btnCancel$logsheetID" class="btnCancel" type="button" title="Cancel edit" onclick="cancelEditing($logsheetID)" style="display:none;">
											<i class="fa fa-close"></i>
										</button>
										<button id="btnConfirm$logsheetID" class="btnConfirm" type="button" title="Confirm edit" onclick="confirmEditing($logsheetID)" style="display:none;">
											<i class="fa fa-check"></i>
										</button>
									</summary>
									<p>
										Work done & findings since last recording
										<textarea id="content1$logsheetID" name="content1" oninput="this.style.height = null;this.style.height = this.scrollHeight + \'px\'" readonly>$content1</textarea>
										State which part of the last plan not yet finished (leave it blank if you finished all the work of the last plan)
										<textarea id="content2$logsheetID" name="content2" oninput="this.style.height = null;this.style.height = this.scrollHeight + \'px\'" readonly>$content2</textarea>
										Plan of work before the next recording
										<textarea id="content3$logsheetID" name="content3" oninput="this.style.height = null;this.style.height = this.scrollHeight + \'px\'" readonly>$content3</textarea>
									</p>
								</details>
								<input name="logsheetID" type="hidden" value="$logsheetID" />
							</form>
							<form id="deleteForm$logsheetID" action="deleteLogsheet.php" method="post">
								<button id="btnDelete$logsheetID" class="btnDelete" type="button" title="Delete logsheet" onclick="deleteLogsheet($logsheetID)">
									<i class="fa fa-close"></i>
								</button>
								<input name="logsheetID" type="hidden" value="$logsheetID" />
							</form>
EOD;
					}
					echo <<<EOD

							<button type="button" id="btnNew" class="btn btn-rounded btn-info" onclick="add()">
								<span class="btn-icon-left text-info">
									<i class="fa fa-plus color-info"></i>
								</span>
								Add
							</button>
							<input id="oldContent1" type="hidden" />
							<input id="oldContent2" type="hidden" />
							<input id="oldContent3" type="hidden" />
						</div>
EOD;
				?>
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
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    
</body>
</html>