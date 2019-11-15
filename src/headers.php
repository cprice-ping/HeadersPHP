
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sample Header App</title>
		<meta name="description" content="Page to display Headers -- useful when protected by PingAccess" />
                <meta name="author" content="Ping Identity" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="css/headers.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.png">
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Sample Header App</h1><h25>This page displays the headers sent by PingAccess. </h25><br><br><br> 
						</div>
					</div>
				</div>
			</section>
		</header>
		
		<div class="container">
			<table class="table table-striped">
				<tbody>

					<?php
						foreach (getallheaders() as $name => $value) {
							echo "<tr>";
								echo "<th scope=\"row\">";
									echo "$name: ";
								echo "</th>";
								echo "<td>";
									echo " $value";
								echo "</td>";
							echo "</tr>";
						}
					?>

				</tbody>
			</table>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						</h1>
						<p>&nbsp;</p>
					</div>
					<div class="col-md-7">
						<ul class="footer-nav">
						</ul>
					</div>
				</div>
			</div>
		</footer>

		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
	</body>
</html>
