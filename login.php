<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SARA CATERING</title>

  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="icon" href="badge.png">

</head>

<body class="main-body">
  <div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

      <!--header -->
      <div class="col-12">
        <div class="row">
          <div class="col-12 logo"></div>
          <div class="col-12">
            <p class="title01 text-center"> Hi, Welcome to SARA CATERING</p>

          </div>
        </div>
      </div>
      <!--header -->

      <!--content-->
      <div class="col-12 p-3">
        <div class="row">

          <div class="col-6 d-none d-lg-block background"></div>


          <!--signupbox-->

          <div class="col-12 col-lg-6 d-none"  id="signUpbox">
            <div class="row g-2">

              <div class="col-12">
                <p class="title02">Create New Account</p>

              </div>

              <div class="col-12 d-none" id="msgdiv">
                <div class="alert alert-danger" role="alert" id="msg">

                </div>

              </div>

              <div class="col-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="ex:- John" id="fname" />

              </div>

              <div class="col-6">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="ex:- Doe" id="lname" />

              </div>

              <div class="col-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="ex:- John@gmail.com" id="email" />

              </div>

              <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="ex:- ********" id="password" />

              </div>

              <div class="col-6">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="ex:- 0763523789" id="mobile" />

              </div>



              <div class="col-12 col-lg-6 d-grid mt-4">
                <button class="btn btn-primary" onclick="signup();">Sign Up</button>
              </div>

              <div class="col-12 col-lg-6 d-grid mt-4">
                <button class="btn btn-dark" onclick="changeview();">Already have an account? Sign In</button>
              </div>
            </div>
          </div>
          <!--signupbox-->

          <!--signInbox -->

          <div class="col-12 col-lg-6" id="signInbox">
            <div class="row g-2">
              <div class="col-12">
                <p class="title02"> Sign In</p>

              </div>

              <div class="col-12 d-none" id="msgdiv1">
                <div class="alert alert-danger" role="alert" id="msg1">
                </div>
              </div>

              <?php

              $email = "";
              $password = "";

              if (isset($_COOKIE["email"])) {
                $email = $_COOKIE["email"];

              }
              if (isset($_COOKIE["password"])) {
                $password = $_COOKIE["password"];
                
              }



              ?>

              <div class="col-12">
                <label class="form-label">Email</label>
                <input value="<?php echo $email; ?>" type="text" class="form-control" id="email2">
              </div>

              <div class="col-12">
                <label class="form-label">Password</label>
                <input value="<?php echo $password; ?>" type="password" class="form-control" id="password2">
              </div>

              <div class="col-12">
                <label class="form-check"></label>
                <input type="checkbox" class="form-check-input" id="rememberMe" />
                <label class="form-check-label fw-bold">Remember Me</label>

                
              </div>


              <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-primary" onclick="signin();"> Sign In </button>

              </div>

              <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-danger" onclick="changeview();"> Sign up</button>

              </div>

             


            </div>

          </div>
          <!--signInbox -->

        </div>

      </div>



      

      <!--footer-->
      <div class="col-12 fixed-bottom">
        <p class="text-center">&copy; 2026 catering.lk || All Right Reserved</p>
        <p class="text-center fw-bold">Designed By : 2026 Batch 08</p>
      </div>

      <!--footer-->
    </div>

  </div>



  <script src="script.js"></script>
  <script src="bootstrap.js"></script>
  <script src="bootstrap.bundle.js"></script>
</body>

</html>