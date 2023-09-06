
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
								<li class="active"><a href="about.php">About </a> </li>
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
			<div class="agileinfo-banner">
				<div class="container">
					<h2>About Us</h2>
				</div>
			</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="w3l-about-top">
		<div class="container">
			<div class="w3ls-about-info">
				<img src="images/6.jpg" alt="" />
				<p>Praesent dignissim, nisi vel tristique convallis, urna nunc iaculis nunc, eu volutpat massa quam ac dolor. Proin lacinia in nibh eget maximus. Suspendisse vitae mi porttitor, varius nulla a, eleifend nisl. Etiam porta ut mauris a aliquam. Cras pellentesque elementum eros, eget tristique velit malesuada in. Phasellus diam ligula, molestie sed porta et, aliquam ut ante. Vivamus gravida nec risus et euismod. Maecenas pharetra arcu in vehicula ornare. Duis faucibus vehicula purus. Quisque vel neque vestibulum, tempus purus quis, porta erat. Aliquam nec pharetra sapien. Etiam gravida porta tortor, sit amet maximus purus tempus non. Integer egestas lobortis interdum. Curabitur sit amet eleifend velit, quis ultrices quam. Nullam tincidunt justo id magna condimentum, eu rhoncus eros tincidunt. Aenean ultrices dui ac blandit finibus.</p>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- choose -->
	<div class="jarallax w3-agileits-choose">
		<div class="wthree-dot">
			<div class="container">
				<div class="w3-heading-grid popular-heading">
					<h3>Best Services</h3>
					<div class="agileits-border"> </div>
				</div>
				<div class="agile-choose-grids">
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>Suspendisse ornare vitae</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque, semper eu commodo ut</p>
						</div>
					</div>
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-cogs" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>Suspendisse ornare vitae</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque, semper eu commodo ut</p>
						</div>
					</div>
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>Suspendisse ornare vitae</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque, semper eu commodo ut</p>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- //choose -->
	<!-- team -->
	<div class="team">
		<div class="container">
			<div class="w3-heading-grid">
				<h3>Our Team</h3>
				<div class="agileits-border"> </div>
			</div>
			<div class="agile-team-grids">
				<div class="col-md-3 team-grid">
					<div class="team-img">
						<img src="images/t1.jpg" class="img-responsive" alt=" " />
						<div class="overlay">
							<h5>voluptatem quia</h5>
							<p>sit aspernatur aut odit</p>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Filmr Doe</h4>
					<span>Vestibulum</span>
				</div>
				<div class="col-md-3 team-grid">
					<div class="team-img">
						<img src="images/t3.jpg" class="img-responsive" alt=" " />
						<div class="overlay">
							<h5>voluptatem quia </h5>
							<p>sit aspernatur aut odit</p>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Jaye Smith</h4>
					<span>Aliquam non</span>
				</div>
				<div class="col-md-3 team-grid">
					<div class="team-img">
						<img src="images/t2.jpg" class="img-responsive" alt=" " />
						<div class="overlay">
							<h5>voluptatem quia </h5>
							<p>sit aspernatur aut odit</p>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Mike Arney</h4>
					<span>Quisque vitae</span>
				</div>
				<div class="col-md-3 team-grid">
					<div class="team-img">
						<img src="images/t4.jpg" class="img-responsive" alt=" " />
						<div class="overlay">
							<h5>voluptatem quia </h5>
							<p>sit aspernatur aut odit</p>
							<div class="w3l-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Mary Jane</h4>
					<span>Nulla molestie</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //team -->
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