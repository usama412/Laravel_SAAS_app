@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Register - Max Allowance</title>

	<!-- Site favicon -->
    <link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/core.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/icon-font.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/jquery-steps/jquery.steps.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/style.css")}}>

	<style>
    .top_bar_left {
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* padding: 10px; */
}
.login-page{
  /*background-color: rgb(239,205,155);*/
}
.navbar{
  background-color: rgb(239,205,155);
}
.logo-login {
    margin-right: 20px;
}

#menu-login {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex; 
}
#menu-login li {
    margin-right: 20px;
}

#menu-login li:last-child {
    margin-right: 0;
}
.logo-login-main{
  width: 180px;
}
#menu-login a {
    text-decoration: none; 
    color: #000; 
    padding: 10px 10px; 
    display: inline-block;
    font-size: 16px;
    font-weight: 800;

}

#menu-login a:hover {
    background-color: #e9ecef; 
    border-radius: 4px; 
}

.responsive-menu-toggle {
    display: none; 
}
@media (max-width: 600px){
#menu-login{
    display: none;
}
   .col-md-6 img{
       margin-bottom: 50px;
   } 
}
  </style>
</head>

<body class="login-page">
    <nav class="navbar">
            <div class="top_bar_left clearfix">
              <div class="logo-login">
                <a id="logo-login" href="/" style="display: inline;" title="BeLanding 4 - Betheme" data-height="60"
                  data-padding="15"><img class="logo-login-main scale-with-grid svg" src={{url('img/logo.png')}}
                    data-retina="" data-height="" alt="landing4" width="190" data-no-retina /></a>
              </div>
              <div class="menu_wrapper">
                <nav id="menu">
                  <ul id="menu-login" class="menu menu-main">
                    <li> <a href="/"><span>Home</span></a> </li>
                    <li> <a href="https://homeb.maxallowance.com#pricing"><span>Pricing</span></a> </li>
                    <!-- <li> <a href="plan"><span>Plan</span></a> </li> -->
                    <li> <a href="https://homeb.maxallowance.com#summary"><span>Bussiness</span></a> </li>
                    <li> <a href="https://homeb.maxallowance.com#faq"><span>FAQ</span></a> </li>
                    <li> <a href="https://homeb.maxallowance.com#about"><span>About Us</span></a> </li>
                    <li> <a href="https://homeb.maxallowance.com#contact"><span>Contact</span></a> </li>
                  </ul>
                </nav><a class="responsive-menu-toggle " href="#" aria-label="Mobile menu"><i class="icon-menu-fine"
                    aria-hidden="true"></i></a>
              </div>
            </div>
         
  </nav>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center" style="padding-top: 80px;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src={{url("vendors/images/register-page-img.png")}} alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form method="POST" action="/register" style="padding: 30px;">
                                @csrf
								<h5 style="padding-bottom: 30px;">Detail To Register</h5>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email Address*</label>
											<div class="col-sm-8">
												<input type="email" class="form-control" name="email" required>
											</div>
										</div>
										<div class="col-sm-8">
    @if(isset($id))
        <input type="hidden" class="form-control" name="plan_id" value="{{ $id }}">
    @else
        <input type="hidden" class="form-control" name="plan_id" value="No plan">
    @endif
</div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Fullname*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="fullname" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="username" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="password" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="confirmpassword" required>
											</div>
										</div>
									</div>
								
								<button type="submit" style="padding: 2%; background-color:blue; color: white; font-size:20px; border: 1px solid black;">Register</button>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src={{url("vendors/scripts/core.js")}}></script>
	<script src={{url("vendors/scripts/script.min.js")}}></script>
	<script src={{url("vendors/scripts/process.js")}}></script>
	<script src={{url("vendors/scripts/layout-settings.js")}}></script>
	<script src={{url("src/plugins/jquery-steps/jquery.steps.js")}}></script>
	<script src={{url("vendors/scripts/steps-setting.js")}}></script>
</body>

</html>