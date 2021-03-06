<!doctype html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/viewPost.css">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="stylesheet" type="text/css" href="css/SignIn.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/gen_validatorv4.js"></script>
	
	<script type="text/javascript" src="js/main.js"></script>



</head>

<body>
	<nav class="navbar sticky-top navbar-dark bg-dark justify-content-between">
		<a class="navbar-brand col pt-0" href="index.php">
			<img class="navbar-brand " src="images/site_logo.png" height="60">
		</a>

		<form class="form-inline col-8" action="search.php" method="GET">
			<input class="form-control mr-sm-3 col" type="text" placeholder="Search" aria-label="Search" name="query">
			<button class="btn btn-outline-success" type="submit" value="Search">Search</button>
		</form>


		<?php
		if ($action->isLoggedIn())
		{
			?>
			<div class="dropdown mr-5">
				<button class = "btn btn-dark dropdown-toggle" type ="button" id ="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img alt="32x32" class="rounded" style="width: 48px; height: 48px;" src="images/captain.png">
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					
					<img alt="32x32" class="mr-4 rounded" style="width: 48px; height: 48px;" src="images/captain.png">
					<p class="small">
						<a href="editProfilePage.php">Change Photo</a></p>

						<div class="text-centered">
							john
							<p class="text-muted small">
							email</p>
						</div>

						<div>
							<a href="editProfilePage.php" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Password</a>
						</div>

						<div class="col-mr-2">
							<a href="profilePage.php" class="btn btn-default btn-sm">Profile</a>
						</div>
						<div>
							<a href="./?logout=true" class="btn btn-default btn-sm"><i class="fa fa-power-off" aria-hidden="true" ></i> Sign Out</a>
						</div>

					</div>
				</div>

				<?php
			}
			else
			{		
				?>		
				<div class="col">
					<form class="form-inline row" method="post">
						<a class="mr-2" href="SignIn.php"><button class="btn btn-secondary " type="button">Sign In</button></a>
						<a class="mr-2" href="registrationpage.php"><button class="btn btn-primary" type="button">Sign Up</button></a>
					</form>
				</div>
				<?php
			}
			?>

		</nav>
		<div class="contentWrap">
			<?php 
			require_once("tabmenu.php");
			?>
