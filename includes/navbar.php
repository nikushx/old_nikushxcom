<!--NAVBAR-->

<html>
	<head>
		<link href = "/css/bootstrap.min.css" rel = "stylesheet">
		<link href = "/css/styles.css" rel = "stylesheet">
	</head>

	<body>

		<?php $currentpage = $_SERVER['SCRIPT_NAME']; ?>
		<?php include 'includes/contact.php'; ?>
		<?php include 'includes/nopage.php'; ?>


		<div class = "navbar navbar-default navbar-static-top">
			<div class = "container">

				<a href = "index.php"><img class = "navbar-brand" src = "/img/navlogo.png" /></a>
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>

				<div class = "collapse navbar-collapse navHeaderCollapse">

					<ul class = "nav navbar-nav navbar-right">

						<li class = "<?php if ("/index.php" == $currentpage) {echo "active";} else {} ?>"><a href = "index.php">Home</a></li>
						<li class = "<?php if ("/links.php" == $currentpage) {echo "active";} else {} ?>"><a href = "links.php">Links</a></li>
						<li><a href = "#contact" data-toggle = "modal">Contact</a></li>


					</ul>

				</div>

			</div>
		</div>
	</body>

</html>