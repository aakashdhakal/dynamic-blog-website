<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="aakashdhakal.ico" />
	<title>Blogs - Aakash Dhakal</title>
	<link rel="stylesheet" href="CSS/style.css" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Allison|Cute Font" />
	<script src="https://kit.fontawesome.com/e7e64de2ec.js" crossorigin="anonymous" async></script>
	<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8612122745618174" crossorigin="anonymous"></script>

</head>

<body>
	<section id="navigation">
		<nav class="max-width">
			<div class="hamburger-menu">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>

			<div class="logo-container">
				<img src="./aakashdhakal.png" alt="">
			</div>

			<ul class="nav-links">
				<li><a href="" class="active"> Home</a></li>
				<li><a href="">Blogs</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Authors</a></li>
				<li><a href="">Contact</a></li>



			</ul>
			<div class="right-side">

				<?php if (!isset($_SESSION['username'])) { ?>
					<div class="login-signup">
						<button id="loginBtn"><a href="login.php">Login</a></button>
						<button id="signupBtn"><a href="signup.php">Signup</a></button>
					</div>
				<?php } else { ?>
					<div class="user-profile">
						<p><?php echo $_SESSION["username"]; ?></p>
						<img src="<?php echo $_SESSION["profilepic"]; ?>" alt="" id="userProfile">
						<div class="sub-menu" id="subMenu">
							<p><?php echo $_SESSION["username"]; ?></p>
							<a href=""><i class="fas fa-user"></i>Profile</a>
							<a href=""><i class="fas fa-gear"></i>Settings</a>
							<a href=""><i class="fas fa-circle-info"></i>Help</a>
							<a href="login-config.php"><i class="fas fa-right-from-bracket"></i>Logout</a>
						</div>
						<div class="notification">
							<i class="far fa-bell"></i>
						</div>
					</div>
				<?php } ?>

				<div class="dark-mode">
					<label class="switch">
						<input type="checkbox" id="dark-mode-toggle">
						<span class="icons"></span>
					</label>

				</div>


			</div>
		</nav>

	</section>