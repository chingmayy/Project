<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/blog.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

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
    
  <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="my-4">Useful Care Tips and Advice <br> </h1>
          
                <div class="card mb-4">
                    <img class="card-img-top" src="image/cat5.jpg" alt="Cat" >
                    <div class="card-body">
                        <h2 class="card-title">Understanding Cat Body Language</h2>
                        <h6><i class="fa fa-calendar" aria-hidden="true"></i><span class="w3-opacity"> February 10, 2019</span></h6>
                        <p class="card-text">Sometimes it can be hard to read your cat. Cats can’t talk to you and tell you what they're 
                            feeling. However there are ways to read your pet’s body language to determine what sort of mood they might be in. 
                            Understanding your cat’s body language will help you be a good friend and companion.</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>

                </div>

                <div class="card mb-4">
                    
                    <img class="card-img-top" src="image/meow.jpg" alt="meow" style="height:460px">
                    <div class="card-body">
                        <h2 class="card-title">5 Reasons Why Cats Meow</h2>
                        <h6><i class="fa fa-calendar" aria-hidden="true"></i><span class="w3-opacity"> December 7, 2018</span></h6>
                        <p class="card-text">According to Arden Moore, author of The Cat Behavior Answer Book, “cats are capable of making at least 30 sounds, including at least 19 variations on the simple meow.”So why do cats meow? Find out here.</p>
                        <a href="blog 2.html" class="btn btn-primary">Read More &rarr;</a>
                    </div>

                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="image/scratch.jpg" alt="scratch">
                    <div class="card-body">
                        <h2 class="card-title">How to Stop Cats Scratching Furniture.</h2>
                        <h6><i class="fa fa-calendar" aria-hidden="true"></i><span class="w3-opacity"> April 10, 2019</span></h6>
                        <p class="card-text">If you have a cat that won't stop scratching your furniture, you're probably wondering how to make them stop it. This handy guide can help you to prevent your kitty from shredding your sofa! Keep reading to find out more.</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                  </div>

                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>

                    <li class="page-item disabled">
                      <a class="page-link" href="#">Next &rarr;</a>
                    </li>
                </ul>

            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Side Widget -->
                <div class="card my-4" style="border:0px">
                    
                    <h5 class="card-header" style="background:white">Popular post</h5>
                    <div class="card-body">
                        <div class="row">
                            <a href="#"><img src="image/strange.jpg" alt="strange" style="width:130px;margin:8px"></a>
                                <div class="col-sm">
                                    <p style="">Strange cat behavior <br> 5 May 2019  </p>
                                </div>

                                <img src="image/cat-box.jpg" alt="strange" style="height:80px;width:130px;margin:8px">
                                    <div class="col-sm">
                                        <p style="font-weight:bold">Why Do Cats Like Boxes <br> 10 May 2019
                                        </p>   
                                    </div>

                                <img src="image/cat-grass.jpg" alt="strange" style="height:80px;width:130px;margin:8px">
                                    <div class="col-sm">
                                        <p style="font-weight:bold">Why Do Cats Eat Grass<br>15 May 2019</p>
                                    </div>

                                <img src="image/cat-water.jpg" alt="strange" style="height:80px;width:130px;margin:8px">
                                    <div class="col-sm">
                                        <p style="font-weight:bold">Common Questions About Cat and Water  <br> 5 May 2019
                                        </p>
                                    </div>

                        </div>
                    </div>

                </div>
       
        
                <div class="card my-4">
                    <h5 class="card-header" style="background:white">Tags</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="list-unstyled mb-0">
                                    
                                    <li>
                                      <a class="myButton" style="color:white">meow</a>
                                    </li>

                                    <li>
                                        <a class="myButton" style="color:white">scratch</a>

                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="list-unstyled mb-0">
                                  <li>
                                      <a class="myButton" style="color:white">food</a>
                                  </li>

                                  <li>
                                    <a class="myButton" style="color:white">boxes</a>
                                  </li>
                                </ul>
                            </div>

                            <div class="col-lg-3">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="myButton" style="color:white">behavior</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
  
    <!-- /.container -->

    <!-- Footer -->
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
                                <button class="btn btn-primary"  type="submit" style="height:38px">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2019 Copyright Paws.com,All right reserved.</div>
        
    </footer>

</body>

</html>

