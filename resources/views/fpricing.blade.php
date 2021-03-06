@extends('layouts.general')
        <!-- banner part starts -->
        @section('content')
         <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
               <div class="container">
                  <ul class="row links">
                     <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="#">Choose Your Location</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="#">Choose Restaurant</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a href="#">Pick Your favorite food</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="#">Order and Pay online</a></li>
                  </ul>
               </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image space-md" data-image-src="http://placehold.it/1670x480">
               <div class="container text-xs-center m-b-20">
                  <h1 class="font-white">Search Your Favour Food</h1>
                  <p class="font-white">Find restaurants, specials, and coupons for free</p>
               </div>
            </div>
            <!-- end:Inner page hero -->
            <div class="pricing-page">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5 offset-md-1 col-sm-6">
                        <div class="pricing-box">
                           <span class="price">
                           <span class="currency">$</span>0</span>
                           <h2>Free plan</h2>
                           <p>Sign up for free plan</p>
                           <ul data-cloneable="" data-group="" class="">
                              <li>No joining fees</li>
                              <li>50 orders per month</li>
                              <li>Get noticed</li>
                              <li>Gain exposure</li>
                           </ul>
                           <div data-group=""> <a href="#" class="btn theme-btn">Sign up now</a> </div>
                        </div>
                     </div>
                     <div class="col-md-5 col-sm-6">
                        <div class="pricing-box">
                           <span class="price">
                           <span class="currency">$</span>9</span>
                           <h2>Premium plan</h2>
                           <p>Sign up for premium plan</p>
                           <ul data-cloneable="" data-group="" class="">
                              <li>No joining fees</li>
                              <li>Unlimited orders per month</li>
                              <li>Get noticed</li>
                              <li>Gain exposure</li>
                           </ul>
                           <div data-group=""> <a href="#" class="btn theme-btn">Sign up now</a> </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:row -->
                  <div class="row pricing-faq m-t-30">
                     <div class="col-md-5 offset-md-1 col-sm-6" data-cloneable="">
                        <div>
                           <h3>What is a account?</h3>
                           <p>Yeah, I like animals better than people sometimes… Especially dogs. Dogs are the best. Every time you come home, they act </p>
                        </div>
                        <div>
                           <h3>Is there any fee?</h3>
                           <p>Like they haven’t seen you in a year. And the good thing about dogs… is they got different dogs for different people. Like pit bulls. The dog of dogs. Pit bull can be the right man’s best friend</p>
                        </div>
                        <div>
                           <h3>What payment methods are accepted?</h3>
                           <p>Phe wrong man’s worst enemy. You going to give me a dog for a pet, give me a pit bull. Give me… Raoul. Right, Omar? Give me Raoul.</p>
                        </div>
                     </div>
                     <div class="col-md-5 col-sm-6" data-cloneable="">
                        <div>
                           <h3>Can I setup multiple brands in one account?</h3>
                           <p>Like they haven’t seen you in a year. And the good thing about dogs.</p>
                        </div>
                        <div>
                           <h3>Can I use Docs without the help desk?</h3>
                           <p>You going to give me a dog for a pet, give me a pit bull. Give me… Raoul. Right, Omar? Give me Raoul.</p>
                        </div>
                        <div>
                           <h3>What’s your support like?</h3>
                           <p>Or the wrong man’s worst enemy. You going to give me a dog for a pet, give me a pit bull. Give me… Raoul. Right, Omar? Give me Raoul.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end:Container -->
            </div>
            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                              <figure> <img src="images/app.png" alt="Right Image"> </figure>
                           </div>
                           <div class="col-xs-12 col-sm-6 left-text">
                              <h3>The Best Food Delivery App</h3>
                              <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                              <div class="social-btns">
                                 <a href="#" class="app-btn apple-button clearfix">
                                    <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                 </a>
                                 <a href="#" class="app-btn android-button clearfix">
                                    <div class="pull-left"><i class="fa fa-android"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- start: FOOTER -->
            <footer class="footer">
               <div class="container">
                  <!-- top footer statrs -->
                  <div class="row top-footer">
                     <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="images/food-picky-logo.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> 
                     </div>
                     <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                           <li><a href="#">About us</a> </li>
                           <li><a href="#">History</a> </li>
                           <li><a href="#">Our Team</a> </li>
                           <li><a href="#">We are hiring</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul>
                           <li><a href="#">Enter your location</a> </li>
                           <li><a href="#">Choose restaurant</a> </li>
                           <li><a href="#">Choose meal</a> </li>
                           <li><a href="#">Pay via credit card</a> </li>
                           <li><a href="#">Wait for delivery</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                           <li><a href="#">Search results page</a> </li>
                           <li><a href="#">User Sing Up Page</a> </li>
                           <li><a href="#">Pricing page</a> </li>
                           <li><a href="#">Make order</a> </li>
                           <li><a href="#">Add to cart</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                           <li><a href="#">Sarajevo</a> </li>
                           <li><a href="#">Split</a> </li>
                           <li><a href="#">Tuzla</a> </li>
                           <li><a href="#">Sibenik</a> </li>
                           <li><a href="#">Zagreb</a> </li>
                           <li><a href="#">Brcko</a> </li>
                           <li><a href="#">Beograd</a> </li>
                           <li><a href="#">New York</a> </li>
                           <li><a href="#">Gradacac</a> </li>
                           <li><a href="#">Los Angeles</a> </li>
                        </ul>
                     </div>
                  </div>
                  <!-- top footer ends -->
                  <!-- bottom footer statrs -->
                  <div class="row bottom-footer">
                     <div class="container">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 payment-options color-gray">
                              <h5>Payment Options</h5>
                              <ul>
                                 <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-xs-12 col-sm-4 address color-gray">
                              <h5>Address</h5>
                              <p>Concept design of oline food order and deliveye,planned as restaurant directory</p>
                              <h5>Phone: <a href="tel:+080000012222">080 000012 222</a></h5>
                           </div>
                           <div class="col-xs-12 col-sm-5 additional-info color-gray">
                              <h5>Addition informations</h5>
                              <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- bottom footer ends -->
               </div>
            </footer>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>@endsection