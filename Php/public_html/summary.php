<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/summary.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link rel="stylesheet" href="style/summary.css" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      
    </head>
    
    <body>
        <nav class="navbar navbar-expand-md bg-white static-top justify-content-center">
            <a class="navbar-brand" href="index.php" style="padding-left:40px">
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
        
        
        <div class="card mb-4" style="border:transparent">
            <div style="padding:50px">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Product</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Price</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Quantity</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Remove</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="border-0">
                                <div class="p-2">
                                    <img src="image/p6.jpg" alt="prodiet" width="70" class="img-fluid rounded shadow-sm">
                                    <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">ProDiet 8KG Ocean Fish Dry Cat Food</a></h5>
                                    </div>
                                </div>
                            </th>
                            <td class="border-0 align-middle"><strong>RM69</strong></td>
                            <td class="border-0 align-middle"><strong> 1 </strong></td>
                            <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="container" style="padding:100px">
            <div class="row py-3 p-4 bg-white rounded" style="width:1200px;">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>RM69</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping Fee</strong><strong>0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">RM69</h5>
                        </li>
                    </ul>
                    <a href="#" class="btn rounded-pill py-2 btn-block" >Place Order</a>
                </div>
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
                    <h6 class="text-uppercase mb-4 font-weight-bold ">Paws</h6>
                    <p align=justify>Our mission is provide high<br>
                        quality services and products<br>
                        to benefit your pets.</p> 

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
                    <p>paw@yahoo.com</p>
                    <p>+ 012 450 123</p>

                 </div>
                <!-- Grid row -->
                <div>
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="padding-left:5px">Newsletter</h6>
                        <p style="padding-left:5px">Email promotions, news, and information</p>
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
    </body>
</html>
