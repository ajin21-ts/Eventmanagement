
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<title>Wedding Plan a Wedding Website </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Wedding Plan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
			<div class="w3layouts-header-top">
				<div class="container">
					<div class="w3-header-top-grids">
						<div class="w3-header-top-left">
							<img src="images/logo.png"height="150px"width="150px">
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<?php
							if(empty($_SESSION["email"]))
							{
								?>
								<div class="clearfix"> </div><a href="login.php"class="btn btn-success">Login</a>
								<img src="images/1.png" height="50"width="50">
							<?php
							}
							else
							{
							?>
							<div class="clearfix"> </div><a href="logout_action.php"class="btn btn-success">Logout</a>
							<img src="images/1.png" height="50"width="50"><a href="" class="session"><?php echo $_SESSION["email"]?></a> 
							<?php
							}
							?>
                                               
						</div>
						
						<div class="clearfix"> </div>
                        
					</div>
				</div>
			</div>
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1><a href="index.php">Gettimealam Decoration & wedding<span>Planner</span></a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li class="active first-list"><a href="index.php">Home</a> </li>
								<li><a href="about.php">About </a> </li>
								<li><a href="gallery.php">Gallery</a></li>
								<li class="dropdown">
									<a href="codes.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Profile <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="jobstatus.php">Job status</a></li>
										<li><a href="codes.php">Codes</a></li>
									</ul>
								</li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
										<h3>Wedding Planning</h3>
										<p>Our Full Service Wedding Planning includes every aspect of planning your wedding.We will work with you to plan a wedding according to your style.</p>
										<div class="w3-button">
											<div class="w3ls-button">
												<a href="single.php">Read More..</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>Venue Booking</h3>
										<p>We will help you with locating venues, designing your event, logistics, negotiating contracts and all the other details that go into planning an event.</p>
										<div class="w3-button">
											<div class="w3ls-button">
												<a href="single.php"> Read More..</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>cattring events</h3>
										<p>Food plays an important role in making any ceremony a better .we provide all kind of food items along customer satisfaction.</p>
										<div class="w3-button">
											<div class="w3ls-button">
												<a href="single.php">More</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>photography</h3>
										<p>We are the Top rated Wedding Photographers. We provide all kind of Wedding Photo shoots & Videos.</p>
										<div class="w3-button">
											<div class="w3ls-button">
												<a href="single.php">More</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="w3-heading-grid">
				<h2>Welcome</h2>
				<div class="agileits-border"> </div>
				<p><p>Welcome to our gettimealam decoration & wedding planner website! We're looking forward to celebrating with you in Colorado. Please browse our website to find everything you'll need to know to get ready for our big day. Love, Sam and Avery </p>
			</div>
			<div class="w3l-welcome-grids">
				<div class="col-md-5 w3ls-welcome-left">
					<img src="images/3.jpg" alt="" />
				</div>
				<div class="col-md-7 w3ls-welcome-right"style="font-size:20px;">
					<h4>We Provides:-</h4>
					<p>Many events and we can make your day with best memories and colorfull you want to see more number of models and verieties of themes of stage works and allover wedding plans are avilable with good wedding planners.
						<span>would you like to see our modes and our wedding plans in this website that will be given as follows. </span>
					</p>
					<ul>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> Wedding stage work</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> Birthday party</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> Educational event works</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> Political event works</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> outdoor wedding shoot</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- choose-us -->
	<div class="why-choose-agile">
		<div class="container">
			<div class="w3-heading-grid">
				<h3>Why Choose Us</h3>
				<div class="agileits-border"> </div>
			</div>
			<div class="why-choose-agile-grids-top">
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Grand look</h4>
							<p>We provide a grand look of whole wedding process and all kind of work done by our team </p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-glass" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Low price</h4>
							<p>The whole kind of wedding planning will be provided by a low budject with you own thiking and you design</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-inr" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>customiz your plan</h4>
							<p>we have a choose to customized your wedding and we have a plans and you can change it your own</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 agileits-w3layouts-grid img">
					<img src="images/img4.jpg"alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text agile-icon-left">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-tasks"aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Whole planning</h4>
							<p>If once you bokked thw whole wedding plan don't worry about it we can do all the process and we make your day memorable</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text agile-icon-left">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-history" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>our experience</h4>
							<p>We are in the fiel at since 20 years and we have more experience abot it so we can make a good wedding process</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text agile-icon-left">
								<div class="wthree_features_grid hvr-rectangle-out">
									<i class="fa fa-users" aria-hidden="true"></i>
								</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Our team</h4>
							<p>Oue team have well experienced and professionalized managers and workers </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //choose-us -->
	<!-- popular -->
	<div class="popular-section-wthree jarallax">
		<div class="agileinfo-dot">
			<div class="container">	
				<div class="w3-heading-grid popular-heading">
					<h3>Popular Services</h3>
					<div class="agileits-border"> </div>
				</div>
				<div class="popular-agileinfo">
					<div class="col-md-3 popular-grid">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<h4>Wedding stage work</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellus</p>
					</div>
					<div class="col-md-3 popular-grid">
						<i class="fa fa-anchor" aria-hidden="true"></i>
						<h4>Food </h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellus</p>
					</div>
					<div class="col-md-3 popular-grid popular-grid-bottom">
						<i class="fa fa-book" aria-hidden="true"></i>
						<h4>Photography</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellus</p>
					</div>
					<div class="col-md-3 popular-grid">
						<i class="fa fa-car" aria-hidden="true"></i>
						<h4>Outdoor beach work</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellus</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //popular -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="w3-heading-grid">
				<h3>News & Events</h3>
				<div class="agileits-border"> </div>
			</div>
			<div class="w3-agileits-news-grids">
				<div class="col-md-6 news-left">
					<div class="w3-agile-news-date">
						<div class="agile-news-icon">
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<p>Nov 24</p>
						</div>
						<div class="agileits-line"> </div>
						<div class="agile-news-icon">
							<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
							<p>2 Comments</p>
						</div>
						<div class="agileits-line"> </div>
						<div class="agile-news-icon">
							<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
							<p>3482</p>
						</div>
					</div>
					<div class="w3-agile-news-img">
						<a href="single.php"><img src="images/5.jpg" alt="" /></a>
						<h4><a href="single.php">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</a></h4>
						<p>Donec justo ante, maximus et aliquam et, elementum ac purus. Nam eget ante ac velit laoreet sodales ut vel nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed quam nibh. In sed nisi enim. Duis eget nunc vitae elit dignissim feugiat. Morbi molestie fringilla ipsum, id molestie dolor sodales vel.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-right">
					<div class="news-right-grid">
						<a href="single.php">Nunc non neque ex. Aliquam neque massa</a>
						<h5>06th Nov,2017</h5>
						<p>Ut rutrum convallis erat at malesuada. Donec facilisis sem nisl, ut rhoncus ex ullamcorper ornare. Ut ac interdum velit. Cras nulla nibh, rutrum non venenatis sit amet, ullamcorper venenatis felis.</p>
					</div>
					<div class="news-right-grid">
						<a href="single.php">Phasellus sapien eros, condimentum quis</a>
						<h5>17th Nov,2017</h5>
						<p>Ut rutrum convallis erat at malesuada. Donec facilisis sem nisl, ut rhoncus ex ullamcorper ornare. Ut ac interdum velit. Cras nulla nibh, rutrum non venenatis sit amet, ullamcorper venenatis felis.</p>
					</div>
					<div class="news-right-grid">
						<a href="single.php">Donec justo ante, maximus et aliquam et</a>
						<h5>29th Nov,2017</h5>
						<p>Ut rutrum convallis erat at malesuada. <wbr>Donec facilisis sem nisl, ut rhoncus ex ullamcorper ornare. Ut ac interdum velit. Cras nulla nibh, rutrum non venenatis sit amet, ullamcorper venenatis felis.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- footer -->
	<div class="footer-bottom">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 w3agile_footer_grid">
					<h3>About Us</h3>
					<p>Etiam ut maximus mauris, eu pretium neque. Donec nibh lectus, blandit id metus non, bibendum dictum quam.
					<span>Ut finibus metus eget mi lacinia, et vulputate metus consectetur. Sed sed sem in tortor faucibus pharetra non ac est.</span></p>
				</div>
				
				<div class="col-md-3 w3agile_footer_grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i> 19-4G,Palpanni,Bethelpuram(po),629803. <span>kk dict.</span></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:example@email.com">gettimelm143@gmail.com</a></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +91 7397589498</li>
					</ul>
				</div>
				<div class="col-md-3 w3agile_footer_grid w3agile_footer_grid1">
					<h3>Navigation</h3>
					<ul>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="about.php">About</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="gallery.php">Gallery</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="blog.php">Blog</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="icons.php">Icons</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="codes.php">Short Codes</a></li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3agile_footer_grid">
					<h3>Newsletter</h3>
					<p>Subscribe With Us</p>
					<form action="#" method="post">
						<input type="email" placeholder="Subscribe" name="Subscribe" required="">
						<button class="btn1">Go</button>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2017 Wedding Plan. All rights reserved | Design by <a>Ajin</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>