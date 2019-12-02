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
        <link rel="stylesheet" href="style/home.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
        <title>Home Page</title>
        
        <style>
            .bg-image {
            /* The image used */
            background-image: url("image/paws.jpg");
            
        </style>
        
    </head>
  
    <?php
	session_start();
	
    // Check for submission
	if(isset($_POST['subscribe'])){

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
                $sql1 = "INSERT INTO subscription
                        (email) VALUES
                        ( '". $_POST['email'] ."');
                        ";

                if(mysqli_query($conn, $sql1)) {
                        //Successfully registered
                        header('location: blog.php');
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
        <div class="bg-image"></div>
        <div class="bg-text">
          <h1 style="font-size:75px">Welcome to Paws</h1>
          <h5 style="font-size:25px">We offer all best quality products and services<br>for your pets</h5>
        </div>
        
        
        
        <div class="info-container text-center" >
            <p style="font-size:36px">What We Do</p>
            <div class="row text-center" style="padding:20px" >
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/vet.jpg" alt="vet"  class="rounded-circle">
                        <h4>Services</h4>

                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/food2.jpg"  alt="product" style="height:250px;width:300px">
                        <h4>Great Products</h4>
                    </div>
                </div>
                         
            
                <div class="col-sm-4">
                   <div class="thumbnail">
                       <img src="image/tips.jpg" alt="tips" style="background-color:black"  class="rounded-circle">
                       <h4>Helpful Tips</h4>
                   </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-12">
            <h2>Trending <b>Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol> 
		
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p15.jpg" class="img-responsive img-fluid" alt="Purina One">
                                    </div>
                                    <div class="thumb-content">
                                        <h5>PURINA ONE Adult Cat Food with Tuna (500g)</h5>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
					    </ul>
                                        </div>
                                        <p class="item-price"><b>RM21.90</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
				    </div>						
			        </div>
			    </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p3.jpg" class="img-responsive img-fluid" alt="Cindy">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Cindy Naturelle Salmon</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
					    </ul>
                                        </div>
                                        <p class="item-price"><b>RM42.90</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
				    </div>		
			        </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p5.jpg" class="img-responsive img-fluid" alt="Meow Mix">
			            </div>
                                    <div class="thumb-content">
                                        <h4>Meow Mix Original Choice</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
					    </ul>
                                        </div>
                                        <p class="item-price"><b>RM45.00</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>	
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p7.jpg" class="img-responsive img-fluid" alt="Josera">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Josera Culinesse Adult 10kg</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
					    </ul>
                                        </div>
                                        <p class="item-price"><b>RM155.00</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p10.jpg" class="img-responsive img-fluid" alt="Whiskas">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Whiskas Multipack 85gmx2Box</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
					    </ul>
                                        </div>
                                        <p class="item-price"><b>RM31.00</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p11.jpg" class="img-responsive img-fluid" alt="ProDiet">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>ProDiet Chicken & Tuna 85g</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><b>RM1.40</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>		
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p12.jpg" class="img-responsive img-fluid" alt="Friskies">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Friskies Canned Sea Delight</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
					    </ul>
                                        </div>
                                        <p class="item-price"><b>RM4.80</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p8.jpg" class="img-responsive img-fluid" alt="ProDiet">	
                                    </div>
                                    <div class="thumb-content">
                                        <h5>ProDiet 8kg Ocean Fish Dry Cat Food</h5>	
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><b>RM69.00</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                            
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p1.jpg" class="img-responsive img-fluid" alt="Meow Mix">
                                    </div>
                                    <div class="thumb-content">
                                        <h5>Meow Mix Chicken Flavor Dry Cat Food</h5>	
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><b>RM67.00</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>		
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p2.jpg" class="img-responsive img-fluid" alt="Frisky">	
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Frisky Cat Food 10kg</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><b>RM45.00</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>	
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p9.jpg" class="img-responsive img-fluid" alt="ProDiet">		
                                    </div>
                                    <div class="thumb-content">
                                        <h5>ProDiet 8kg Mackerel Dry Cat Food</h5>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><b>RM59.99</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>		
                                </div>
                            </div>	
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="image/p13.jpg" class="img-responsive img-fluid" alt="Cindy's Recipe">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Cindy's Recipe Originals</h4>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><b>RM2.50</b></p>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
                <!-- Carousel controls -->
		<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
		</a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
		</a>
            </div>
	</div>
        
        <footer class="page-footer font-small pt-4">
            
            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
                
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-2 mt-md-0 mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold ">Paws</h5>
                        <h6>Our mission is provide high<br>quality services and products<br>to benefit your pets.</h6> 

                    </div>
                    <!-- Grid column -->
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <!-- Grid column -->
                    <div class="col-md-2 mb-md-0 mb-3" style='padding-left:80px' >
                        <!-- Links -->
                        <h6 class="text-uppercase mb-4 font-weight-bold">Paws</h6>
                            <p>Home</p>
                            <p>About Us</p>
                            <p>Services</p>
                            <p>Career</p>
                    </div>

                           <!-- Grid column -->
                    <div class="col-md-2 mb-md-0 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase mb-4 font-weight-bold">Customer Services</h6>
                            <p>FAQ</p>
                            <p>Terms and Condition</p>
                            <p>Privacy Policy</p>
                    </div>

                          <!-- Grid column -->
                    <div class="col-md-2 mb-md-0 mb-3" >
                        <!-- Links -->
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p>paw@yahoo.com</p>
                        <p>+ 012 450 123</p>

                    </div>
                        <!-- Grid row -->
                    <div class="col-md-2 mb-md-0 mb-3" >
                        <h6 class="text-uppercase mb-4 font-weight-bold">Newsletter</h6>
                        <p>Email promotions, news, and information</p>
                        <form name="form2" class="form-inline">
                            <div class="form-group" method="post">
                                <label class="sr-only" for="inputEmail">Email</label>
                                <!-- or type="text"-->
                                <input type="email" class="form-control" name="text1" id="inputEmail" placeholder="address@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"  type="submit" onclick="validateEmail(document.form2.text1)">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright Paws.com,All right reserved.</div>

        </footer>
       <!-- Footer -->
        <script>
        $(document).ready(function(){
                    $(".wish-icon i").click(function(){
                            $(this).toggleClass("fa-heart fa-heart-o");
                    });
            });	
        </script>
    </body>
</html>
