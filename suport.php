<!DOCTYPE html>
<html><!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=us-ascii"><meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; Travel booking agency</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Free HTML5 Template by FREEHTML5.CO" /><meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" /><meta name="author" content="FREEHTML5.CO" />
  <meta property="og:title" content=""/><meta property="og:image" content=""/><meta property="og:url" content=""/><meta property="og:site_name" content=""/><meta property="og:description" content=""/><meta name="twitter:title" content="" /><meta name="twitter:image" content="" /><meta name="twitter:url" content="" /><meta name="twitter:card" content="" /><!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="favicon.ico" rel="shortcut icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css" /><!-- Animate.css -->
	<link href="css/animate.css" rel="stylesheet" /><!-- Icomoon Icon Fonts-->
	<link href="css/icomoon.css" rel="stylesheet" /><!-- Bootstrap  -->
	<link href="css/bootstrap.css" rel="stylesheet" /><!-- Superfish -->
	<link href="css/superfish.css" rel="stylesheet" /><!-- Magnific Popup -->
	<link href="css/magnific-popup.css" rel="stylesheet" /><!-- Date Picker -->
	<link href="css/bootstrap-datepicker.min.css" rel="stylesheet" /><!-- CS Select -->
	<link href="css/cs-select.css" rel="stylesheet" />
	<link href="css/cs-skin-border.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" /><!-- Modernizr JS --><script src="js/modernizr-2.6.2.min.js"></script><!-- FOR IE9 below --><!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137899637-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137899637-2');
</script>

</head>
<body>
<div id="fh5co-wrapper">
<div id="fh5co-page">
<header class="sticky-banner" id="fh5co-header-section">
<div class="container">
<div class="nav-header">
<h1 id="fh5co-logo">hostmytrips</h1>
<!-- START #fh5co-menu-wrap -->

<nav id="fh5co-menu-wrap" role="navigation">
<ul class="sf-menu" id="fh5co-primary-menu">
	<li class="active"><a href="index.html">Home</a></li>
	<li><a href="http://search.hotellook.com/?marker=154569&amp;language=en">Hotels</a></li>
	<li><a href="flight.html">Flight</a></li>
	<li><a href="taxi.php">Taxi</a></li>
	<li><a href="bus.php">Bus</a></li>
	<li><a href="best_deals.html">Best deals</a></li>
	<li><a href="hotel_selections.html">Hotels Selections</a></li>
	<li><a href="blog.html">Blogs</a></li>
	<li><a href="suport.php">Support</a></li>
</ul>
</nav>
</div>
</div>
</header>
<?php

    $result="";
    
    if(isset($_POST['submit'])){
        require 'PHPMailerAutoload.php';
        $mail = new PHPMailer;
        
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='ikrar.ahmad07@gmail.com';
        $mail->Password='95571ikka';
        
        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('ikrar.ahmad07@gmail.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);
        
        $mail->isHTML(true);
        $mail->Subject='Form Submission:'.$_POST['subject'];
        $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>';
        
        if(!$mail->send()){
            $result="Something went wrong. Please try again.";
        }
        else{
            $result="Thanks ".$_POST['name']." For contacting us. we'll get back to you soon";
        }
    }

?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Form Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137899637-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137899637-2');
</script>

  
  
  
</head>

<div class="fh5co-cover" style="background-image: url(images/sup.jpeg);">
  <div class="container">
      <br><br><br><br>
    <div class="row justify-content-center">
      <div class="col-md-4 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"><?php echo $result; ?></h5>
        <form action="" method="post" id="form-box" class="p-2">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          </div>
        </form>
      </div>
    </div>
  </div>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
<footer>
<div id="footer">
<div class="container">
<div class="row row-bottom-padded-md"></div>
</div>

<center>
<h3 style="color:white;">Hostmytrips 2019</h3>
</div>
</footer>
</center>
</div>
<!-- END fh5co-page --></div>
</body>
</html>