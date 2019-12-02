<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->

<html>
    <head>
        <title>Product</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/product.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
   
    </head>
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
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <article class="card-group-item" style="padding: 20px;">
                        <header class="card-header">
                            <h6 class="title">Categories </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">Dry Food</span>
                                        </label> <!-- form-check.// -->
                                        <label class="form-check">
                                           <input class="form-check-input" type="checkbox" value="">
                                           <span class="form-check-label">Wet Food</span>
                                        </label>  <!-- form-check.// -->
                                        
                                </form>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> 
                    <article class="card-group-item" style="padding: 20px;">
                        <header class="card-header">
                            <h6 class="title">Brands </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="Meowmix">
                                    <span class="form-check-label">Meow Mix</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="Prodiet" >
                                    <span class="form-check-label">ProDiet</span>
                                    </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="frisky">
                                    <span class="form-check-label">Frisky</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="purinaone">
                                    <span class="form-check-label">Purina One</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="josera">
                                    <span class="form-check-label">Josera</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                    <span class="form-check-label">Whiskas</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                    <span class="form-check-label">Cindy Recipe's</span>
                                </label>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item" style="padding: 20px;">
                        <header class="card-header">
                            <h6 class="title">Price</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <div class="slidecontainer">    
                                    <input type="range" min="0" max="500" value="50" class="slider" id="myRange">
                                    <p style="padding:10px">RM<span id="demo"></span></p>
                                </div>
                                    
                            </div> <!-- card-body.// -->
                        </div>
                    </article> 
                </div>
                
                <div class="col-lg-9">
                    <div class="row">
                   
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="product-image">
                                    <a href="#"><img class="card-img-top" src="image/p2.jpg"></a>
                                </div>
                                
                                <div class="card-body" style="height:190px;">
                                    <p class="card-title" style="font-size:18px"><a href="">Frisky Cat Food 10kg</a></p>
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-size:17px;font-weight: bold">RM45</p>
                                            <div style="font-size: 0.6rem;">
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star-o fa-lg "></i>
                                            <i class="fa fa-star-o fa-lg"></i>
                                            (4)
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col" style="padding:10px;">
                                            <a href="#" class="btn btn-success btn-block" style="width:150px;"><i class="fa fa-shopping-cart"> Add to cart </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="product-image">
                                    <a href="#"><img class="card-img-top" src="image/p3.jpg" ></a>
                                </div>
                               
                                <div class="card-body"  style="height:190px;">
                                    <p class="card-title" style="font-size:18px"><a href="">Cindy Naturelle Salmon</a></p>
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-size:17px;font-weight: bold">RM42.90</p>
                                            <div style="font-size: 0.6rem;">
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star-o fa-lg"></i>
                                            (3)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="padding:10px;">
                                            <a href="#" class="btn btn-success btn-block" style="width:150px;"><i class="fa fa-shopping-cart"> Add to cart </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="product-image">
                                    <a href="#"><img class="card-img-top" src="image/p5.jpg"></a>
                                </div>
                                
                                <div class="card-body" style="height:190px;">
                                    <p class="card-title" style="font-size:18px"><a href="">Meow Mix Original Choice</a></p> 
                                    <div class="row">
                                        <div class="col">
                                             <p style="font-size:17px;font-weight: bold">RM45</p>
                                            <div style="font-size: 0.6rem;">
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star fa-lg checked"></i>
                                            <i class="fa fa-star-o fa-lg"></i>
                                            (3)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="padding:10px;">
                                            <a href="#" class="btn btn-success btn-block" style="width:150px;"><i class="fa fa-shopping-cart"> Add to cart </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="product-image">
                                    <a href="#"><img class="card-img-top" src="image/p8.jpg"></a>
                                </div>
                                
                                <div class="card-body" style="height:190px;">
                                    <p class="card-title" style="font-size:18px"><a href="productdetail.php">ProDiet 8kg Ocean Fish Dry Cat Food</a></p>
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-size:17px;font-weight: bold">RM69</p>
                                            <div style="font-size: 0.6rem;">
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star-o fa-lg"></i>
                                                (4)
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col" style="padding:10px;">
                                            <a href="#" class="btn btn-success btn-block" style="width:150px;"><i class="fa fa-shopping-cart"> Add to cart </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="product-image">
                                    <a href="#"><img class="card-img-top" src="image/p7.jpg"></a>
                                       
                                </div>
                                <div class="card-body" style="height:190px;">
                                    <p class="card-title" style="font-size:18px"><a href="">Josera Culinesse Adult 10Kg</a></p>
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-size:17px;font-weight: bold">RM155</p>
                                            <div style="font-size: 0.6rem;">
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked "></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                (4)
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col" style="padding:10px;">
                                            <a href="#" class="btn btn-success btn-block" style="width:150px;"><i class="fa fa-shopping-cart"> Add to cart </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="product-image">
                                        <a href="#"><img class="card-img-top" src="image/p9.jpg"></a>
                                       
                                    </div>

                                    <div class="card-body" style="height:190px;">
                                        <p class="card-title" style="font-size:18px"><a href="">ProDiet 8Kg Mackerel Dry Cat Food</a></p>
                                        <div class="row">
                                            <div class="col">
                                                <p style="font-size:17px;font-weight: bold">RM59.99</p>
                                                <div style="font-size: 0.6rem;">
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star fa-lg checked"></i>
                                                <i class="fa fa-star-o fa-lg "></i>
                                                <i class="fa fa-star-o fa-lg "></i>
                                                <i class="fa fa-star-o fa-lg"></i>
                                                (1)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col" style="padding:10px;">
                                                <a href="#" class="btn btn-success btn-block" style="width:150px;"><i class="fa fa-shopping-cart"> Add to cart </i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="pagination" >
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
                    
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
                            <div class="form-group">
                                <label class="sr-only" for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="text1" id="inputEmail" placeholder="address@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"  type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright Paws.com,All right reserved.</div>

        </footer>
        
        <script>
            
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
          output.innerHTML = this.value;
        }
</script>
            
       

    </body>
</html>




  