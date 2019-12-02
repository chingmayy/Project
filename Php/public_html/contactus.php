<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact US</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/contact.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
       
    </head>

<body>
     <?php
        
        // always start a session in the beginning
        session_start();
      
        //connect to database
        $conn = mysqli_connect('localhost', 'root', '','project');
        
        if (isset($_POST['send']))
        {
            if($conn === mysqli_connect('localhost', 'root', '', 'project')) {
                        if($result === mysqli_query($conn, $query)) {
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
                $query = "INSERT INTO contact
                        (username, email,text) VALUES
                        ('". $_POST['username'] ."', '". $_POST['email'] ."', '". $_POST['text'] ."');
                        ";

                if(mysqli_query($conn, $query)) {
                        //Successfully registered
                        header('location: home.php');
                        exit();
                }
            }
        }
        
    ?>
 
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
                            <a href="#" class="dropdown-item">Sign Out</a>
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
    
    
        <div class="contact-form">
                <form name="contact"  method="post" onsubmit="return validateForm()">
                <h1>Contact Us</h1>
                        <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query related to our products or services.</p>
                        <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" name="username" placeholder="name">
                                <div class="error" id="nameErr" style="red"></div>
                        </div>
                        <div class="form-group">
                                <label for="inputEmail">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="xxx@gmail.com" >
                                <div class="error" id="emailErr" style="red"></div>
                        </div>
                        <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea class="form-control" name="text" id="inputMessage" rows="5" ></textarea>
                        </div>
                        <button type="submit" id="submit" name="send" value="Submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Send Message</button>
                </form>
        </div>
        <footer class="page-footer font-small pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        
        <!-- Grid row -->
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
                
            <div class="col-md-2 mb-md-0 mb-3">
                
                <!-- Links -->
                <h6 class="text-uppercase mb-4 font-weight-bold">Customer Services</h6>
                <p>FAQ</p>
                <p>Terms and Condition</p>
                <p>Privacy Policy</p>
            </div>

            <div class="col-md-2 mb-md-0 mb-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>paw@yahoo.com</p>
                <p>+ 012 450 123</p>
            </div>
            
            <div class="col-md-2 mb-md-0 mb-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Newsletter</h6>
                <p>Email promotions, news, and information</p>
                <form name="form2" class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Email</label>
                        <input type="email" class="form-control" name="text1" id="inputEmail" placeholder="address@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <div class="input-group-append">
                            <button class="btn btn-primary"  type="submit" style="height:38px;" >Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright Paws.com,All right reserved.</div>
    </footer>
    <script>
        
        function printError(elemId,hintMsg)
        {
            document.getElementById(elemId).innerHTML=hintMsg;
        }
        
        function validateForm()
        {
            var name= document.contact.inputName.value;
            var email=document.contact.inputEmail.value;
        
        var nameErr = emailErr =true;
        
        if (name==="")
        {
            printError("nameErr","Please enter name");
        }else
        {  // letters only in a field
            var regex=/^[A-Za-z]+$/;
            if (regex.test(name)===false){
                printError("nameErr","Enter a valid name");
            }else{
                printError("nameErr","");
                nameErr=false;
            }
        }
        
        if(email === "") {
            printError("emailErr", "Please enter your email address");
        } else {
        // Regular expression for basic email validation
        // refer to www.w3resource.com/javascript/form/email-validation.php
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(regex.test(email) === false) 
            {
                printError("emailErr", "Please enter a valid email address");
            } 
            else{
                printError("emailErr", "");
                emailErr = false;
            }
        }
        
        if((nameErr || emailErr) === true) {
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

