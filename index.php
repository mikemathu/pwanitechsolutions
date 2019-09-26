<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'contact@mathumedia.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- required meta tags -->
    <meta charset="utf-8">
    
    <meta name="description" content="Mathu Media specializes in building professional websites based on your unique needs.Our focus is to see your bussiness grow and archive your online goals">
    <meta name="keywords" content>
    <meta name="generator" content="Mathu Media">
    <meta name="title" content="Responsive web development">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Mathu Media</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="bm.jpg">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate/animate.css">

    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">

    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">

    <header>

        <nav class="navbar navbar-fixed-top">

            <div class="container-fluid">

                <div class="bullson-nav-wrapper">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bullson-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                       </button>

                        <a class="navbar-brand" href="#home">
                            <h4>MM</h4>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bullson-menu">
                        <ul class="nav navbar-nav">
                            <li><a class="smooth-scroll" href="#home">Home</a></li>
                            <li><a class="smooth-scroll" href="#services">Services</a></li>
                            <li><a class="smooth-scroll" href="#about">About</a></li>
                            <li><a class="smooth-scroll" href="#stats">Why Us</a></li>
                            <li><a class="smooth-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>

    </header>

    <!-- Home -->
    <section id="home">

        <div id="home-cover" class="bg-parallax animated fadeIn">

            <div id="home-content-box">

                <div id="home-content-box-inner" class="text-center">

                    <div id="home-heading" class="animated zoomIn">
                        <h3>Web Development</h3>
                        <p>Mathu Media specializes in building professional websites based on your unique needs.Our focus is to see your bussiness grow and archive your online goals.</p>
                    </div>
                    <div id="home-btn" class="animated zoomIn">
                        <a class="btn btn-lg btn-general btn-white smooth-scroll" href="#contact-right" role="button" title="View Our Work">Contact Us</a>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Services -->
    <section id="services">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>Features of our websites </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-6">

                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa fa-wordpress fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3>Content Management System</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>Our websites features content management systems that allows you to update content easily with no expert required.</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6">

                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa fa-cart-plus fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3>E-Commerce</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>We develop professional<br>E-commerce websites for every market segment from food,clothing and more.We make it easy giving you full control of your online shop.</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="service-item-icon">
                                <i class="fa fa-mobile fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3>Mobile-Responsive</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>We build websites that adapt to the screen on which its being browsed.Layoults are adjustable and images are scalable for a better web experience on a small screen.</p>
                            </div>

                        </div>


                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa fa-tachometer fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3>Fast</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>We offer high quality sites that are fast for better interaction with the features and faster loading without delay for the satisfaction of your site visitors.</p>
                            </div>

                        </div>


                    </div>
                    
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa fa-search fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3> SEO Optimization </h3>
                            </div>

                            <div class="service-item-desc">
                                <p>We build websites that will appear in search engine results.This also ensures that the website is more usable for your actual visitors.</p>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa fa-pie-chart fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3>Web Analytics</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>Our web analytics tools are powerful for marketing.They will provide you with real time information like number of visitors and how they riched your site,the search terms they used to find you and much more.</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </div>

    </section>

    <!-- About -->
    <section id="about">

        <!-- About right side with diagonal BG parallax -->
        <div id="about-bg-diagonal" class="bg-parallax"></div>

        <!-- About left side with content -->
        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div id="about-content-box">

                        <div id="about-content-box-outer">

                            <div id="about-content-box-inner">

                                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h3> About Mathu Media </h3>
                                    <div class="content-title-underline"></div>
                                </div>

                                <div id="about-desc" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <p>We commit to provide quality servises to our customers.Involving our customers during the project is our habit to get them visualize the progress of their project.</p>
                                </div>

                                <div id="about-btn" class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Stats -->
   <section id="stats">

        <div id="stats-cover" class="bg-parallax">

            <div class="content-box">
                <div class="content-title content-title-white wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3> What makes Mathu Media different?</h3>
                    <div class="content-title-underline"></div>
                </div>

                <div class="container">

                    <div class="row text-center wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <!--<i class="fa fa-cloud-download fa-5x"></i>
                                <h2><span class="counter"> 1590 </span><span>+</span></h2>-->
                                <h3>Our approach</h3>
                            <p>We listen to what you want to do,precent you with a detailed description of what the end product will look like,to hepl you visualize what we are doing for you. </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                               <!-- <i class="fa fa-star-o fa-5x"></i>
                                <h2><span class="counter"> 3500 </span><span>+</span></h2>-->
                                <h3>Continous support</h3>
                                <p>We do not just abandon you after launching your site.We ensure long term relationship for future consultation support.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                               <!--<i class="fa fa-heart-o fa-5x"></i>
                                <h2><span class="counter"> 1199 </span><span>+</span></h2>--> 
                                <h3>Utmost Satisfaction</h3>
                                <p>We work hard to satisfy our customers with our outstanding work.Exactly 30 days after launching your site,we offer additional revision and other corrections that may rise.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                              <!--  <i class="fa fa-check fa-5x"></i>
                                <h2><span class="counter"> 2200 </span><span>+</span></h2>-->
                                <h3>Quality</h3>
                                <p>We create websites that engages browsers,mobile friendly to ensure that your bussiness gets the most out of it's website.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End Content Box -->
        </div>
    </section> 

    <section id="call_to_action">

        <p>You have an project on the go?</p>
        <p>We would love to hear all about it and offer you our expert service or advice.</p>
        <a class="btn btn-lg btn-general btn-blue smooth-scroll" href="#contact"role="button" title="View Work"> Let's talk </a>



    </section>

    <footer>

        <div id="contact">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div id="contact-left">

                            <h3>MATHU MEDIA</h3>
                            <p>Commitment and dedication to providing the best possible customer service in a <strong>Simple</strong> <strong>Modern</strong> way.</p>

                            <div id="contact-info">
                                <div id="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong><span> (+254) 798827450 </span> <br>
                                        <strong>Email:</strong><span>  contact@mathumedia.com  </span> <br>
                                    </p>
                                </div>

                            </div>
                            <ul class="social-list">
                                <li><a target="_blank" href="https://www.facebook.com/Michael-Mathu-2090738070988692/?modal=admin_todo_tour" class="social-icon icon-white"><i class="fa fa-facebook" ></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/michael-mathu-89729215b/" class="social-icon icon-white"><i class="fa fa-linkedin" ></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="contact-right">
                        <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>

                           <h3>Contact Us</h3>
                            <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                <input type="text" name="name" placeholder="Full Name" class="form-control" value="">
                                <input type="text" name="email" placeholder="Email Address" class="form-control" value="">
                                <textarea rows="5" name="message" placeholder="Message..." class="form-control" value=""></textarea>

                                <div id="send-btn">
                                    <button  type="submit" name="submit" class="btn btn-lg btn-general btn-light">Submit</button>
                                </div>
                            </form> 

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2019 All Rights Reserved by Mathu Media.</p>
                        </div>

                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div id="footer-menu">
                            <ul>
                                <li><a class="smooth-scroll" href="#home">Home</a>/</li>
                                <li><a class="smooth-scroll" href="#services">Services</a>/</li>
                                <li><a class="smooth-scroll" href="#about">About</a>/</li>
                                <li><a class="smooth-scroll" href="#stats">Why us</a>/</li>
                                <li><a class="smooth-scroll" href="#contact">Contact</a>/</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- WOW JS -->
 <script src="js/wow/wow.min.js"></script>

    <!-- magnific-popup JS -->
  <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>


    <!-- owl carousel JS -->
   <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- counter -->
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>

    <!-- easing -->
    <script src="js/easing/jquery.easing.1.3.js"></script>


    <!-- custom JS -->
    <script src="js/custom.js"></script> 

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128304742-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128304742-2');
</script>

</body>



</html>