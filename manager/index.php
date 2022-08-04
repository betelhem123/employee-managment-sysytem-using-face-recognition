<?php
     session_start();
     error_reporting(0);
     require_once '../includes/db.inc.php';
     if(strlen($_SESSION['manlogin'])==0){   
     header('location:../login.php');
    } else { 
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- link of icon-->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/back.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icon-font.min.css">
	<title>Dashboard</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
		<i class='bx  bx-recycle'></i>
			<span class="text">ReLink Technologies </span>
		</a>
		<ul class="side-menu top">
		<li class="active">
				<a href="index.php">
                <i class=' bx bx bxs-dashboard icon ' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="viewattendance.php">
					<i class=' bx bx bxs-user-check icon ' ></i>
					<span class="text">View attendace</span>
				</a>
			</li>
			<li>
				<a href="leave.php">
					<i class='bx bx-message-rounded-check icon' ></i>
					<span class="text">leave requests</span>
				</a>
			</li>
			<li>
				<a href="employeeprofile.php">
					<i class='bx  bx bxs-user-detail icon'></i>
					<span class="text">Employee Profile</span>
				</a>
			</li>
            <li >
				<a href="department.php">
					<i class=' bx bxs-group ' ></i>
					<span class="text">Department</span>
				</a>
			</li>
			<li >
				<a href="new_leave.php">
					<i class=' bx bxs-group ' ></i>
					<span class="text">Leave Type</span>
				</a>
			</li>
			
			<li >
				<a href="viewcalendar.php">
					<i class='bx bx-calendar icon'></i>
					<span class="text">View Calendar</span>
				</a>
			</li>
			<li>
        <a href="http://localhost/phpmyadmin/index.php?route=/database/export&db=blendb">
          <i class='bx bx-cloud-upload icon' ></i>
          <span class="text">Backup</span>
        </a>
      </li>
      <li>
        <a href="http://localhost/phpmyadmin/index.php?route=/database/import&db=blendb">
          <i class='bx bx-cloud-download icon' ></i>
          <span class="text">Restore</span>
        </a>
      </li>
	  <li>
				<a href="change_password.php" >
					<i class='bx bx-log-out icon'></i>
					<span class="text">Change Password</span>
				</a>
			</li>
		
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bx-log-out icon' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
			<!-- NAVBAR -->

	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
		</nav>
		<!-- NAVBAR -->
		<!-- top box-->
		<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4 user-icon">
						<img src="image/12.jpg" alt="">
					</div>
					<div class="col-md-8">

						<h3 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue"><?php echo  $_SESSION["manlogin"]; ?></div>
						</h3>
						<p class="font-10 max-width-1000">ReLink Technologies <br> INNOVATIVE IN ACTION</p>
					</div>
				</div>
			</div>
			
			</div>
		<!-- MAIN -->
		<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
					<?php 
require_once '../includes/db.inc.php';

$sql = "SELECT * from employee";

$stmt = $conn -> query($sql);
$rowCount = $stmt->num_rows;
              
?> 
						
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">   <?php   echo($rowCount);?>
</div>
								<div class="font-14 text-secondary weight-500">Total Employees </div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy dw dw-user-2"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">

					<?php 
require_once '../includes/db.inc.php';

$sql = "SELECT * from departments";

$stmt = $conn -> query($sql);
$rowCount = $stmt->num_rows;
              
?>      

						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php   echo($rowCount);?></div>
								<div class="font-14 text-secondary weight-500">Total Departments</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);"><span class="icon-copy fa fa-users"></span></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">

						  

					<?php 
					require_once '../includes/db.inc.php';

					$sql = "SELECT * from emp_leave_history ";
					
					$stmt = $conn -> query($sql);
					$rowCount = $stmt->num_rows;
								  
					?>      
				<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php   echo($rowCount);?></div>
								<div class="font-14 text-secondary weight-500">Requested Leaves</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);"><i class="icon-copy fa  fa-user-circle-o" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
				BLEN Attendace Managment System developed by  Microlink Information Technology College <a href="http://localhost/blen_final/team.php" target="_blank"> Graduates of 2022 </a>
			</div>
					

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/adminjs.js"></script>
</body>
</html>
<?php }?>