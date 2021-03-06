<?php 
require_once "config/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>Register - <?php echo $site_name; ?></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="" id="body">
          <div class="container d-flex flex-column justify-content-between vh-100">
          <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="app-brand">
                    <a href="/index.html">
                      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                        height="33" viewBox="0 0 30 33">
                        <g fill="none" fill-rule="evenodd">
                          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                      </svg>
                      <span class="brand-name"><?php echo $site_name; ?></span>
                    </a>
                  </div>
                </div>
                <div class="card-body p-5">
                  <h4 class="text-dark mb-5">Sign Up</h4>
                  <form action="actions/register_user.php" method="post">
                  <div class="row">
                  <?php 
                  if(Session::has('errors'))
                  {
                       $errors = Session::flash('errors');
                       foreach($errors as $key => $error)
                       {
                         foreach($error as $err)
                         {
                           echo '<p>'.$err.'</p>';
                         }
                       }
                   } ?>
                </div>
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <input type="text"  name="firstname" class="form-control input-lg" id="firstname" aria-describedby="firstnameHelp" placeholder="First Name">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" name="lastname" class="form-control input-lg" id="firstname" aria-describedby="lastnameHelp" placeholder="Last Name">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="text"  name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="form-group col-md-12 ">
                        <input type="password"  name="password" class="form-control input-lg" id="password" placeholder="Password">
                      </div>
                      <div class="form-group col-md-12 ">
                        <input type="password"  name="confirm_password" class="form-control input-lg" id="cpassword" placeholder="Confirm Password">
                      </div>
                      <div class="col-md-12">
                       
                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                        <p>Already have an account?
                          <a class="text-blue" href="login.php">Sign in</a>
                        </p>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <div class="copyright pl-0">
            <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
              <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
            </p>
          </div>
        </div>

</body>
</html>