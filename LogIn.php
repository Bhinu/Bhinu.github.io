<?php
if(isset($_POST["submit"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$user=$_POST['username'];
	$pass=$_POST['password'];
   
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'campus') or die("cannot select DB");

	$query=mysqli_query($con,"SELECT * FROM database123 WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
    session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: home.php");
	}
	} 
    else {
	echo "</br></br><h3>Invalid username or password.!<a href='forgetpassword.php'>forgot username or password?</h3>";
	}

} else {
	echo "<h3>All fields are required!</h3>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campus Compare</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Fevicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="Fevicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Fevicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Fevicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Fevicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Fevicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Fevicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Fevicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Fevicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Fevicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="Fevicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Fevicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Fevicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Fevicon/favicon-16x16.png">
    <link rel="manifest" href="Fevicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Fevicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.html">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                Campus Compare
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <!--<li>
                    <a class="page-scroll" href="#services"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Contact us</a>
                </li>
                <li>
                    <a class="page-scroll" href="LogIn.html">Compare Campus</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html">Top 10 NITs</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container intro-text">
        <!--<div class="intro-text">
            <div class="intro-lead-in">Welcome to<br></div>
            <div class="intro-heading">Campus Compare</div>
            <div class="intro-lead-in"> </div>
            <div class="intro-lead-in"><br>Compare different NITs on the basis of various criterias and select best one suited for you!</div>
            <button type="button" class="btn btn-default btn-xl" id="button1">LogIn</button>
        </div>-->
        <div class="row'">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <form action="" method="POST">
                    <div class="intro-lead-in">Users LogIn Here</div>

                    <div class="form-group input-group input-group-lg" id="input1">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required data-validation-required-message="Enter your user mane" name="username">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group input-group input-group-lg" id="input2">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required data-validation-required-message="Enter your password" name="password">
                        <p class="help-block text-danger"></p>
                    </div>
                <input type="submit" class="btn btn-default btn-xl" name="submit" value="Login" >
                 </form>
                 <div class="intro-lead-in">Or if not a User</div>
                    <a href="signup.php"><button type="button" class="btn btn-default btn-xl">Sign Up</button></a>
                
            </div>
        </div>
    </div>
</header>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Campus Compare 2015</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li>Designed By:
                    </li>
                    <li>Bhiman Kuamr Baghel
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

</body>

</html>
