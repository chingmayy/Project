
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
        <link rel="stylesheet" href="style/login.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
        <title>Login</title>
       <?php
        
        // always start a session in the beginning
        session_start();
      
        //connect to database
        $conn = mysqli_connect('localhost', 'root', '','project');

        // if the login button is clicked
        if (isset($_POST['login_user']))
        {
           
            $username= mysqli_real_escape_string($conn,$_POST['username']);
            $password= mysqli_real_escape_string($conn,$_POST['password']);
            
            
            //mysqli_num_rows is to check if data is present in the database or not.
            $query = mysqli_query($conn,"SELECT * FROM register WHERE username='$username' and password='$password'");
            $rows = mysqli_num_rows($query);
            
            // can login every row in the database
            if ($rows==1)
            {
                echo 'Login successfully';
                header("Refresh:2; url=home.php");
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
            <form name="loginform" method="post" onsubmit="return validateForm()">
                <div class ="form-header">
                    <h5 class="text-center">Login</h5>
                    
                    <div class="form-group row">
                            <label class="">Username</label>
                            <input type="text" name="username" class="form-control" id="usr" maxlength="8" placeholder="Username" >
                            <div class="error" id="nameErr"></div>
                    </div>
                    

                    <div class="form-group" style="padding-left: 10px">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label>Password</label>
                            </div>
                            <input type="password" class="form-control " id="password" name="password"  maxlength="8" placeholder="********" >
                            <div class="error" id="passwordErr"></div>
                        </div>
                    </div>
                    
                   
                    <div class="form-group" style="">
                        <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" name="agree" id="agree"> 
                        <label for="customCheck">Remember Me</label>
                    </div>
                        
                    </div>
                    
                    
                    <div class="custom-control custom-checkbox mb-3"  style="padding-left: 10px">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <button class="btn btn-primary btn-block" name="login_user" type="submit" style="width: 265px" >Login</button>
                        <div class="or-seperator"><i>OR</i></div>
                      
                        <div class="btn-group btn-group-justified">
                           <button class="btn btn-rounded"><i class="fa fa-facebook-official"> Facebook </i></button>
                           <button class="btn btn-rounded"><i class="fa fa-google"> Google </i></button>
                        </div>
                        
                    </div>
                       
                         
                            
                        <div class="mt-4">
                            <div class="justify-content-center links">
                                <p>Don't have an account?<a href="register.php" class="ml-2">Sign Up</a></p>
                            </div>
                            <div class="justify-content-center links">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>
                         
                    </div>
            </form>
        </div>
                
   
                  
       
        <footer class="page-footer font-small pt-4">

            <div class="container-fluid text-center text-md-left">
                <div class="row">

                  <!-- Grid column -->
                <div class="col-md-2 mt-md-0 mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold ">Paws</h6>
                    <p align=justify>Our mission is provide high<br>
                        quality services and products<br>
                        to benefit your pets.</p> 

                </div>
                  
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
                      <p>paw@yahoo.com</p>
                      <p>+ 012 450 123</p>

                   </div>
                <!-- Grid row -->
                    <div class="col-md-2 mb-md-0 mb-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="padding-left:20px">Newsletter</h6>
                            <p style="padding-left:15px">Email promotions, news, and information</p>
                            <form name="form2" class="form-inline" style="border:10px">
                                <label class="sr-only" for="inputEmail" style="padding:20px">Email</label>
                                <input type="email" class="form-control" name="text1" id="inputEmail" placeholder="address@example.com" style="padding:10px" >
                                <div class="input-group-append">
                                    <button class="btn btn-primary"  type="submit" style="height:38px;">Subscribe</button>

                                </div>

                            </form>
                    </div>

                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright Paws.com,All right reserved.</div>
            
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
                var name = document.loginform.username.value;
                var password=document.loginform.password.value;
               


                // Defining error variables with a default value
                var nameErr  = passwordErr = true;

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

                if(password===""){
                    printError("passwordErr","Please enter password");
                }else{
                    // Regular expression for password validation
                    var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
                    if(regex.test(password) ===false) {
                        printError("passwordErr", "Invalid password");
                    } else{
                        printError("passwordErr", "");
                        passwordErr = false;
                    }
                }


                if((nameErr || passwordErr) === true) {
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
