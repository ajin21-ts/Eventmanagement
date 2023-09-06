
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<title>Wedding Plan a Wedding Website</title>
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
							<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +91 7397589498</p>
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-vk"></i></a></li>
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
							<div class="clearfix"> </div>
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
									<h1><a href="index.php">Wedding <span>Plan</span></a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li class="first-list"><a href="index.php">Home</a> </li>
								<li><a href="about.php">About </a> </li>
								<li><a href="gallery.php">Gallery</a></li>
								<li class="dropdown">
									<a href="codes.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Profile<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="jobstatus.php">job status</a></li>
										<li><a href="codes.php">Codes</a></li>
									</ul>
								</li>
								<li class="active"><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<div class="agileinfo-banner">
				<div class="container">
					<h2>Blog</h2>
				</div>
			</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="agile-blog-grids">
				<div class="col-md-8 agile-blog-grid-left">
					<div class="agile-blog-grid">
						<div class="agile-blog-grid-left-img">
							<a href="single.php"><img src="images/g3.jpg" alt="" /></a>
						</div>
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="single.php">Integer et turpis augue. In hac habitasse platea dictumst.</a></h4>
									<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2017 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="blog-left-right-bottom">
									<p>Vivamus fermentum vel lacus ac ornare. Vestibulum pulvinar massa pharetra risus pharetra, eu blandit risus viverra. Aenean in ultrices enim, ut tincidunt libero. Phasellus libero enim, semper ac felis eget, efficitur ultrices orci. Aenean tincidunt lacus lorem, non varius enim luctus sed. Quisque eu aliquet quam, et sollicitudin nibh. Duis finibus at felis eu laoreet. Nulla non lacus sem.</p>
									<a href="single.php">More</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="agile-blog-grid">
						<div class="agile-blog-grid-left-img">
							<a href="single.php"><img src="images/3.jpg" alt="" /></a>
						</div>
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="single.php">Integer et turpis augue. In hac habitasse platea dictumst.</a></h4>
									<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2017 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="blog-left-right-bottom">
									<p>Vivamus fermentum vel lacus ac ornare. Vestibulum pulvinar massa pharetra risus pharetra, eu blandit risus viverra. Aenean in ultrices enim, ut tincidunt libero. Phasellus libero enim, semper ac felis eget, efficitur ultrices orci. Aenean tincidunt lacus lorem, non varius enim luctus sed. Quisque eu aliquet quam, et sollicitudin nibh. Duis finibus at felis eu laoreet. Nulla non lacus sem.</p>
									<a href="single.php">More</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="agile-blog-grid">
						<div class="agile-blog-grid-left-img">
							<a href="single.php"><img src="images/g3.jpg" alt="" /></a>
						</div>
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="single.php">Integer et turpis augue. In hac habitasse platea dictumst.</a></h4>
									<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2017 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="blog-left-right-bottom">
									<p>Vivamus fermentum vel lacus ac ornare. Vestibulum pulvinar massa pharetra risus pharetra, eu blandit risus viverra. Aenean in ultrices enim, ut tincidunt libero. Phasellus libero enim, semper ac felis eget, efficitur ultrices orci. Aenean tincidunt lacus lorem, non varius enim luctus sed. Quisque eu aliquet quam, et sollicitudin nibh. Duis finibus at felis eu laoreet. Nulla non lacus sem.</p>
									<a href="single.php">More</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<nav>
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-md-4 agile-blog-grid-right">
					<div class="categories">
						<h3>Categories</h3>
						<ul>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Phasellus sem leo, interdum quis risus</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Nullam egestas nisi id malesuada aliquet </a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Donec condimentum purus urna venenatis</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Cum sociis natoque penatibus et magnis</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Suspendisse nec magna id ex pretium</a></li>
						</ul>
					</div>
					<div class="categories">
						<h3>Archive</h3>
						<ul class="marked-list offs1">
							<li><a href="#">May 2017 (7)</a></li>
							<li><a href="#">April 2017 (11)</a></li>
							<li><a href="#">March 2017 (12)</a></li>
							<li><a href="#">February 2017 (14)</a> </li>
							<li><a href="#">January 2017 (10)</a></li>    
							<li><a href="#">December 2017 (12)</a></li>
							<li><a href="#">November 2017 (8)</a></li>
							<li><a href="#">October 2017 (7)</a> </li>
							<li><a href="#">September 2017 (8)</a></li>
							<li><a href="#">August 2017 (6)</a></li>                          
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->
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
						<li><i class="fa fa-map-marker" aria-hidden="true"></i> 1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:example@email.com">mail@example.com</a></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +1234 567 567</li>
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
	<script src="js/SmoothScroll.min.js"></script>
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