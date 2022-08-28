<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>EduHome VirtualClassroom</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../styleloggedin.css">
	<link rel="stylesheet" href="./assets/css/style.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">
	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
 	

	<!----------email notification-------->







<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->
 





	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>
	<style>
.myDiv {
  border: 1px outset grey;
  background-color: lightgrey; 
  opacity: 0.8;
   
  text-align: justify;
}
.myDivFooter {
  border: 0px outset grey;
  background-color: white; 
  opacity: 0.8;
   
  text-align: justify;
}
</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Edu-Home</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Courses</a></li>
					<li> <a href="#work">BookShop</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li> <a href=""></a></li>
					<li> <a href="../index.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?>-LogOut</a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							<div class="cta-div">
								<a href="#videos" class="btn1">WATCH DEMO VIDEOS</a>
								<a href="#myservice_section" class="btn2">START LEARNING TODAY</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-instagram"></a>
								<a href="#" class="fa fa-reddit"></a>
								<a href="#" class="fa fa-linkedin"></a>
								<a href="" class="fa fa-cog"></a>
							</div>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

         <!---Login Ends------->

         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-titleF text-center">
						<img src="https://i.ibb.co/NjLSv8x/lohedu-removebg-preview.png height="150px" width="350px" alt=”site’s logo”>
         				<h2><b></b></h2><br>
						 <div class="myDiv"><br><br><p><b> . What’s new : *LIVE Classes with 2 teachers *Expert teachers explain concepts *Class teachers solve doubts *Proven EduHome'S Process for 360° Learning *Carefully designed classes to learn, revise and practice *Extra classes to bridge learning gaps
</b></p> <br><br>

 
						</div>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">MCQ Tests</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		</div>


         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">WEB DESIGN</a></h3>
				<div class="card-body">
	    			<ul style="list-style-type:circle">
	    				<li><a class="card-text" href="../loggedin/engineering_software.php">Software Engineering</a><br></li>
	    				<li><a class="card-text" href="../loggedin/engineering_aerospace.php">Aerospace Engineering </a><br></li>
	    				<li><a class="card-text" href="../loggedin/engineering_chemical.php">Chemical Engineering</a></li>
	    			</ul>
	  			</div>
         				<p>
         					Learn basic of web designing with html php laravel <br>step by step gudie to be pro
         				</p>
         			</div>
         		</div>
 
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">COMPUTER SCIENCE</a></h3>
					<div class="card-body">
	    				<ul style="list-style-type:circle">
			    			<li><a class="" href="../loggedin/computer_science_java.php">Java</a><br></li>
			    			<li><a class="" href="../loggedin/computer_science_c++.php">C++ </a><br></li>
			    			<li><a class="" href="../loggedin/computer_science_python.php">Python</a></li>
	    				</ul>
	  				</div>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-user"></i>
         				</div>
         				<h3><a href="">Language</a></h3>
			 <div class="card-body">
	    		<ul style="list-style-type:circle">
	    		
	    			<li><a class="card-text" href="../loggedin/language_english.php">English </a><br></li>
	    			<li><a class="card-text" href="../loggedin/language_french.php">French</a></li>
					<li><a class="card-text" href="../loggedin/language_arabic.php">Geman</a><br></li>
	    		</ul>
	  		</div>
         				<p>
         					Learn Different Lanaganges<br>this are the services provided by us
         				</p>
         			</div>
         		</div>
         	</div>
         </div>
     </div><br><br>
	



      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course"
        style="background-image: url('./assets/images/course-bg.jpg')">
        <div class="container">
		

        

          <h2 class="h2 section-title">Our Popular Courses</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-1.jpg" width="370" height="270" loading="lazy"
                    alt="Competitive Strategy law for all students" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Intermediate</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">35 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h2 class="h3">
                    <a href="#courses" class="card-title">Animal Tissues and fundamentals</a>
                  </h2>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
                      <a href="#" class="btn-get-started scrollto" onclick="toggle();"><button class="btnfree info"><span class="span">Watch Demo</span></button></a>
        		
        		<div class="trailer">
				<video src="video/Animal Tissues.mp4" controls="true"></video>
          		<img src="video/rem.png" class="close" onclick="toggle();"></div>
								 

                      <del class="del">$39.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">47 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-2.jpg" width="370" height="270" loading="lazy"
                    alt="Machine Learning A-Z: Hands-On Python and java" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Advanced</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">48 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Know basic of Plant Tissues</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
					<a href="#" class="btn-get-started scrollto" onclick="toggle();"><button class="btnfree info"><span class="span">Watch Demo</span></button></a>
        		
        		<div class="trailer">
				<video src="video/PLANT TISSUES.mp4" controls="true"></video>
          		<img src="video/rem.png" class="close" onclick="toggle();"></div>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">65 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-3.jpg" width="370" height="270" loading="lazy"
                    alt="Achieving Advanced in Insights with Big" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Basic</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">80 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Poll Questions:prepare for test</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
					<a href="#" class="btn-get-started scrollto" onclick="toggle();"><button class="btnfree info"><span class="span">Watch Demo</span></button></a>
        		
        		<div class="trailer">
				<video src="video/Poll Questions.mp4" controls="true"></video>
          		<img src="video/rem.png" class="close" onclick="toggle();"></div>

                      <del class="del">$69.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">42 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-4.jpg" width="370" height="270" loading="lazy"
                    alt="Education Makes A Person A Responsible Citizen" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Intermediate</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">31 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Education Makes A Person A Responsible Citizen</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
					<a href="#" class="btn-get-started scrollto" onclick="toggle();"><button class="btnfree info"><span class="span">Watch Demo</span></button></a>
        		
        		<div class="trailer">
				<video src="video/Master Tutor.mp4" controls="true"></video>
          		<img src="video/rem.png" class="close" onclick="toggle();"></div>

                      <del class="del">$59.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">46 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-5.jpg" width="370" height="270" loading="lazy"
                    alt="Building A Better World One Student At A Time" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Advanced</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">36 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Building A Better World One Student At A Time</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
					<a href="#" class="btn-get-started scrollto" onclick="toggle();"><button class="btnfree info"><span class="span">Watch Demo</span></button></a>
        		
        		<div class="trailer">
				<video src="video/Tools.mp4" controls="true"></video>
          		<img src="video/rem.png" class="close" onclick="toggle();"></div>

                      <del class="del">$39.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">91 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-6.jpg" width="370" height="270" loading="lazy"
                    alt="Education is About Forming Faithful Disciples" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Basic</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">21 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title" >Education is About Forming Faithful Disciples</a>
					
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
					<a href="#" class="btn-get-started scrollto" onclick="toggle();"><button class="btnfree info"><span class="span">Watch Demo</span></button></a>
        		
        		<div class="trailer">
				<video src="video/Master Tutor.mp4" controls="true"></video>
          		<img src="video/rem.png" class="close" onclick="toggle();"></div>

                      <del class="del">$89.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">22 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

          <center>
		<a href="../loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
	</center><br>


        </div>
      </section>
	  


  
			<!---Our Services Section Ends------->

			<!---Emailnotification Section Start------->



			<!---Emailnotification Section Start------->
	

			<!---Our Services Section Ends------->
			

			<section class="work" id="work"><br><br><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">EduHome-Book Shop</h2>
				<p class="text-center">Shop for books online though our new integrated E-commerce EduHome Shop</p>
				<div class="container-fluid">
					<!---first row start-->
					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/cs8.png" title="Shop Book Language">
								<img src="img/cat-1.png" class="img-responsive">
							<h2 align="center">Language</h2>
							</a>
							
							
							
						</div>
						
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/cs6.png" title="Shop Book Programming ">
								<img src="img/cat-2.png" class="img-responsive">
							<h2 align="center">Programming</h2>
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/cs9.png" title="Shop Book Exam Preparation">
								<img src="img/cat-3.png" class="img-responsive">
							<h2 align="center">Exams Prep</h2>
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/cs7.png" title="Shop book educational ">
								<img src="img/cat-4.png" class="img-responsive">
							<h2 align="center">Education</h2>
							</a>
							
						</div>
						
					</div>


					
					<!---first row ends-->


					
					
					<!---second row ends-->
					
				</div>
				


			</section><br><br>
			<div class="border-top pt-10" ><center><a href="../grocery%20store/login.php" class="mybtn2">Shop Books From EduHome Shop</a></center>
			</div>
	

			<!---Our Services Section Ends------->

			<!-- introduction video section starts -->

		<br><br><br><br>

		<section class="header7 cid-rjrjygOfd1" id="header7-3">

    
		    <div class="container" id="videos"><center>
		        <div class="media-container-row">

		            <div class="media-content align-centre">
		                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
		                    Watch our Master Class for Free
		                </h1>
		                <div class="mbr-section-text mbr-white pb-3">
		                    <p class="mbr-text mbr-fonts-style display-5">
		                        Master class is Demo-Class for our upcoming Live sessions; Enagage directly with one to one session with Teacher.
		                    </p>
		                </div>
		              
		            </div>

		            <div class="mbr-figure" style="width: 100%;"><iframe width="1200" height="720" src="https://www.youtube.com/embed/o5TOKFbGRrk" title="YouTube video player" frameborder="10" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div></center>

		        </div>
				<div class="mbr-section-btn">
		                        
		           <br> <center><a class="mybtn2" class="btn btn-md btn-white-outline display-4" href="video playlist/index.html">LIVE DEMO</a><br><br></center>
		         </div>
    	</div>
		</section> 




			<!-- introduction video section ends -->





			<section class="work" id="work"><br><br><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">Upcoming Courses</h2>
				<p class="text-center">More skills session planned in near future.</p>
				<div class="container-fluid">
					<!---first row start-->
					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work1.png" title="this is a sky image">
								<img src="img/work1.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work2.png" title="this is a sky image">
								<img src="img/work2.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work3.png" title="this is a sky image">
								<img src="img/work3.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work4.png" title="this is a sky image">
								<img src="img/work4.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>


					
					<!---first row ends-->


					<!-------second row starts  --->
					
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work5.png" title="this is a sky image">
								<img src="img/work5.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work6.png" title="this is a sky image">
								<img src="img/work6.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work7.png" title="this is a sky image">
								<img src="img/work7.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work8.png" title="this is a sky image">
								<img src="img/work8.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					
					
					<!---second row ends-->
					
				</div>
				


			</section>




			<!---Our Team Section Start------->
			<br><br><br>
			<div class="container text-center" id="our-members">
				<h2><b>MEMBERS</b></h2>
				<p>
					These are our excellent member .you can contact anyone anytime <br> and all are experts and well experience
				</p>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img src="img/abhinav.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Abhinav Jha</h4>
									<h4 class="team-member-designation">ceo</h4>
									<ul class="social-list">
										<li><a href="https://www.facebook.com/profile.php?id=100004910078558" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/SunilYa35862617" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/mangu.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Micheal</h4>
									<h4 class="team-member-designation">Sr. Developer</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/deepak.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Neha Bisht</h4>
									<h4 class="team-member-designation">Jr. Developer</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/neha.png" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Neha B</h4>
									<h4 class="team-member-designation">Sr. Developer</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/abhi.png" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Abhinav Jha</h4>
									<h4 class="team-member-designation">ceo</h4>
									<ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>



			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->




<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									you can ask the regarding the issues.we will <br>solve that together for sure
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'uniquedeveloper');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
												Edu-Home is an online E-learning website <br>
												here you can learn programming languages,Tech News and improve your coding skill	
											</p>
										</div>
									</div>
								</div>




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faqu.png" width="220%" height="100%">
							</div>
						</div>

					</div>
				</div>
				

			</section>


			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->


    

x
<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>



<?php include 'admin/includes/footer.php'; ?>


<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->
  <script type="text/javascript">
    function toggle(){
        var trailer= document.querySelector(".trailer")
        var video= document.querySelector("video")
        trailer.classList.toggle("active");
        
        video.pause();
        video.currentTime = 0;
    }
	</script>

</body>
</html>