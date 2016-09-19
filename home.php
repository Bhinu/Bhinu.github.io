<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
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
            <a class="navbar-brand page-scroll" href="#page-top">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                Campus Compare
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <img src="img/2-5121.png" alt="..." class="img-circle img-thumbnail" id="img1">
                </li>
                <li>
                    <!-- Split button -->
                    <div class="btn-group" id="dropdown1">
                         <button type="button" class="btn btn-danger"><?=$_SESSION['sess_user'];?></button>
                       <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" style="background-color: #f08080;">
                            <li><a href="#">Change Profile image</a></li>
                            <li><a href="#">Edit User name</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.html">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>

                <li>
                    <a class="page-scroll" href="#compare">Compare Campus</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Top 9 NITs</a>
                </li>
                <li>
                    <a class="page-scroll" href="#cutoff">CutOff List</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome to<br></div>
            <div class="intro-heading">Campus Compare</div>
            <div class="intro-lead-in"> </div>
            <div class="intro-lead-in"><br>Compare different NITs on the basis of various criterias and select best one suited for you!</div>
            <a href="#compare" class="btn btn-circle page-scroll">
                <i class="fa fa-angle-double-down animated"></i>
            </a>
        </div>
    </div>
</header>

<!-- Compare Section-->
<section id="compare">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Compare Campus</h2>
                <h3 class="section-subheading text-muted">Choose two or more NITs you want to compare</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <!--1st Input-->
                <div class="input-group input-group-lg sign-up-input" id="inputNIT1">

                    <span class="input-group-addon" id="sizing-addon1" ><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> </span>

                    <select class="form-control" id="in1">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>

                    </select>
                </div>

                <!--2nd Input-->
                <div class="input-group input-group-lg sign-up-input" id="inputNIT2">
                    <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in2">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                </div>

                <!--3rd Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT3">
                    <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in3">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn3" onclick="$('#inputNIT3').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--4th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT4">
                    <span class="input-group-addon" id="sizing-addon4"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in4">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn4" onclick="$('#inputNIT4').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--5th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT5">
                    <span class="input-group-addon" id="sizing-addon5"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in5">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn5" onclick="$('#inputNIT5').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--6th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT6">
                    <span class="input-group-addon" id="sizing-addon6"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in6">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn6" onclick="$('#inputNIT6').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--7th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT7">
                    <span class="input-group-addon" id="sizing-addon7"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in7">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn7" onclick="$('#inputNIT7').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--8th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT8">
                    <span class="input-group-addon" id="sizing-addon8"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in8">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn8" onclick="$('#inputNIT8').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--9th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT9">
                    <span class="input-group-addon" id="sizing-addon9"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in9">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn9" onclick="$('#inputNIT9').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--10th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT10">
                    <span class="input-group-addon" id="sizing-addon10"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in10">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn10" onclick="$('#inputNIT10').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--11th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT11">
                    <span class="input-group-addon" id="sizing-addon11"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in11">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn11" onclick="$('#inputNIT11').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--12th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT12">
                    <span class="input-group-addon" id="sizing-addon12"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in12">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn12" onclick="$('#inputNIT12').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--13th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT13">
                    <span class="input-group-addon" id="sizing-addon13"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in13">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn13" onclick="$('#inputNIT13').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--14th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT14">
                    <span class="input-group-addon" id="sizing-addon14"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in14">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn14" onclick="$('#inputNIT14').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <!--15th Input-->
                <div class="input-group input-group-lg sign-up-input hide" id="inputNIT15">
                    <span class="input-group-addon" id="sizing-addon15"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
                    <select class="form-control" id="in15">
                        <option>Select any NIT</option>
                        <option>National Institute of Technology Warangal (Andhra Pradesh)</option>
                        <option>National Institute of Technology  Tiruchirapalli (Tamil Nadu)</option>
                        <option>National Institute of Technology  Surathkal (Karnataka)</option>
                        <option>National Institute of Technology Delhi (New Delhi)</option>
                        <option>Motilal Nehru National Institute of Technology Allahabad (UP)</option>
                        <option>Malviya National Institute of Technology Jaipur (Rajasthan)</option>
                        <option>National Institute of Technology Calicut (Kerala)</option>
                        <option>National Institute of Technology  Kurukshetra (Haryana)</option>
                        <option>Visvesvaraya National Institute of Technology Nagpur (Maharastra)</option>
                        <option>National Institute of Technology Rourkela (Orissa)</option>
                        <option>Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)</option>
                        <option>Maulana Azad National Institute of Technology Bhopal (MP)</option>
                        <option>Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)</option>
                        <option>National Institute of Technology Durgapur (West bengal)</option>
                        <option>National Institute of Technology Goa (Goa)</option>
                    </select>
                    <span class="input-group-addon"> <button type="button" class="btn btn-default btn-danger" id="removebtn15" onclick="$('#inputNIT15').hide()"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></span>
                </div>

                <div>

                    <button type="button" class="btn btn-default btn-xl btn-danger" id="addbtn" data-toggle="tooltip" data-placement="right" title="Click to Add More NITs" onclick="addField(this)">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>
                </div>
                <a href="#portfolioModalcompare" class="portfolio-link" data-toggle="modal"><button type="button" class="btn btn-default btn-xl" id="compareButton" onclick="compare()" data-toggle="tooltip" data-placement="right" title="Click To Start Comparing">Compare</button></a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Top 9 NITs</h2>
                <h3 class="section-subheading text-muted">List of top 9 NITs in India.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-WARANGAL.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>National Institute of Technology Warangal</h4>
                    <p class="text-muted">Andhra Pradesh</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Trichy.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>National Institute of Technology  Tiruchirapalli</h4>
                    <p class="text-muted">Tamil Nadu</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Surathkal.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>National Institute of Technology  Surathkal</h4>
                    <p class="text-muted">Karnataka</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Delhi.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>National Institute of Technology Delhi </h4>
                    <p class="text-muted">Delhi</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/mnnitallahabad.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Motilal Nehru National Institute of Technology Allahabad</h4>
                    <p class="text-muted">Uttar Pradesh</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Jaipur.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Malviya National Institute of Technology Jaipur</h4>
                    <p class="text-muted">Rajasthan</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Calicut.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>National Institute of Technology Calicut </h4>
                    <p class="text-muted">Kerala</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Kurukshetra.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>National Institute of Technology Kurukshetra</h4>
                    <p class="text-muted">Haryana</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/NITs/NIT-Nagpur.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Visvesvaraya National Institute of Technology Nagpur</h4>
                    <p class="text-muted">Maharashtra</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--cutoff list section-->

<section id="cutoff">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Cut Off List</h2>
                <h3 class="section-subheading text-muted">Cut Off List of different NITs</h3>
            </div>

            <div class="col-md-10 col-md-offset-1">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default panel-primary text-center">
                        <div class="panel-heading " role="tab" id="headingOne">
                            <h4 class="panel-title ">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h3>Cut Off list 2015</h3>
                                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row acordiancutoff">
                                    <div class="col-xs-6 col-md-3">
                                        <a href="CutOff/OR_CR_Round1-7-7-2015.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                            <img src="img/pdf-icon.png">
                                        </a>
                                        <a href="CutOff/OR_CR_Round1-7-7-2015.pdf">
                                            <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 1</button>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="CutOff/OR_CR_Round1-7-7-2015.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                            <img src="img/pdf-icon.png">
                                        </a>
                                        <a href="CutOff/OR_CR_Round2-13-7-2015.pdf">
                                            <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 2</button>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="CutOff/OR_CR_Round3-18-7-2015.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                            <img src="img/pdf-icon.png">
                                        </a>
                                        <a href="CutOff/OR_CR_Round1-7-7-2015.pdf">
                                            <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 3</button>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="CutOff/OR_CR_Round4_FinalforIITs.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                            <img src="img/pdf-icon.png">
                                        </a>
                                        <a href="CutOff/OR_CR_Round1-7-7-2015.pdf">
                                            <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 4 (Final)</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default panel-primary text-center">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3>Cut Off List 2014</h3>
                                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="row acordiancutoff">
                                <div class="col-xs-6 col-md-3">
                                    <a href="CutOff/Round1.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                        <img src="img/pdf-icon.png">
                                    </a>
                                    <a href="CutOff/Round1.pdf">
                                        <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 1</button>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="CutOff/Round2.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                        <img src="img/pdf-icon.png">
                                    </a>
                                    <a href="CutOff/Round2.pdf">
                                        <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 2</button>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="CutOff/Round3.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                        <img src="img/pdf-icon.png">
                                    </a>
                                    <a href="CutOff/Round3.pdf">
                                        <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 3</button>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="CutOff/Round4.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                        <img src="img/pdf-icon.png">
                                    </a>
                                    <a href="CutOff/Round4.pdf">
                                        <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Round 4</button>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <a href="CutOff/Spot_Round.pdf" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Click To Download">
                                        <img src="img/pdf-icon.png">
                                    </a>
                                    <a href="CutOff/Spot_Round.pdf">
                                        <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="right" title="Click To Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Spot Round</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- About Section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">The Idea behind Compare Campus!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/Adobe_Creative_Cloud-button.png" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Campus Compare</h4>
                                <h4 class="subheading">The Intro</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><strong>Campus Compare</strong> helps students plan rich and fulfilling lives through better-informed decisions about their careers. Whether you are deciding about college or course, CC helps in exploring diverse options and bring clarity in figuring out what is right for you. 100% independent and unbiased, CC provides clear picture about colleges and majors. CC research data are the most comprehensive one, and with dozens easy-to-use tools, you get crisp information in fast and efficient manner.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/ico_who_are_we_84781.png" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Who are we?</h4>
                                <h4 class="subheading">Things Define Us</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">We are the ones who fortunately took a little long way to find out what we want from our lives. We have had been marketing executives, statisticians, guidance counselor, real estate agents, actors, singers etc. We have worked both for corporate and Government of India. We have earned more than our fair share of UG and PG degrees from premier Indian universities.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/Minion.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>The Idea</h4>
                                <h4 class="subheading">Our Main Motive</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">But most important, we are here to help students in finding out what makes them happy in lives. We are backed by veterans, the ones who have lived their dreams from various disciplines. We believe in the power of youth with experienced guidance, together that can change India. We are zero profit making organization aimed to promote sustainable career paths for the ones having their first steps in the industry.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Thank you<br>for Visiting<br>Campus
                                <br>Compare!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--Comment section-->
<div class="container">
    <div clas="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h3>Comments</h3></div>
                <div class="panel-body" id="usercomment">
                    Bhiman says:  Hi!
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Feel free to share your thoughts and opinions</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl" id="submitcontactbtn" onclick="displaycomment()">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

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

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>National Institute of Technology Warangal</h2>
                        <p class="item-intro text-muted">Andhra Pradesh</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-WARANGALimg.jpg" alt="">
                        <p><strong>National Institute of Technology, Warangal (Deemed University)</strong> , formerly known as Regional Engineering College, was established in 1959.

                            Pandit Jawaharlal Nehru laid the foundation stone for this institute on October 10, 1959, the first in the chain of 30 NITs (formerly known as RECs) in the country.

                            The Institute is well known for its dedicated faculty, staff and the state-of-the art infrastructure conducive to a healthy academic environment.The Institute is constantly striving to achieve higher levels of technical excellence.  Evolving a socially relevant and yet internationally acceptable curriculum, implementing innovative and effective teaching methodologies and focusing on the wholesome development of the students are our concerns.  Thanks to UNESCO and UK assistance in the past, many developmental activities were undertaken.The World Bank Assistance under Technical Education Quality Improvement Programme (TEQIP during 2004-09) had been a timely help in the overall development of the Institute.</p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.nitw.ac.in/nitw/" target="_blank"><button type="button" class="btn btn-success">NITW Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>National Institute of Technology Tiruchirappalli</h2>
                        <p class="item-intro text-muted">Tamil Nadu</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Trichyimg.jpg" alt="">
                        <p>
                            <strong>The National Institute of Technology (formerly known as Regional Engineering College) Tiruchirappalli</strong>, situated in the heart of Tamil Nadu on the banks of river Cauvery, was started as a joint and co-operative venture of the Government of India and the Government of Tamil Nadu in 1964 with a view to catering to the needs of man-power in technology for the country. The college has been conferred with autonomy in financial and administrative matters to achieve rapid development. Because of this rich experience, this institution was granted Deemed University Status with the approval of the UGC/AICTE and Govt. of India in the year 2003 and renamed as National Institute of Technology. NIT-T was registered under Societies Registration Act XXVII of 1975.
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.nitt.edu/" target="_blank"><button type="button" class="btn btn-success">NIT-Trichy Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>National Institute of Technology  Surathkal</h2>
                        <p class="item-intro text-muted">Karnataka</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Karnatakaimg.jpg" alt="">
                        <p><strong>Vision</strong><br>

                            To facilitate transformation of students into good human beings, responsible citizens and competent professionals, focusing on assimilation, generation and dissemination of knowledge.
                            <br>
                            <strong>Mission</strong><br>

                            Impart quality education to meet the needs of profession and society, and achieve excellence in teaching-learning and research.
                            Attract and develop talented and committed human resource, and provide an environment conducive to innovation, creativity, team-spirit and entrepreneurial leadership.
                            Facilitate effective interactions among faculty and students, and foster networking with alumni, industries, institutions and other stake-holders.
                            Practice and promote high standards of professional ethics, transparency and accountability.
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.nitk.ac.in/" target="_blank"><button type="button" class="btn btn-success">NITK Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>National Institute of Technology Delhi</h2>
                        <p class="item-intro text-muted">Delhi</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Delhiimg.jpg" alt="">
                        <p><strong>National Institute of Technology Delhi (NITD)</strong> is one of the thirty NIT (s) established in the year 2010 by an act of parliament and has been declared as an Institute of National importance.

                            NIT Delhi is an autonomous Institute which functions under the aegis of Ministry of Human Resource Development, Government of India. It aims to provide instructions and research facilities in various disciplines of Engineering, Science and Technology, Management, Social Sciences and Humanities for advance learning and dissemination of knowledge.

                            The mission of NIT Delhi is to produce human resource those who are creative, competitive and innovative with high intellect and ethical values. The Institute is imparting holistic education, along with inculcating high moral values in its students.

                            NIT Delhi has started its academic session in 2010 with three undergraduate B.Tech degree programmes in Computer Science and Engineering, Electronics and Communication Engineering and Electrical and Electronics Engineering. The academic activities of NIT Delhi were initiated at NIT Warangal in year 2010 which later moved to a temporary campus at Dwarka, New Delhi in June 2012 and now currently running at IAMR Campus, Narela (February 2014).

                            Possession of fifty one acre land has been allotted for permanent campus of NIT Delhi on NH-1, Narela sub city, New Delhi. The process of developing the permanent campus has begun.
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://nitdelhi.ac.in/" target="_blank"><button type="button" class="btn btn-success">NITD Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Motilal Nehru National Institute of Technology Allahabad </h2>
                        <p class="item-intro text-muted">Uttar Pradesh</p>
                        <img class="img-responsive img-centered" src="img/NITs/mnnitallahabadimg.jpg" alt="">
                        <p><strong>Motilal Nehru National Institute of Technology Allahabad (MNNIT)</strong> is an Institute with total commitment to quality and excellence in academic pursuits. It was established as one of the seventeen Regional Engineering Colleges of India in the year 1961 as a joint enterprise of Government of India and Government of Uttar Pradesh, and was an associated college of University of Allahabad, which is the third oldest university in India.

                            For a short duration of two years (2000-2002), the Institute was affiliated to U.P. Technical University. With over 45 years of experience and achievements in the field of technical education, having traversed a long way, on June 26, 2002 MNREC was transformed into National Institute of Technology and Deemed University fully funded by Government of India. With the enactment of National Institutes of Technology Act-2007(29 to 2007), the Institute has been granted the status of institution of national importance w.e.f. 15.08.2007
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.mnnit.ac.in/" target="_blank"><button type="button" class="btn btn-success">MNNIT Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Malviya National Institute of Technology Jaipur</h2>
                        <p class="item-intro text-muted">Rajasthan</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Jaipurimg.jpg" alt="">
                        <p>The college was established in 1963 with the name as <strong>Malaviya Regional Engineering College, Jaipur</strong> as a joint venture of the Government of India and the Government of Rajasthan, Subsequently; on June 26, 2002 the college has been given the status of National Institute of Technology and on 15 August 2007, Proclaimed Institute of National Importance through Act of Parliament. The Institute is fully funded by Ministry of Human Resource Development (MHRD), Government of India. More than 12,000 students have already been graduated since its establishment.<br>

                            <strong>Campus Introduction:</strong><br>
                            Extending into an area of over 317 acres of lush greenery, the campus of the Institute is imaginatively laid-out with a picturesque landscape. It presents a spectacle of harmony in modern architecture, and natural beauty which enthralls and inspires.
                            The campus of the institute consisting of the institute buildings, halls of residence and staff colony. It is a residential campus offering accomodation to faculty, staff and students.
                            The campus provides all essential amenities for community living like staff clubs, hospital, bank, post office, community centre, school, staff residences, gymnasium, playing fields, guest houses, 24 Hours internet connectivity, and canteen etc.
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://mnit.ac.in/" target="_blank"><button type="button" class="btn btn-success">MNIT Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 7 -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>National Institute of Technology Calicut</h2>
                        <p class="item-intro text-muted">Kerala</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Calicutimg.jpg" alt="">
                        <p>Set in a picturesque landscape at the foothills of the Western Ghats, <strong>National Institute of Technology Calicut (NITC)</strong> is located about 22 kilometers north-east of Calicut City. National Institute of Technology Calicut is a Technical Institution of national importance set up by an Act of parliament(Act 29 of 2007) namely, the National Institute of technology Act 2007, which received the assent of the President of India on 5th June,2007. The provision of the Act have come into force with effect from 15th August,2007 as per Notification S.O.1384(E) dated 9th August, 2007 of the MHRD(Dept. of Higher Education),New Delhi. As per the provision of the said Act, this Institution runs on non profitable basis
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.nitc.ac.in/" target="_blank"><button type="button" class="btn btn-success">NITC Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 8 -->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>National Institute of Technology  Kurukshetra</h2>
                        <p class="item-intro text-muted">Haryana</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Kurukshetraimg.jpg" alt="">
                        <p> <strong>National Institute of Technology Kurukshetra, Haryana</strong> is a premier Technical Institute of the region. The institute started working as Regional Engineering College, Kurukshetra in 1963. Like other Regional Engineering Colleges of India this institution too, had been a joint enterprise of the State and Central Governments. This Institute was conferred upon status of Deemed University  on June 26, 2002. Since then it has been renamed as National Institute of Technology, Kurukshetra.
                            The Institute started functioning in its present campus at Kurukshetra in 1965-66 with 120 students admitted in the first year of the Five-Year Courses of study for the B.Sc. (Engg.) Degree in Civil, Electrical and Mechanical Engineering. The annual intake was increased to 250 students in 1966-67. B.Sc. (Engg.) degree courses in Electronics and Communication Engineering was added in 1971-72. in 1967-68 M. Sc. (Engg.) degree courses in Electronics and Communication Engineering was added in 1971-72. In 1967-68 M. Sc. (Engg.) degree courses in Civil, Electrical and Mechanical Engineering and in 1971-72, a Postgraduate diploma in Scientific instrumentation were also started. In July, 1976 Part-Time M. Sc. ( Engg.) degree courses in Electronics and Communication Engineering and instrumentation were started. The First registration for the degree of Doctor of Philosophy in the Faculty of Engineering and Technology was made in July, 1967.
                            The Institute changed over to the 4-year B.Tech. Degree courses with effect from the academic year 1985-86. The new courses was designated as B. Tech. The annual intake in B.Tech programme at present is 540.
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.nitkkr.ac.in/" target="_blank"><button type="button" class="btn btn-success">NITKKR Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 9 -->
<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Visvesvaraya National Institute of Technology Nagpur</h2>
                        <p class="item-intro text-muted">Maharashtra</p>
                        <img class="img-responsive img-centered" src="img/NITs/NIT-Nagpurimg.jpg" alt="">
                        <p> The <strong>Visvesvaraya National Institute of Technology, Nagpur</strong> is one of the twenty National Institutes of Technology in the Country. The Govt. of India converted this Institute into National Institute of Technology and conferred the Deemed to be University status (under University Grants Commission Act, 1956 (3 of 1956)) with effect from 26th June 2002. Before conversion, the Institute was known as Visvesvaraya Regional College of Engineering that was established in the year 1960 under the scheme sponsored by Government of India and Govt. of Maharashtra. The College was started in June 1960 by amalgamating the State Govt. Engineering College functioning at Nagpur since July 1956. In the meeting held in October 1962, the Governing Board of the College resolved to name it after an eminent engineer, planner, statesman of the Country Sir M. Visvesvaraya. The prime objective of establishing Regional Engineering Colleges was to impart quality technical education throughout the country and foster national integration.The College started functioning in 1960 from camp office in the premises of Govt. Polytechnic, Sadar,Nagpur and subsequently an area of about 214 acres was acquired to house an independent Regional Engineering College at present location.
                        </p>
                        <p>
                            <strong>Institute's Website: </strong>For More info visit the institute's official website:
                            <a href="http://www.vnit.ac.in/" target="_blank"><button type="button" class="btn btn-success">VNIT Official Website</button></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal compare -->
<div class="portfolio-modal modal fade" id="portfolioModalcompare" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal" id="closepage1">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Comparing NITs</h2>
                        <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->

                        <!--NIT Warangal-->
                        <div class="col-md-6 hide" id="NIT1">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Warangal</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-WARANGAL.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 300</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>300</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitw.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITW Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Trichy-->
                        <div class="col-md-6 hide" id="NIT2">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Trichy</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Trichy.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 283.5</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>283.5</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitt.edu/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITT Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Surathkal-->
                        <div class="col-md-6 hide" id="NIT3">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Surathkal</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Surathkal.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 245.67</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>245.67</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitk.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITK Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Delhi-->
                        <div class="col-md-6 hide" id="NIT4">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Delhi</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Delhi.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 240</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>240</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://nitdelhi.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITD Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Allahbad-->
                        <div class="col-md-6 hide" id="NIT5">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>MNNIT Allahabad</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/mnnitallahabad.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 223.2</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>223.2</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.mnnit.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">MNNIT Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Jaipur-->
                        <div class="col-md-6 hide" id="NIT6">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Jaipur</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Jaipur.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 186.75</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>186.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.mnit.ac.in/"  target="_blank"><button type="button" class="btn btn-info btn-lg">MNIT Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <!--NIT Calicut-->
                        <div class="col-md-6 hide" id="NIT7">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Calicut</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Calicut.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 180</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitc.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITC Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Kurukshetra-->
                        <div class="col-md-6 hide" id="NIT8">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Kurukshetra</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Kurukshetra.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 175</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitkkr.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITKKR Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Nagpur-->
                        <div class="col-md-6 hide" id="NIT9">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>VNIT Nagpur</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Nagpur.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 170.66</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.vnit.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">VNIT Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Rourkela-->
                        <div class="col-md-6 hide" id="NIT10">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Rourkela</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-ROURKELA.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 165.4</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitrkl.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITRKL Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Surat-->
                        <div class="col-md-6 hide" id="NIT11">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>SVNIT Surat</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Surat.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 163</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.svnit.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">SVNIT Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Bhopal-->
                        <div class="col-md-6 hide" id="NIT12">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>MANIT Bhopal</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Bhopal.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 158</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.manit.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">MANIT Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Jalandhar-->
                        <div class="col-md-6 hide" id="NIT13">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Jalandhar</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Jalandharimg.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 146.75</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Infrastucture</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>7</td>
                                            <td>3.5</td>
                                            <td>7*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>3*4</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>5</td>
                                            <td>3.25</td>
                                            <td>5*3.25</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>6</td>
                                            <td>4</td>
                                            <td>6*4</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>7</td>
                                            <td>2</td>
                                            <td>7*2</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>6</td>
                                            <td>3</td>
                                            <td>6*3</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitj.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITJ Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Durgapur-->
                        <div class="col-md-6 hide" id="NIT14">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Durgapur</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Durgapur.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 140.3</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitdgp.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITDGP Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--NIT Goa-->
                        <div class="col-md-6 hide" id="NIT15">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading"><h3>NIT Goa</h3></div>
                                <div class="panel-body">
                                    <img class="img-responsive img-centered" src="img/NITs/NIT-Goa.jpg" alt="">
                                    <h1><span class="label label-danger"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Rate: 130</span></h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td><strong>Factors</strong></td>
                                            <td><strong>Rating</strong></td>
                                            <td><strong>Weightage</strong></td>
                                            <td><strong>Total</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Fee Structure</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Ranking</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>CottOff</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Placement</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Strength</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fest Conducted</td>
                                            <td>8</td>
                                            <td>3.5</td>
                                            <td>8*3.5</td>
                                        </tr>
                                        <tr class="success">
                                            <td><strong>Total</strong></td>
                                            <td colspan="3"><strong>146.75</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <a href="http://www.nitgoa.ac.in/" target="_blank"><button type="button" class="btn btn-info btn-lg ">NITGOA Official Website</button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="closepage"><i class="fa fa-times"></i> Close Page</button>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<!--myScript-->
<script>

var displaycomment = function(){
        var name = document.querySelector('#name').value;
        var msg = document.querySelector('#message').value;
        console.log(name);
        console.log(msg);

        var str = name + ' says:  ' + msg;

        $('#usercomment').append(str + '<'+'br><'+'br'+'>');
    };




    var noOfFields =2;
    var total;
    var addField =function(){
        if(noOfFields <= 15)
        {
            noOfFields += 1;
            total=noOfFields;
            var fieldId = "#inputNIT" + noOfFields;
            $(fieldId).removeClass('hide');
        }
        else
        {
            $('#addbtn').addClass('hide');
        }
    };
    var compare = function(){
        var arr = [];
        var sortlist = [];
        var strid;
        var j=1;
        var i;
        var ranklist = ["National Institute of Technology Warangal (Andhra Pradesh)","National Institute of Technology Tiruchirapalli (Tamil Nadu)","National Institute of Technology Surathkal (Karnataka)","National Institute of Technology Delhi (New Delhi)", "Motilal Nehru National Institute of Technology Allahabad (UP)","Malviya National Institute of Technology Jaipur (Rajasthan)","National Institute of Technology Calicut (Kerala)","National Institute of Technology Kurukshetra (Haryana)","Visvesvaraya National Institute of Technology Nagpur (Maharastra)","National Institute of Technology Rourkela (Orissa)","Sardar Vallabhbhai National Institute of Technology Surat (Gujarat)","Maulana Azad National Institute of Technology Bhopal (MP)","Dr. B R Ambedkar National Institute of Technology Jalandhar (Punjab)","National Institute of Technology Durgapur (West bengal)","National Institute of Technology Goa (Goa)"];
        for( i = 1; i <= 15; i++){
            strid = '#in'+i;
            arr[i]=document.querySelector(strid).value;
            if(arr[i]!== "Select any NIT"){
                sortlist[j]=arr[i];
                j += 1;
            }
        }
        var rank=[];
        for(var k=1; k <= (sortlist.length-1); k++)
        {
            rank[k] = (1+ranklist.indexOf(sortlist[k]));
        }
        console.log(sortlist[1]);
        console.log(rank.sort());
        console.log(rank.sort().length);
        for(var l = 0; l< ((rank.sort().length)-1); l++)
        {
            var cmpid = "#NIT" + rank.sort()[l];
            $(cmpid).removeClass('hide');
        }
        $('#closepage').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#closepage1').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn3').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn4').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn5').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn6').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn7').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn8').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn9').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn10').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn11').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn12').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn13').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn14').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
        $('#removebtn15').click(function(){
            for(var i = 0; i< ((rank.sort().length)-1); i++)
            {
                var cmpid = "#NIT" + rank.sort()[i];
                $(cmpid).addClass('hide');
            }
        });
    }
</script>

</body>

</html>
