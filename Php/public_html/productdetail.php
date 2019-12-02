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
        <link rel="stylesheet" href="style/productdetail.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
        <title>Product Detail</title>
        
        
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
            <div class="card">
                <div class="row">
                    <article class="col">
                        <div class="img-big-wrap">
                            
                            <div> <a href="index.php"><img src="image/p6.jpg" alt="Prodiet"></a></div>
                        </div> <!-- slider-product.// -->
                    </article> 
                    <!-- gallery-wrap .end// -->
                    <aside class="col">
                        <article class="card-body p-5">
                            <p class="title mb-3" style="font-family:Tahoma, Geneva, sans-serif	; font-size:30px">ProDiet 8KG Ocean Fish Dry Cat Food</p>
                            2 ratings 
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star-o checked"></i>
                            <i class="fa fa-star-o checked"></i>
                            (4/5) 
                            
                            <a class="pull-right" href="#">View reviews</a>  
                            <p class="price-detail-wrap" ><b>RM69</b></p>
                               
                            
                            <hr>
                            <label>Quantity :</label>
                            <div class="def-number-input number-input safari_only">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                <input class="quantity" min="0"  max="10" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                         
                            <a href="#" class="btn  btn-outline-primary text-uppercase"> <i class="fa fa-shopping-cart"></i> Add to cart </a>
                            <a href="summary.php" class="btn  btn-primary text-uppercase"> Buy now </a>
                            
                            <div class="product_rassurance" >
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Free delivery</li>
                                    <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Secure payment</li>
                                    <li class="list-inline-item"><i class="fa fa-refresh fa-2x"></i><br/>Full Refund</li>
                                </ul> 
                            </div>
                        </article> <!-- card-body.// -->
                    </aside>
                </div>
            </div>
        </div> <!-- card.// -->
        
       
        <div class="container">
             <!-- Portfolio Item Row -->
            <div class="row" style="padding:20px"></div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                    aria-selected="true">Product Description</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" id="guide-tab" data-toggle="tab" href="#guide" role="tab" aria-controls="guide"
                    aria-selected="false">Feeding Guide</a>
                </li>
               
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab" style="height:550px;">
                    <p style="color:darkblue;padding:10px;font-size:25px">Why Ocean Fish</p>
                    <p>ProDietOcean Fish Flavour is filled with Fresh Ocean Fish to satisfy every cat’s preference. Strictly certified suci bersih, ProDiet® is compliant with the GMP & HACCP regulations. 
                            Complete with additional nutrition, ProDiet Ocean Fish also helps Hairball control, reduces odour and helps maintain your cat’s dental hygiene.</p>
                    <p>Each ProDiet flavour has the same amount of protein to maintain the proper protein content to sustain your cat’s needs. This means that they help make up the immune system of your cats internal body structure.</p>
                    <ul>
                        <li>Fats are used to supply energy; fats make a diet more palatable to a cat and help to maintain a healthy skin and Haircoat. </li>
                        <li>By extensive research, we have included Carbohydrates into your cat’s diet to help provide extra energy. Carbohydrates are<br>typically made up primarily of sugars, starches and cellulose (fiber)</li>
                        <li>Protein which is available from real fish which helps the growth of healthy muscle,bone and organs for your cat.</li>
                        <li>Fish oil which is essential for the cat where it provides energy and also keeps your cat's coat healthy and shiny.</li>
                        <li>Taurine, an essential nutrient for your cat's good vision.</li>
                    </ul>
                    <br>
                    
                    <h5 style="padding:10px">Ingredients</h5>
                    <p>
                        Fish Meal (Ocean Fish), Corn, Soybean Meal, Rice, Poultry Meal, Corn Gluten Meal, Poultry Fat, Tuna Oil, Vegetable Oil, Taurine, Yucca, Essential Vitamins & Minerals, Vitamin E, Vitamin C, Choline chloride, Oligo Saccharid Enzyme and Food Grade Colour.
                    </p>
                    <br>
                </div>  
           

                <div class="tab-pane fade" id="guide" role="tabpanel" aria-labelledby="guide-tab" style="height:500px;">
                    <p style="font-size: 20px;color:darkblue"><br>Feeding Guidelines</p>
                    <ul>
                        <li> Store in a cool and dry place.</li>
                        <li>Keep remaining food re-sealed or closed in a container after use.</li>
                        <li> You can choose to serve your cat once or twice in a day according to the recommended daily feeding amount.</li>
                        <li>Make sure your cat's feeding and water dishes are always clean.</li>
                        <li>Recommended general feeding guideline only. Amount may vary by breed, age, activeness and environment.
                            Remember to provide fresh water for your cat at all times </li>
                    </ul>

                    <p style="font-size:20px;color:darkblue"><br>Daily Feeding Guide For Dry Food</p>
                    Weight of cat Amount of food per day
                    <ul type="square">
                        <li>2kg 40 – 50g</li>
                        <li>3kg 60 - 70g</li>
                        <li>4kg 80 - 90g</li>
                        <li>5kg 100 - 110g</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="background: white">
            <div class="card card-outline-secondary my-4" style="width:1125px;">
                <div class="card-header" >
                    <h3>Product Reviews</h3>
                </div>
                
            <div class="row">
                <div class="col-sm-3">
                    <div class="rating-block" style="padding:20px;">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7">4 <small>/ 5</small></h2>
                        <span class="fa fa-star checked" aria-hidden="true"></span>
                        <span class="fa fa-star checked" aria-hidden="true"></span>
                        <span class="fa fa-star checked" aria-hidden="true"></span>
                        <span class="fa fa-star checked" aria-hidden="true"></span>
                        <span class="fa fa-star-o checked" aria-hidden="true"></span>
		    </div>
		</div>
                <div class="col-sm-3" style="padding:20px;">
                    <h4>Rating breakdown</h4>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">5 <span class="fa fa-star"></span></div>
			</div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%;">
                                    <span class="sr-only">80% Complete (danger)</span>
				</div>
                            </div>
			</div>
                        <div class="pull-right" style="margin-left:10px;">1</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">4 <span class="fa fa-star"></span></div>
			</div> 
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
			    </div>
			</div>
                        <div class="pull-right" style="margin-left:10px;">1</div>
		    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">3 <span class="fa fa-star"></span></div>
			</div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                    <span class="sr-only">80% Complete (danger)</span>
				</div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">0</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div>2<span class="fa fa-star"></span></div>
			</div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">0</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div>1 <span class="fa fa-star"></span></div>
			</div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                    <span class="sr-only">80% Complete (danger)</span>
				</div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">0</div>
		    </div>
		</div>			
            </div>
                
                <hr>
                <div class="row" style="padding-left:40px">
                    <div class="col-sm-3">
                        <img src="image/user.png" class="img-rounded" alt="user">
                        <div class="review-block-name">Julia</div>
                        <div class="review-block-date">April 01, 2018<br/>10 day ago</div>
                    </div>
		
                <div class="col-sm-9">
                    <div class="review-block-rate">
                        <span class="fa fa-star checked" aria-hidden="true"></span>
			<span class="fa fa-star checked" aria-hidden="true"></span>
                        <span class="fa fa-star checked" aria-hidden="true"></span>
			<span class="fa fa-star checked" aria-hidden="true"></span>
			<span class="fa fa-star-o checked" aria-hidden="true"></span>
                    </div>
                    <div class="review-block-title">Nice Product</div>
                    <div class="review-block-description">My cats are picky and they both seem to enjoy this product.</div>
		</div>
            </div>
                
                <hr>
                <div class="row" style="padding-left:40px">
                
                    <div class="col-sm-3">
                        <img src="image/user.png" class="img-rounded" alt="user">
                        <div class="review-block-name"> Misty Blue</div>
                        <div class="review-block-date">January 01, 2018<br/>25 day ago</div>
                    </div>
		
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                        </div>
                        <div class="review-block-title">Fast delivery and the product is in the good condition</div>
                        <div class="review-block-description">
                            Kiki's all time favorite food. Still loves only Meow Mix and she's 10 years old now.
                        </div>
                    </div>
                </div>
                <br>
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
            $(document).ready(function(){

            var quantity =0;
           $('.quantity-right-plus').click(function(e){

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                    $('#quantity').val(quantity + 1);


                    // Increment

            });

             $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });

        });

        </script>
    </body>
</html>
        