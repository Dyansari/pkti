<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Pariwisata</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href=".">PKTI</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href=".">Home</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
                        	<ul class="dropdown-menu">
								<li><a tabindex="-1" href="#">Kategori 1</a></li>
                                <li><a tabindex="-1" href="#">Kategori 2</a></li>
							</ul>
                        </li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
					</ul>
					<form class="navbar-form form-search pull-right">
						<input id="Search" name="Search" type="text" placeholder="type text to search for" class="input-medium search-query">
						<button type="submit" class="btn">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>
