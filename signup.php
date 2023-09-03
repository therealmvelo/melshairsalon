<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include('include/header.php')?>
        
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<!-- ... Your HTML code ... -->

<h1>Register</h1>
<p class="account-subtitle">Access to our dashboard</p>
<!-- Form -->
<form id="registrationForm" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name*">
        <span class="error-message" id="nameError"></span>
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email*">
        <span class="error-message" id="emailError"></span>
    </div>
    <div class="form-group">
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone*" maxlength="10">
        <span class="error-message" id="phoneError"></span>
    </div>
    <div class="form-group">
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Your Password*">
        <span class="error-message" id="passError"></span>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          male
        </label>
      </div>
    </div>
      <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              female
            </label>
          </div>
      </div>
    </div>
    
    <div class="form-group">
        <label class="col-form-label"><b>User Image</b></label>
        <input class="form-control" name="uimage" type="file" id="uimage">
        <span class="error-message" id="uimageError"></span>
    </div>
    <button class="btn btn-success" name="reg" value="Register" type="button" onclick="validateRegistrationForm()">Register</button>
</form>


								
								<div class="login-or">
									<span class="or-line"></span>
								</div>
								
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="index.js"></script>

</body>
</html>