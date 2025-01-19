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
						<h4 class="text-blue h4">Plans Available</h4>
                        {{-- <button type="button" class="btn btn-primary" >Add Plan</button> --}}
						
                    </div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">ID</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Total Reports</th>
                                    <th>Reports Number</th>
                                    <th>Free Reports</th>
                                    <th>Days For Plan</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plan as $plan)
                                <tr>
                                    <td class="table-plus">{{ $plan->plan_id }}</td>
                                    <td>{{ $plan->title }}</td>
                                    <td>{{ $plan->price }}</td>
                                    <td>{{ $plan->number_of_reports }}</td>
                                    <td>{{ $plan->reports }}</td>
                                    <td>{{ $plan->free_report }}</td>
                                    <td>{{ $plan->day_for_plan }}</td>
                                
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item edit-btn" href="#" data-toggle="modal" data-target="#exampleModal" 
                                                   data-id="{{ $plan->plan_id }}"
                                                   data-title="{{ $plan->title }}"
                                                   data-price="{{ $plan->price }}"
                                                   data-name="{{$plan->name}}"
                                                   data-number="{{ $plan->reports}}"
                                                   data-freenumber="{{ $plan->free_report}}"
                                                   data-day="{{ $plan->day_for_plan }}">
                                                    <i class="dw dw-edit-2"></i> 
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Edit Plan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/editplan/"{{$plan->plan_id}} method="POST" id="editPlanForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Plan Title</label>
                                                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Plan Description</label>
                                                <textarea class="form-control" name="desc" id="desc" placeholder="Enter Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price For Plan</label>
                                                <input type="text" class="form-control" name="price" id="price">
                                            </div>
                                            <div class="form-group">
                                                <label for="number">Number Of Reports</label>
                                                <input type="text" class="form-control" name="number" id="number">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="freenumber">Free Of Reports</label>
                                                <input type="text" class="form-control" name="freenumber" id="freenumber">
                                            </div>
                                            <div class="form-group">
                                                <label for="day">Days For Plan</label>
                                                <input type="text" class="form-control" name="day" id="day">
                                            </div>
                                            <input type="hidden" name="plan_id" id="plan_id">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    {{-- ############################# END MODAL ########################### --}}
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
            $('.edit-btn').on('click', function() {
                var planId = $(this).data('id');
                var title = $(this).data('title');
                var price = $(this).data('price');
                var number = $(this).data('number');
                var freenumber = $(this).data('freenumber');
                var day = $(this).data('day');
                var name = $(this).data('name');
                console.log(name);
                $('#exampleModal #plan_id').val(planId);
                $('#exampleModal #title').val(title);
                $('#exampleModal #desc').val(name);
                $('#exampleModal #price').val(price);
                $('#exampleModal #number').val(number);
                $('#exampleModal #freenumber').val(freenumber);
                $('#exampleModal #day').val(day);
                
                // Update the form action URL if needed
                $('#editPlanForm').attr('action', '/editplan/' + planId);
            });
        });
        </script>
</body>
</html>