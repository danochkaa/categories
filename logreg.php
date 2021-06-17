
<!DOCTYPE html>
<html>
<head>
	<title>Cheto tam</title>
		<meta charset="utf-8"> 
		<meta name="description" content="Kluchevie slova, do 200 simvolov"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/alllogreg.css"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<div class="above-header">
		<div class="above-header-inner">
			<div class="above-header-words">
			<i class="fas fa-user"></i>
			<a class="above-header-wordss" href="">Login // Register</a>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<div class="header-inner">
				<div class="header-logo">
					<img src="https://www.corona-materials.de/images/logo.png" class="logo">
				</div>
				<div class="header-nav">
					<ul>
						<li><a href="index.php">Material Library</a></li>
						<li><a href="logreg.php">Upload Material</a></li>
						<li><a href="">Upload Manual</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section class="section">
		<div class="container2">
			<div class="section-inner">

				<div class="left-side">
					<form class="form-log" method="POST" action="api/auth/signin.php">
					<h3>Sign in</h3>
					<p>You have an account? Then sign up here with your email and <br> password:</p>
					<p>
						<label for="user">
							eMail
							<span class="required">*</span>
						</label>
						<br>
						<input class="form-control" type="text" required name="email" placeholder="eMail">
					</p>
					<p>
						<label for="password">
							Password
							<span class="required">*</span>
						</label>
						<br>
						<input class="form-control" type="password" required name="password" placeholder="Password">
					</p>
					<span class="input-group-btn">
						<button class="btn" type="submit">Sign in</button>
					</span>

					</form>
				</div>

				<div class="right-side">
					<h3>Register</h3>
					<p>You do not have an account? Then simply register here.</p>
					<form method="POST" action="api/auth/signup.php">
						<p>
							<label for="name">
								Name
								<span class="required">*</span>
							</label>
							<br>
							<input class="form-control" type="text" required name="name" placeholder="Name">
						</p>
						<p>
							<label for="user">
								eMail
								<span class="required">*</span>
							</label>
							<br>
							<input class="form-control" type="text" required name="email" placeholder="eMail">
						</p>
						<p>
							<label for="password">
								Password
								<span class="required">*</span>
							</label>
							<br>
							<input class="form-control" type="password" required name="password" placeholder="Password">
						</p>
						<span class="input-group-btn">
							<button class="btn" type="submit">Send</button>
						</span>
					</form>
				</div>

			</div>
		</div>
	</section>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 0;"></span>

	</a>
	<footer class="footer">
		<div class="footer-in">
		<div class="big-word">
			<h2>
			<span class="orange">Corona</span>
			<span class="white"> Materials</span>
			<span class="orange">.</span>
			</h2>
		</div>
		<div class="footer-menu">
			<div class="footer-menu-top">
				<ul>	
					<li><a class="foot-menu" href="">Material Library</a></li>
					<li><a class="foot-menu" href="">Upload Material</a></li>
					<li><a class="foot-menu" href="">Upload Manual</a></li>
					<li><a class="foot-menu" href="">Imprint/Contact</a></li>
					<li><a class="foot-menu" href="">Datenschutz</a></li>
				</ul>
			</div>
			
		</div>
		<hr class="hr">
		
		<div class="footer-words">
			<p>
				The
				<a class="foot-orange" href="">Material Preview Scene</a>
				was kindly provided by the author Paulo (
				<a class="foot-orange" href="">link to the forum post</a>
				)
			</p>
			<p>
				<small class="foot-white">
					<strong class="foot-white">Illegal textures</strong>
					: Please note that no copyrighted textures are used.
					<br>
					 If you notice any copyright-protected textures on this site, please report this immediately to post [at] corona-materials.de.
				</small>
			</p>
			<p>© 2016 corona-materials.de · All Rights Reserved.</p>
		</div>
		</div>
	</footer>
</body>
</html>