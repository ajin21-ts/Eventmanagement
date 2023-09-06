<!--A Design by ajin
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<title>Wedding Plan a Wedding website</title>
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
<script src="js/jquery-3.6.3.js"></script>
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
								<li><a href="blog.php">Blog</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<div class="agileinfo-banner">
				<div class="container">
					<h2>Contact Us</h2>
				</div>
			</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-7 contact-form">
				<center><h2>Feedback</h2></center>
					<form action="feedback.php" method="post"
						enctype="multipart/form-data">
						<input type="text" name="name" id="name"placeholder="name" required="">
						<input type="email" class="email" id="email"name="email" placeholder="Email" required="">
						<?php
						require("connection.php");
						$res=$con->query("select * from `countries`");
						$count=$res->num_rows;
						?>
                        <select class="form-control" name="countries"id ="country" placeholder="country" required="">
						<option value="none" selected>Select your country</option>
						<?php
						if($count>0)
						{
							while($row=$res->fetch_assoc())
							{
							?>
								<option value="<?php echo $row["cont_id"];?>"><?php echo $row["name"];?> </option>
								<?php
							}
						}
						?>
                        </select><br>
						<select class="form-control" name="states" id="state" placeholder="country" required="">
						<option value="none" selected>Select your state</option>
					</select><br>
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				
				<div class="col-md-5 contact-right">
					<div class="contact-text">
						<h4>Working Hours :</h4>
						<p> Monday – Saturday 5:00 a.m – 9:00 p.m </p>
						<p>	Sunday 10 a.m – 4 p.m </p>
						<p><span class="glyphicon glyphicon-earphone"></span> +11 999 8888 7777 </p> 
					</div> 
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<section id=job>
	  	<div class="container">
			<div class="employee-form">
				<div class="employee">
					<form action="employee_action.php"method="post"enctype="multipart/form-data">
						<center><h2 class="employement">JOB ENTROOLMENT</h2></center>
							<div class="form-group">
								<label for="Name">Name</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="enter your name"required>
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="enter your email id"required>
							</div>
							<div class="form-group">
								<label for="Gender">Gender</label>
								<input type="radio" name="gender" id="male" value="male" required>Male
								<input type="radio" name="gender" id="female" value="female" required>female
							</div>
							<div class="form-group">
								<label for="Age">Age</label>
								<input type="number" name="age" id="age" class="form-control" placeholder="enter your age"required>
							</div>
							<div class="form-group">
								<label for="Qualification">Qualification</label>
								<select class="form-control" name="qual" id="qual">
									<option value="select one">select one</option>
									<option value="10th">10th</option>
									<option value="12th">12th</option>
									<option value="ug">UG</option>
									<option value="pg">PG</option>
									<option value="others">others</option>
								</select>
							</div>
							<div class="form-group">
								<label for="Experience">Experience</label>
								<select class="form-control" name="exp" id="exp">
									<option value="select one">select one</option>
									<option value="0-6 months">0-6 months</option>
									<option value="1-2 years">1-2 years</option>
									<option value="2-5 years">2-5 years</option>
									<option value="5-10 years">5-10 years</option>
								</select>
							</div>
							<div class="form-group">
								<label for="Resume/CV">Resume/CV</label>
								<input type="file" name="resume" id="resume" class="form-control"required>
							</div>
						
							<input type="submit"class="w-50" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop" name="submit" value="Submit">
							
							<?php
							if(isset($_REQUEST['result'])){
								if($_REQUEST['result']=='success'){
									?>
									<div class="alert alert-success" role="alert">Thankyou for your response we will reach you soon.</div>
                            <?php
								}
							}
							?>
					
					</form>
				</div>
			</div>
	    </div>
	</section>
        <br>
		<section id=booking>
			<div class="container">
				<div class="customer-form">
					<div class="customer">
					<center><h2>Book Your Order</h2></center>
						<form action="booking_action.php"method="post"
							enctype="multipart/form-data">
                    		<div class="form-group">
                        		<label for="name">NAME</label>
                        		<input type="text" class="form-control" name="name"id="name">
                    		</div>
                    		<div class="form-group">
                        		<label for="email">EMAIL ID</label>
                        		<input type="text" class="form-control" name="email"id="email">
                    		</div>
                    		<div class="form-group">
                       			<label for="gender">GENDER</label>
                        		<input type="radio"id="male"value="male" name="gender">Male
                        		<input type="radio"id="female"value="female" name="gender">Female
                    		</div>
							<div class="form-group">
								<label for="address">ADDRESS</label>
								<input type="text" class="form-control"name="address"id="address"required>
							</div>
							<div class="form-group">
								<label for="mobileno">MOBILE NUMBER</label>
								<input type="tel" id="phone"class="form-control" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
							</div>
		            		<div class="form-group">
								<label for="funname">FUNCTION NAME</label>
								<input type="text"class="form-control"name="funname"id="funname">
							</div>
							<div class="form-group">
								<label for="fundate">FUNCTION DATE</label>
								<input type="text"class="form-control"name="fundate"id="fundate">
							</div>
							<div class="form-group">
								<label for="fundate">MODEL PHOTO</label>
								<input type="file"class="form-control"name="modelph"id="modelpic">
							</div>
					
                    		<div class="form-group form-check">
                        		<input type="checkbox" class="form-check-input" id="checkbox">
                        		<label class="form-check-label" for="checkbox">Check me out</label>
                    		</div>
                    		<input type="submit"class="w-50" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop" name="submit" value="Book">
							
							<?php
							if(isset($_REQUEST['result'])){
								if($_REQUEST['result']=='booked'){
									?>
									<div class="alert alert-success" role="alert">Thankyou for your response we will reach you soon.</div>
                            <?php
								}
							}
							?>
                		</form>
					</div>
				</div>
			</div>
		</section>
		<br>
	<div class="map">  
		<iframe src="https://www.google.com/maps/place/Bethelpuram,+Tamil+Nadu+629804/@8.2003344,77.2728221,17.12z/data=!4m6!3m5!1s0x3b04fc02326df9ff:0xa59d93a72e5a1ebf!8m2!3d8.2004804!4d77.2757147!16s%2Fg%2F1hf3lt8lk9."></iframe>
		<div class="address agileits">
			<div class="w3ls-title">
				<h3>GET IN TOUCH</h3> 
			</div>
			<p>19-4G,Palpanni,Bethelpuram(po),KK district 629803</p>
			<p>Telephone :+91 7397589498</p>
			<p>FAX : ++91 7397589498 </p>
			<p>Email : <a href="mailto:example@mail.com">gettimelm143@gmail.com</a></p>
		</div> 
	</div>
	<!-- //contact -->
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
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function(){
			
	
	    $("#country").change(function(){

        var Country = $("#country").val();
		
	

	
	$.ajax({
	
		url: 'ajaxstate.php',
		type:'POST',
		data:{Country:Country},
		success:function(result){ 
			//alert(result);return false;
			  $('#state').html(result);
			 
		 }
		});
	  });
   });
		
	
	</script>
	
	<!-- //here ends scrolling icon -->
</body>	
</html>