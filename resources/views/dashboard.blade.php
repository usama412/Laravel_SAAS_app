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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<style>
	    .css-7biaab{
	        position: absolute;
	        top:95%;
	    }
	</style>
</head>
<body>
	
	<div class="header">
		@include('component.dash_nav')
<div style="margin-top: 60px;">
	<div class="main-container">
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
						<p class="font-18 max-width-700">Welcome to our Max Allowance! Unlock the full potential of your vehicle with our easy-to-use tool. 
						Simply enter your Vehicle Identification Number (VIN) and discover detailed information about your car's history, specifications, and more.
						Our comprehensive decoder ensures you get accurate and up-to-date details, helping you make informed decisions whether you're buying, selling, or just curious. 
						Start exploring today!</p>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart"></div> -->
							</div>
							<div class="widget-data">
								<div class="weight-600 font-14">Plan</div>
								<div class="h4 mb-0" style="padding-top: 20px;">{{$planName}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart2"></div> -->
							</div>
							<div class="widget-data">
								<div class="weight-600 font-14">Total Reports</div>
								<div class="h4 mb-0" style="padding-top: 20px;">{{$repnum}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart3"></div> -->
							</div>
							<div class="widget-data">
								<div class="weight-600 font-14">Reports Left</div>
								<div class="h4 mb-0" style="padding-top: 20px;">{{$remainrep}}</div>
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
							<div class="widget-data">
								
								 @if ($dayremaining < 0 || $dayremaining === null)
								 <div class="weight-600 font-14">Plan Purchase</div>
								<div class="h4 mb-0" style="padding-top: 20px;">
								<a href="/">Purchase Plan</a>
								@else
								<div class="weight-600 font-14">Days Remaining</div>
								<div class="h4 mb-0" style="padding-top: 20px;">
								{{$dayremaining}}
								@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!--<div class="col-xl-8 mb-30">-->
				<!--	<div class="card-box height-100-p pd-20">-->
				<!--		<h2 class="h4 mb-20">Activity</h2>-->
				<!--		<div id="chart5"></div>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-xl-4 mb-30">-->
				<!--	<div class="card-box height-100-p pd-20">-->
				<!--		<h2 class="h4 mb-20">Lead Target</h2>-->
				<!--		<div id="chart6"></div>-->
				<!--	</div>-->
				<!--</div>-->
			</div>
			
			
			</div>
	</div>
	</div>
	@if(session('message'))
    <script>
        Swal.fire({
            title: 'No Plan',
            text: "{{ session('message') }}",
            icon: 'error',
            confirmButtonText: 'Ok',
            timer: 3000
        });
    </script>
@endif
	@include('component.footer')
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