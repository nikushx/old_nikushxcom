<!DOCTYPE html>
<html>
	<head>
		<!--Bootstrap Header - Meta Information - NIKUSHx Hub-->
		<title>NIKUSHx Hub</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/styles.css" rel = "stylesheet">
		<link rel = "shortcut icon" href = "img/favicon.ico">
		<meta name = "description" content = "NIKUSHx's Exclusive Site for Stuff">
		<meta name = "author" content = "NIKUSHx">
		<meta charset = "UTF-8">

		<!--iOS Meta Tag-->
		<link rel="apple-touch-icon" href="/img/ios-webapp.png"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent">
	</head>

	<body>		

		<!--Import NavBar-->
		<?php include 'includes/navbar.php'; ?>

		<!--Jumbotron-->
		<div class = "container">
			<div class = "jumbotron">

				<h1>Nikush Dalia: My Space</h1>
				<p><dfn>As a developer</dfn>, I aim to develop application that will change lives.</p>
				<p><dfn>As an entrepreneur</dfn>, I'm looking to start a technology-related business of my own</p>
				<p><dfn>As a student</dfn>, I am pursueing a degree in Computer Engineering at the University of Pittsburgh.</p>
				<p><dfn>As an individual</dfn>, I'm a <?php $currentage = date("Y") - 1997; echo $currentage; ?> year old, doing the things that I am not capable of doing.</p>

			</div>
		</div>

		<!--Grid Layout-->
		<div class = "container">
			<div class = "row feature">

				<div class = "col-sm-6" id = "feature-header">
					
					<div class = "well">

						<h2><span class = "glyphicon glyphicon-saved"></span>My Skills</h2>
						
						<div class="list-group">
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">Web Development</h4>
								<p class="list-group-item-text">Self-taught myself web development in 2013. Learned HTML, CSS, Bootstrap/Wordpress Management, and SQL Management. My future plans include learning HTML5/CSS3 and Javascript/jQuery.</p>
							</a>
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">C/C++ Programming</h4>
							</a>
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">Matlab Programming</h4>
							</a>
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">IT Support</h4>
								<p class="list-group-item-text">Worked at the University of Pittsburgh Information Technology Team. I worked all over campus to setup/repair computers, image computers, connect printers, and various other technology-related tasks for faculty members. I worked while studying as a student worker.</p>
							</a>
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">Graphic Design & Video Production</h4>
								<p class="list-group-item-text">Throughout my experience with web development & video production, I grew a passion for graphic design using Adobe Photoshop and GIMP to produce graphics for all of my personal projects. I value interesting, proper design.</p>
								<p class="list-group-item-text">Produced, edited, and released videos on a network-partnered YouTube channel for 4+ years. I used Adobe Premiere Pro, Sony Vegas Pro, and Final Cut Pro.</p>							
							</a>
							
							<!--<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">...</p>
							</a>-->
							
						</div>

						<!--
						<h2><span class = "glyphicon glyphicon-saved"></span>My Skills</h2>
						<p>This includes my progress of my familiarity of web design/programming, software programming languages, etc.</p>
						<br />
						<p><strong>C++: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style= "width:65%"><span class="sr-only">65% Complete</span></div></div></p>
						<p><strong>HTML: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style= "width:100%"><span class="sr-only">100% Complete</span></div></div></p>
						<p><strong>CSS: </strong><div class = "progress progress-striped active"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style= "width:100%"><span class="sr-only">100% Complete</span></div></div></p>
						<p><strong>Java: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style= "width:5%"><span class="sr-only">5% Complete</span></div></div></p>
						<p><strong>Android Development: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style= "width:0%"><span class="sr-only">0% Complete</span></div></div></p>
						<p><strong>HTML5/CSS3: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style= "width:0%"><span class="sr-only">0% Complete</span></div></div></p>
						-->

					</div>		

					<div class = "well">

						<h2><span class = "glyphicon glyphicon-cloud"></span>My Projects</h2>
						<p>This includes my progress on my current projects, whether it be personal projects, business-related projects, etc.</p>
						<br />
						<p><strong>NIKUSHx Hub: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style= "width:100%"><span class="sr-only">100% Complete</span></div></div></p>
						<p><strong>Purchase New PC: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style= "width:100%"><span class="sr-only">100% Complete</span></div></div></p>					
						<p><strong>Cryptominers.me: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style= "width:100%"><span class="sr-only">100% Complete</span></div></div></p>					
                        <p><strong>Laptops4College.com: </strong><div class = "progress progress-striped active"><div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style= "width:100%"><span class="sr-only">100% Complete</span></div></div></p>					


					</div>

				</div>

				<div class = "col-sm-6" id = "feature-header">
					
					<div class = "well">
					
						<h2><span class = "glyphicon glyphicon-user"></span>About Me</h2>
						<p>My name is Nikush. I'm <?php $currentage = date("Y") - 1997; echo $currentage; ?> years old..</p> 
						<p>I am currently enrolled as an undergraduate college student pursuing a degree in Computer Engineering.</p>
						<p>Currently, I am pursuing computer engineering with a focus on software programming.</p>
						<p>I am very interested in starting my own business in the future and becoming an established entrepreneur.</p>
						
					</div>

					<div class = "well">

						<h2><span class = "glyphicon glyphicon-saved"></span>My Experience</h2>
						
						<div class="list-group">
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">Information Technology Assistant</h4>
								<p class="list-group-item-text">at the University of Pittsburgh's Dietrich School of Arts & Sciences IT Team, starting on October 2015.</p>
								<p class="list-group-item-text">Imaged computers, repaired computers, performed network & printer repair. Worked as a team to help faculty members with any technology issues they had.</p>
							</a>
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">Website Owner</h4>
								<p class="list-group-item-text">for Laptops4College.com</p>
								<p class="list-group-item-text">This was a project that I started that helps college students pick the perfect laptop for when they go off to college. I hired a team of like-minded friends to help with writing content for the website. The website went live on May 2015.</p>
							</a>
							
							<a href="#" class="list-group-item">
								<h4 class="list-group-item-heading">Video Producer</h4>
								<p class="list-group-item-text">Owned and managed a network-partnered YouTube channel for 3+ years. I wrote, produced, and editted over 300 videos for the channel and participated in multiple YouTube channel networks.</p>
							</a>

					</div>	

				</div>
			</div>
		</div>

		<!--Import Footer-->
		<?php include 'includes/footer.php' ?>

		<!--Javascript Imports-->
		<script src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src = "js/bootstrap.js"></script>

	</body>

</html>
