
<!DOCTYPE html>
<html>
	<head>
		<!--Bootstrap Header - Meta Information - NIKUSHx Hub-->
		<title>NIKUSHx Links</title>
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

		<!--Links Hub Body-->
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "panel panel-default">
						<div class = "panel-body">

							<div class = "page-header">

								<h3>Links Section<small> Editted on: <?php echo date ("F d" . ", " . "Y", getlastmod()); ?></small></h3>

							</div>

							<!--Links Section-->

							<img class = "featuredImg" src = "img/link-banner.jpg" />

								<h4>My Projects</h4>
								<p>

									<ul class = "list-group">

										<li class = "list-group-item"><a href = "http://www.cryptominers.me/">CryptoMiners (scrap)</a></li>
										<li class = "list-group-item"><a href = "http://www.laptops4college.com/">Laptops4College</a></li>
										<li class = "list-group-item"><a href = "#">More Projects To Come...</a></li>

									</ul>

								</p>

								<h4>Connect w/ Me</h4>
								<p>

									<ul class = "list-group">

										<li class = "list-group-item"><a href = "https://github.com/nikushx">Github</a></li>
										<li class = "list-group-item"><a href = "https://www.linkedin.com/in/nikush-dalia-a40280108">LinkedIn</a></li>

									</ul>

								</p>
								
								<h4>Misc.</h4>
								<p>
									
									<ul class = "list-group">
									
										<li class = "list-group-item"><a href = "https://www.facebook.com/pages/GamingKing/1536255743322400">NIKUSHx Facebook Page</a></li>
										<li class = "list-group-item"><a href = "https://www.youtube.com/channel/UCnmzMHiCu-pyLAlGbyCNhCA">NIKUSHx YouTube (scrap)</a></li>
										<li class = "list-group-item"><a href = "gifs.php">NIKUSHx's Psychedelic GIFs</a></li>
										
									</ul>
									
								</p>	
						
						</div>
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
