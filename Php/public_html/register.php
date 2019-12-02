<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/register.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
        <title>Sign Up</title>
      
    <body>
        

    <?php
	session_start();
	
    // Check for submission
	if(isset($_POST['submit'])){

            $conn = NULL;
            $error = false;

            if($conn = mysqli_connect('localhost', 'root', '', 'project')) {
                    if($result = mysqli_query($conn, $sql)) {
                            if(mysqli_num_rows($result) > 0) {
                                    $error = true;
                            }
                    }
            }

            if($error) {

                //Username exist
                exit('a');					

            } else {
                // Store user credentials details
                $sql1 = "INSERT INTO register
                        (username, password, confirmpwd, email, mobile) VALUES
                        ('". $_POST['username'] ."', '". $_POST['password'] ."', '". $_POST['confirmpwd'] ."', '". $_POST['email'] ."', 
                         '". $_POST['mobile'] ."');
                        ";

                if(mysqli_query($conn, $sql1)) {
                        //Successfully registered
                        header('location: login.php');
                        exit();
                }
            }
	}
 ?>
        <body>
    
        <nav class="navbar navbar-expand-md bg-white static-top justify-content-center">
            <a class="navbar-brand" href="home.php" style="padding-left:40px">
              <img src="image/logo.jpg" alt="logo" style="width:60px">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">My Account</a>
                            <div class="dropdown-menu">
                                <a href="login.php" class="dropdown-item">Login</a>
                                <a href="register.php" class="dropdown-item">Sign Up</a>
                                <a href="home.php" class="dropdown-item">Sign Out</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="product.php" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="contactus.php" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <a href="#" class="nav-link"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="Content">
            <form name="myform" method="post" onsubmit="return validateForm()">
                <div class ="form-header">
                    <h2 class="text-center">Sign Up</h2>
                    <p class="text-center">Fill in this form to create an account!</p>
                    <hr>
                </div> 
                
                <div class="form-group"> <!-- Full Name -->
                    <label for="full_name_id" class="control-label">UserName</label>
                    <input type="text" class="form-control" id="full_name_id" name="username" maxlength="8" placeholder="Enter Name">
                    <div class="error" id="nameErr"></div>
                </div>
                
                <div class="form-group"> <!-- password -->
                        <label for="password_id" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" maxlength="8" placeholder="********">
                        <div class="error" id="passwordErr"></div>
                </div>	

                <div class="form-group"> <!-- confirm password -->
                        <label for="confirm_pw_id" class="control-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_pw_id" maxlength="8" name="confirmpwd" placeholder="********">
                        <div class="error" id="confirmErr"></div>
                </div>
                
                <div class="form-group"> <!--contact email-->
                    <label for="email_id" class="control-label">Email</label>
                    <input type="text" class="form-control" id="email_id" name="email" placeholder="xxx@gmail.com" >
                    <div class="error" id="emailErr"></div>
                </div>

                <div class="form-group"> <!--contact number-->
                        <label for="contact_num_id" class="control-label">Contact Number</label>
                        <input type="tel" class="form-control" id="contact_num_id" maxlength="12" name="mobile" placeholder="Contact Number">
                        <div class="error" id="mobileErr"></div>
                </div>
                
                
               
                
                <div class="agree"> 
                        <input type="checkbox" name="agree" id="agree"> 
                        <label for="agree">I accept the <a href="#">Terms of Use & Privacy Policy</a></label> 
                </div> 

                <div class="form-button"> <!-- Submit Button -->
                        <button class="button" type="submit" name="submit" value="Insert" >Sign Up</button>
                </div>
            </form>	
        </div>
    
    <footer class="page-footer font-small pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-2 mt-md-0 mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold ">Paws</h5>
                <h6>Our mission is provide high<br>
                    quality services and products<br>
                    to benefit your pets.</h6> 
               
              </div>
           
                 
              <!-- Grid column -->

              <hr class="clearfix w-100 d-md-none pb-3">

              <!-- Grid column -->
              <div class="col-md-2 mb-md-0 mb-3">

                <!-- Links -->
                 <h6 class="text-uppercase mb-4 font-weight-bold">Paws</h6>
                    <p>Home</p>
                    <p>About Us</p>
                    <p>Services</p>
                    <p>Career</p>
                  
              </div>
              <!-- Grid column -->
             
              
              <!-- Grid column -->
              <div class="col-md-2 mb-md-0 mb-3">

                <!-- Links -->
                <h6 class="text-uppercase mb-4 font-weight-bold">Customer Services</h6>
                    <p>FAQ</p>
                    <p>Terms and Condition</p>
                    <p>Privacy Policy</p>

              </div>
              
              <!-- Grid column -->
              <div class="col-md-2 mb-md-0 mb-3">

                <!-- Links -->
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>paw@gmail.com</p>
                <p>+ 012 450 123</p>
                
             </div>
            <!-- Grid row -->
            <div class="col-md-2 mb-md-0 mb-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Newsletter</h6>
                    <p>Email promotions, news, and information</p>
                    
                        <div class="form-group">
                            <label class="sr-only" for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="address@example.com" aria-label="Your email" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-sm" style="background:lightskyblue"  type="button">Subscribe</button>
                            </div>
                        </div>
                    
            </div>


            
        </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright Paws.com,All right reserved.</div>
         </div>
    </footer>
    <script>
        $(function() {
          $('#password').password();
        });
    
        function printError(elemId,hintMsg){
            document.getElementById(elemId).innerHTML=hintMsg;
        }
        function validateForm()
        {
             // Retrieving the values of form elements 
            var name = document.myform.username.value;
            var mobile = document.myform.mobile.value;
            var password=document.myform.password.value;
            var confirm=document.myform.confirmpwd.value;
            var email=document.myform.email.value;



            // Defining error variables with a default value
            var nameErr = emailErr = mobileErr = passwordErr = confirmErr = true;

            // Validate name
            // Validate name (alphanumeric)
            // all number,all alphabet also accept
            // half number, half alphabet also accept
            if(name ==="") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[0-9a-zA-Z]+$/;                
                if(regex.test(name) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }
            
            // Regular expression for basic email validation
            // Uppercase (A-Z), lowercase (a-z),Digits (0-9).Characters ! # $ % & ' * + - / = ? ^ _ ` { | } ~
            //Character . ( period, dot or fullstop) provided that it is not the first or last character and it will not come one after the other.
            //regular expression only allows character, digit, underscore, and dash

            if(email === "") {
                printError("emailErr", "Please enter your email address");
            } else {
                
                var regex =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(regex.test(email) === false) {
                    printError("emailErr", "Invalid email address");
                } else{
                    printError("emailErr", "");
                    emailErr = false;
                }
            }


           
            // 
            var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
            if(regex.test(password) ===false) {
                printError("passwordErr", "Password must at least one lowercase letter, one uppercase letter, one numeric digit, and one special character. ");
            } else{
                printError("passwordErr", "");
                passwordErr = false;
            }

            //validate matching password
            if(confirm===""){
                printError("confirmErr","Please enter confirm password");
            }else if(confirm!==password)
            {
                printError("confirmErr","Password did not match");

            }else
            {
                printError("confirmErr","");
                confirmErr=false;
            }



            // validate mobile number, must enter a value
            //To valid a phone number like XXX-XXX XXXX
            if(mobile ===null || mobile ==="") {
                printError("mobileErr", "Please enter your mobile number");
            } else {
                var regex = /^\(?([0-9]{3})\)?[-]?([0-9]{3})?([0-9]{4})$/;
                if(regex.test(mobile) === false) {
                    printError("mobileErr", "Please enter a valid 11 digit mobile number");
            } else{
                printError("mobileErr", "");
                mobileErr = false;
                }
            }




            if((nameErr || passwordErr || mobileErr|| confirmErr || emailErr) === true) {
                return false;
            } else {
                // Creating a string from input data for preview
                var dataPreview = "Form submitted successfully!";
                        
                // Display input data in a dialog box before submitting the form
                alert(dataPreview);
            }


        };
</script>
        </body>
</html>
