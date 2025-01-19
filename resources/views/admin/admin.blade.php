<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard - Max Allowance</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/core.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/icon-font.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/datatables/css/dataTables.bootstrap4.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/datatables/css/responsive.bootstrap4.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/style.css")}}>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script> --}}
	
</head>
<body>
	
	<div class="header">
		@include('component.admin_nav')
	<div class="main-container" style="margin-top: 60px">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-500 font-30 text-blue">{{Auth::user()->name}}</div>
							
						</h4>
						<p class="font-18 max-width-700">You can now effortlessly decode vehicle identification numbers to uncover detailed information about cars. Explore features to verify specifications, check history, and more. Ensure accuracy by inputting (VIN) correctly. If you need any assistance or have questions, feel free to reach out to our support team. Enjoy decoding and managing vehicle data!</p>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								 <div id="chart"></div> 
							</div>
							<div class="widget-data">
								<div class="weight-600 font-14">Total Users</div>
								<div class="h4 mb-0" style="padding-top: 20px;">{{$usercount}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								 <div id="chart4"></div> 
							</div>
							<div class="widget-data">
								<div class="weight-600 font-14">Total Reports Generated</div>
								<div class="h4 mb-0">{{$reportcount}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								 <div id="chart3"></div> 
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">New User Today</div>
								<div class="weight-600 font-14">{{$recentUserCount}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart4"></div> -->
							</div>
							<!--<div class="widget-data">-->
							<!--	<div class="h4 mb-0">$6060</div>-->
							<!--	<div class="weight-600 font-14">Worth</div>-->
							<!--</div>-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>
			{{-- <div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				
			</div> --}}
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div> -->
		</div>
	</div>
    
	<!-- js -->
	<script src={{url("vendors/scripts/core.js")}}></script>
	<script src={{url("vendors/scripts/script.min.js")}}></script>
	<script src={{url("vendors/scripts/process.js")}}></script>
	<script src={{url("vendors/scripts/layout-settings.js")}}></script>
	<script src={{url("src/plugins/apexcharts/apexcharts.min.js")}}></script>
	<script src={{url("src/plugins/datatables/js/jquery.dataTables.min.js")}}></script>
	<script src={{url("src/plugins/datatables/js/dataTables.bootstrap4.min.js")}}></script>
	<script src={{url("src/plugins/datatables/js/dataTables.responsive.min.js")}}></script>
	<script src={{url("src/plugins/datatables/js/responsive.bootstrap4.min.js")}}></script>
	<script src={{url("vendors/scripts/dashboard.js")}}></script>
</body>
</html>