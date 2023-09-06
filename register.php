<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentWedding Plan a Wedding  Website </title>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css"type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css"type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-3.6.3"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<section id="register">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="center">
                    <div class="container-fluid box">
                        <div class="row justify-content-center">
                            <div class="card w-30">
                                <div class="card-header bg-primary ">
                                    <h1>REGISTER NOW</h1>
                                </div>
                                <div class="card-body">
                                    <form action="reg_action.php" method="post">
                                        <div class="form-group">
                                            <label for="email">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"placeholder="enter your name"required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"placeholder="enter your email"required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Mobile Number</label>
                                            <input type="tel" name="number" class="form-control" pattern = "[0-9]{10}" id="number"placeholder="enter your mobile number"required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="pwd"class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password"placeholder="enter your passwod"required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Confirm Password</label>
                                            <input type="password" name="conpwd"class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirmpassword"placeholder="enter your passwod once again"required>
                                        </div>
                                        <input type="submit" class="btn btn-primary w-100 " value="Login">
                                    </form>
                                </div>
                                    <div class="card-footer">
                                    <p>Already have an account?<a href="login.php"> Login now!!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    
</body>
</html>