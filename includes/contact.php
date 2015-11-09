<!--NAVBAR-->

<html>
	<head>
		<link href = "/css/bootstrap.min.css" rel = "stylesheet">
		<link href = "/css/styles.css" rel = "stylesheet">
	</head>

	<body>

		<div class = "modal fade" id = "contact" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">

					<form name="contactform" method="post" action="php/contactform_submit.php" class="form-horizontal" role="form"> 
						<div class = "modal-header">
							<h4>Contact NIKUSHx</h4>
						</div>
						<div class = "modal-body">
						
							<div class = "form-group">

								<label for = "contact-name" class = "col-lg-2 control-label">Name: </label>
								<div class = "col-lg-10">
									<input type = "text" class = "form-control" id = "contact-name" name = "contact-name" placeholder = "Full name">
								</div>

							</div>

							<div class = "form-group">

								<label for = "contact-email" class = "col-lg-2 control-label">E-mail: </label>
								<div class = "col-lg-10">
									<input type = "email" class = "form-control" id = "contact-email" name = "contact-email" placeholder = "you@example.com">
								</div>

							</div>

							<div class = "form-group">

								<label for = "contact-msg" class = "col-lg-2 control-label">Message: </label>
								<div class = "col-lg-10">
									<textarea class = "form-control" rows = "8" id = "contact-msg" name = "contact-msg" placeholder = "Your message . . . "></textarea>
								</div>

							</div>


						</div>
						<div class = "modal-footer">
							<a class = "btn btn-info" data-dismiss = "modal">Close</a>
							<button class = "btn btn-success" type = "submit">Submit</a>
						</div>
					</form>

				</div>
			</div>
		</div>

	</body>

</html>