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
									<th>Subject</th>
									<!--<th>Type</th>-->
									<th>Start Date</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($user as $user)
								<tr>
                                    
									<td class="table-plus">{{$user->username}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->subject}}</td>
									<!--<td>{{$user->userTypes}}</td>-->
									<td>{{ $user->created_at->format('Y-m-d') }}</td>
									<td>
                                        
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item user" data-toggle="modal" data-id="{{$user->id}}" data-target="#exampleModal2"><i class="dw dw-eye"></i> View</a>
												
												</div>
										</div>

										
                                        
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
							  <span id="username" ></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
							Email Address
							  <span id="email" ></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
							  Subject
							  <span id="subject" ></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								Created At
								<span id="created_at" ></span>
							  </li>
							  <li class="list-group-item d-flex justify-content-between align-items-center">
								Message
								<span id="message" ></span>
							  </li>
						
						
					</ul>
								 
					</p>
				</div>
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
        $('.user').on('click', function(e) {
            e.preventDefault();

            var userId = $(this).attr('data-id');

            $.ajax({
                url: '/comment/' + userId,
                method: 'GET',
                success: function(data) {
                    // Check for errors in the response
                    if (data.error) {
                        console.error('Error:', data.error);
                        return;
                    }

                    // Assuming 'data' is an object with the report details
                    var report = data; // Adjust if 'data' is an array or has a different structure
                    
                    // Populate modal fields
                    $('#username').text(report.username || 'N/A');
                    $('#email').text(report.email || 'N/A');
                    $('#subject').text(report.subject || 'N/A');
                    $('#message').text(report.message || 'N/A');
                    
                    $('#created_at').text(new Date(report.created_at).toLocaleDateString() || 'N/A');
                    
                    // Show the modal
                    $('.bd-example-modal-lg').modal('show');
                },
                error: function(xhr) {
                    console.error('Error fetching report data:', xhr.responseText);
                }
            });
        });
    });
</script>


</body>


</html>