<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Users - Max Allowance</title>

	<!-- Site favicon -->
	<link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/core.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/icon-font.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/datatables/css/dataTables.bootstrap4.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/datatables/css/responsive.bootstrap4.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/style.css")}}>


	
</head>
<body>
	<div class="header">
		@include('component.admin_nav')
	</div>
	<div class="main-container" style="margin-top: 80px">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Users Available</h4>
						{{-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> --}}
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">User</th>
									<th>Email</th>
									<th>Plan</th>
									<th>Type</th>
									<th>Start Date</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($user as $user)
								<tr>
                                    
									<td class="table-plus">{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->plan}}</td>
									<td>{{$user->userTypes}}</td>
									<td>{{ $user->created_at->format('Y-m-d') }}</td>
									<td>
                                        @if ($user->userTypes !== 'admin')
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item user" data-toggle="modal" data-id="{{$user->id}}" data-target="#exampleModal2"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item report" data-toggle="modal" data-id="{{$user->id}}" data-target=".bd-example-modal-lg"><i class="fa fa-file-text-o"></i> Reports</a>
												{{-- <a class="dropdown-item" href="#"><i class="dw dw-edit3"></i> Edit</a> --}}
											</div>
										</div>

										
                                        @endif
									</td>
								</tr>
                                @endforeach
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
				<!-- multiple select row Datatable start -->
				
	</div>
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">User Detail</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p id="modal-content">
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center">
							  User Name
							  <span id="username" class="badge badge-primary badge-pill"></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
							Name Of Customer
							  <span id="name" class="badge badge-primary badge-pill"></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
							  Email Address
							  <span id="email" class="badge badge-primary badge-pill"></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								User Register Date
								<span id="created_at" class="badge badge-primary badge-pill"></span>
							  </li>
							  <table class="table">
								  <thead>
									  <tr>
									<th scope="col">Plan Name</th>
									<th scope="col">Plan Price</th>
									<th scope="col">Days For Plan</th>
									<th scope="col">Number Of Reports</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" id="plan"></th>
									<td id="price"></td>
									<td id="day"></td>
									<td id="number"></td>
								</tr>
							</tbody>
						</table>
						
						
					</ul>
								 
					</p>
				</div>
				</div>
		</div>
	</div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <table class="data-table table stripe hover nowrap" style="padding: 30px;">
                <thead>
                                <h1 style="margin: 20px;">User Reports</h1>
								<tr>
									{{-- <th class="table-plus datatable-nosort">User</th> --}}
									<th>User ID</th>
									<th>Report Number</th>
									<th>VIN</th>
									<th>Start Date</th>
									{{-- <th class="datatable-nosort">Action</th> --}}
								</tr>
							</thead>
							<tbody id="modal-body">
                            
								
                                
								
							</tbody>
						</table>
          </div>
        </div>
      </div>


	   
	<!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>

    <script>
        $(document).ready(function() {
            $('.report').on('click', function(e) {
                e.preventDefault();
    
                var userId = $(this).attr('data-id');
    
                $.ajax({
                    url: '/report/' + userId,
                    method: 'GET',
                    success: function(data) {
                        var tableBody = $('#modal-body');
                        tableBody.empty();
    
                        if (data.error) {
                            console.error('Error:', data.error);
                            return;
                        }

                        $.each(data, function(index, report) {
							var date = new Date(report.created_at);
                            var formattedDate = date.toLocaleDateString();
                            var row = '<tr>' +
                                '<td>' + report.user_id + '</td>' +
                                '<td>' + report.report_id + '</td>' +
                                '<td>' + report.vin + '</td>' +
                                '<td>' + formattedDate + '</td>' +
                                '</tr>';
                            tableBody.append(row);
                        });
    
                        $('.bd-example-modal-lg').modal('show');
                    },
                    error: function(xhr) {
                        console.error('Error fetching report data:', xhr.responseText);
                    }
                });
            });
			$('.user').on('click', function(e) {
        e.preventDefault();

        var userId = $(this).data('id');
        console.log(userId);

        $.ajax({
            url: '/userdetail/' + userId, // Ensure this URL matches your route
            method: 'GET',
            success: function(response) {
                if (response.error) {
                    console.error('Error:', response.error);
                    return;
                }

                // Access user data and plan data from response
                var user = response.user;
                var plan = response.plan2;

                // Populate modal with user data
                $('#username').text(user.username || 'N/A');
                $('#name').text(user.name || 'N/A');
                $('#email').text(user.email || 'N/A');
                $('#plan').text(plan ? plan.title : 'N/A'); // Adjust as needed if 'plan2' doesn't have a 'title' attribute
                $('#created_at').text(new Date(user.created_at).toLocaleDateString() || 'N/A');
                $('#updated_at').text(new Date(user.updated_at).toLocaleDateString() || 'N/A');
				$('#price').text(plan ? plan.price : 'N/A');
				$('#day').text(plan ? plan.day_for_plan : 'N/A');
				$('#number').text(plan ? plan.number_of_reports : 'N/A');

			},
            error: function(xhr) {
                console.error('Error fetching user data:', xhr.responseText);
            }
        });
    });
        });
    </script>
</body>


</html>