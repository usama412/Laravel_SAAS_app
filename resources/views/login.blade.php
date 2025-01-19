@if (session('alert'))
<div class="alert alert-warning">
  {{ session('alert') }}
</div>
@endif

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In To Max Allowance</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
  {{-- <link rel='stylesheet' href={{url('css/structure.css')}}> --}}
  <link rel='stylesheet' href={{url('css/landing4.css')}}>
  <link rel="stylesheet" href={{url('css/rs6.css')}}>
  <link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
  <style>
    body{
        max-width: 100%;
    }
    .top_bar_left {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    
    .login-page {
      /*background-color: rgb(239,205,155);*/
    }

    .navbar {
      background-color: rgb(239,205,155);
    }

    .logo-login {
      margin-right: 20px;
    }

    #menu-login {
      list-style: none;
      display: none;
      margin: 0;
      padding: 0;
    }

    #menu-login li {
      margin-right: 20px;
    }

    #menu-login li:last-child {
      margin-right: 0;
    }

    .logo-login-main {
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

    .mobile-row {
      display: flex;
    }

    #menu-login a:hover {
      background-color: #e9ecef;
      border-radius: 4px;
    }

    .responsive-menu-toggle {
      display: none;
    }
    
    @media (max-width: 600px) {
        body{
            min-height: 120%;
        }
    #myDiv {
        flex-direction: column !important;
    }

    .col-md-6, .col-lg-7, .col-lg-5 {
        width: 100% !important;
        max-width: 100% !important;
    }

    .image_not {
        margin-bottom: 20px !important;
    }
    .container{
        margin: 0px;
        padding: 0px;
    }
    .col-lg-5{
        padding: 0px;
    }
}
  </style>
</head>

<body class="login-page">
  <nav class="navbar">
    <div class="top_bar_left clearfix">
      <div class="logo-login">
        <a id="logo-login" href="/" style="display: inline;" title="BeLanding 4 - Betheme" data-height="60" data-padding="15">
          <img class="logo-login-main scale-with-grid svg" src={{url('img/logo.png')}} data-retina="" data-height="" alt="landing4" width="190" data-no-retina />
        </a>
      </div>
      <div class="menu_wrapper">
        <nav id="menu">
          <ul id="menu-login" class="menu menu-main">
            <li> <a href="/"><span>Home</span></a> </li>
            <li> <a href="https://homeb.maxallowance.com#pricing"><span>Pricing</span></a> </li>
            <li> <a href="https://homeb.maxallowance.com#summary"><span>Business</span></a> </li>
            <li> <a href="https://homeb.maxallowance.com#faq"><span>FAQ</span></a> </li>
            <li> <a href="https://homeb.maxallowance.com#about"><span>About Us</span></a> </li>
            <li> <a href="https://homeb.maxallowance.com#contact"><span>Contact</span></a> </li>
          </ul>
        </nav>
        <a class="responsive-menu-toggle" href="#" aria-label="Mobile menu">
          <i class="icon-menu-fine" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </nav>

  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center" style="padding-top: 70px;">
    <div class="container">
      <div class="align-items-center mobile-row" id="myDiv">
        <div class="col-md-6 col-lg-7 image_not">
          <img src="vendors/images/login-page-img.png" alt="">
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
              <h2 class="text-center text-primary" style="color:rgb(11, 45, 218);">Login To Account</h2>
            </div>
            <form method="POST" action="/login">
              @csrf
              <div class="input-group custom">
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
              </div>
              <div class="input-group custom">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="**********">
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
              </div>
              <div class="row pb-30">
                <div class="col-6">
                  <div class="custom-control custom-checkbox" style="color:rgb(11, 45, 218);">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-group mb-0">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                  </div>
                </div>
              </div>
            </form>
            <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
            <div class="input-group mb-0">
              <a class="btn btn-outline-primary btn-lg btn-block" href="/register">Register To Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- js -->
  <script src="vendors/scripts/core.js"></script>
  <script src="vendors/scripts/script.min.js"></script>
  <script src="vendors/scripts/process.js"></script>
  <script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>
