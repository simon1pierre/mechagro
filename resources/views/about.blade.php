<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ asset('home_asset/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('home_asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home_asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home_asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('home_asset/css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('home_asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('home_asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('home_asset/css/style.css') }}">
  </head>
  <body>
   <div class="container pt-5">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="index.html">AGRO<span>MECH.</span></a>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="https://www.linkedin.com/in/simon-pierre-turamyumukiza-11782b322?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only">LinkedIn</i></span></a>
		    		</p>
                    <p class="mb-0 d-flex">
                    @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth

                                @if (Auth::user()->role == 0) 
								
                                  <a href="{{ route('admin') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70">
					                     Admin || Panel
                                 </a>
                                @else
                   
                                   <a href="{{ route('vendor') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70">
                                         Farmer || Panel
                                 </a>
            
                                @endif
                                    
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="/machines" class="nav-link">Machines</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('home_asset/images/tractor2.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div>

				<!--about us -->

    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-4">
		          	<span class="subheading">Welcome to Agromech</span>
		            <h2 class="mb-4">We create and turn into reality</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>To have streamlined farming services for farmers across Rwanda sector by sector, & province by province.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        
			
			
			</div>
        </div>
    	</div>
    </section>

   <!-- here is where countings were -->


    <section class="ftco-section ftco-no-pt ftco-no-pb">
		  <div class="container-fluid px-md-0">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url('home_asset/images/work-2.jpg');">
            	<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.html">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url('home_asset/images/work-2.jpg');">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.html">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url('home_asset/images/work-3.jpg');">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.html">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url('home_asset/images/work-4.jpg');">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.html">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url('home_asset/images/work-5.jpg');">
            	<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.html">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url('home_asset/images/work-6.jpg');">
            	<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.html">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
		</section>
        <section class="ftco-section testimony-section bg-primary">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
			<div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('home_asset/images/Dairy farmer.webp')"></div>
                    	<div class="pl-3">
		                    <p class="name">Murekezi Jean D'amour </p>
		                    <span class="position">Dairy Farmer</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('home_asset/images/Tomato farmer.jpg')"></div>
                    	<div class="pl-3">
		                    <p class="name">Akimana Claudette</p>
		                    <span class="position">Tomato Farmer</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
			  
             <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url('home_asset/images/person_3.jpg')"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                </div>
	                  </div>
                  </div>
                </div>  
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    
   
    <footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">About us</h2>
								<p>We are here to streamline agricultural services.</p>
								<ul class="ftco-footer-social p-0">
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
					  <li class="ftco-animate">
						<a href="https://www.linkedin.com/in/simon-pierre-turamyumukiza-11782b322?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" data-toggle="tooltip" data-placement="top" title="LinkedIn">
							<span class="ion-logo-linkedin"></span>
						</a>
					</li>

		            </ul>
							</div>
							<div class="col-md-8">
								<div class="row justify-content-center">
									<div class="col-md-12 col-lg-10">
										<div class="row">
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Services</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Booking machines</a></li>
						              <li><a href="#" class="py-1 d-block">Irrigation services</a></li>
						              <!--more services here-->
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">About</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">team</a></li>
						            
						              
						            </ul>
											</div>
											<!--more resources on footer section-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-md-5">
							<div class="col-md-12">
							<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved || AGROMECH || Developed</i> by <a href="https://www.linkedin.com/in/simon-pierre-turamyumukiza-11782b322?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">Twosixe </a>&
					  <a href="https://www.linkedin.com/in/ntwari-aaron/" target="_blank">Aaron Ntwari</a>                                                                                                                            
					  </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
						<h2 class="footer-heading">Submit Request</h2>
						<form action="#" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
              	<button type="submit" class="form-control submit px-3">Send</button>
              </div>
            </form>
					</div>
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">AGROMECH
    <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
</svg>
</div>

  <script src="{{ asset('home_asset/js/jquery.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/popper.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('home_asset/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/jquery.stellar.min.js') }} "></script>
  <script src="{{ asset('home_asset/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('home_asset/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('home_asset/js/google-map.js') }}"></script>
  <script src="{{ asset('home_asset/js/main.js') }}"></script>
    
  </body>
</html>