<?php 
include "config/db.php";

$category=$db->query("SELECT * FROM category ");

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Cheto tam</title>
		<meta charset="utf-8"> 
		<meta name="description" content="Kluchevie slova, do 200 simvolov"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/allitem.css"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

	<div class="above-header">
		<div class="above-header-inner">
			<div class="above-header-words">
			<i class="fas fa-user"></i>
			<a class="above-header-wordss" href="logreg.php">Login // Register</a>
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
						<li><a href="add.php">Upload Material</a></li>
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
					<div class="searching">
					<div class="left-side-content">
					<h4>Material Search</h4>
					</div>
					<form class="search" method="GET" action="">	
						<div class="input-group">
							<input class="form-control" placeholder="Search..." name="s" value="">
							<span class="input-group-btn">
								<button class="btn" type="submit">Go!</button>
							</span>
						</div>
					</form>
					</div>
					<div class="categories">
						<div class="left-side-content">
							<h4>Categories</h4>
						</div>
						<div class="ctg-rows">
							<?php 
							    if ($category->num_rows>0) {
							    while ($row=$category->fetch_object()) {
							 ?>	

							<div class="row">
							<i class="far fa-folder"></i>
			           		<a class="category-name" href=""><?php echo $row->category; ?></a>
			           		</div>
			           		<?php
						    	}
						   	 	}
						    ?>
						</div>
					</div>
				</div>

				<div class="right-side">
						<div class="left-of-right">
							<img src="https://www.corona-materials.de/downloads/preview/306fcb53889a043c788f67503a1b43b5.jpg">
							<div class="comment-block">
								<h3><i class="fas fa-comments"></i>Comments(NUMBER)</h3>
								<div class="comment">
									<div class="user-com">
										<img src="https://www.corona-materials.de/images/user.png" class="img-user">
										<h6 class="user-name">username</h6>
									</div>
									<div class="comment-info">
										<div class="comment-info-block">
											<p>asdasd</p>
										</div>
									</div>
								</div>
								<div class="comment">
									<div class="user-com">
										<img src="https://www.corona-materials.de/images/user.png" class="img-user">
										<h6 class="user-name">username</h6>
									</div>
									<div class="comment-info">
										<div class="comment-info-block">
											<p>asdasd</p>
										</div>
									</div>
								</div>
							</div>
							<form method="POST">
							<h3>New Comment</h3>
							<div class="comment-new">	
								<label>Comment*</label>
								<br>
								<textarea maxlength="5000" rows="10"  class="form-control" name="comment" style="height: 138px;width: 100%;"></textarea>
							</div>
							<button type="submit" class="upload-button">Upload Material</button>
							</form>
						</div>



						<div class="mat-info">
							<div class="title">
								<h3>marble Black</h3>
							</div>
							<div class="author">
								<a href="" class="foot-orange">aboudodja</a>
							</div>
							<p>
								marble Black
							</p>

							<ul>
								<li class="date"><i class="far fa-calendar-alt"></i>07/03/2019</li>
								<li><i class="fas fa-check"></i>Corona Version: <strong>Beta 1 (and above)</strong></li>
								<li><i class="fas fa-check"></i>Category: <strong><a class="orange-cat" href="">Architecture</a></strong></li>
								<li><i class="fas fa-check"></i>Downloads: <strong>195</strong></li>
							</ul>
							<div class="rating">
								<h4>Rating (review the material)</h4>
								<div class="ratings">
									<input type="radio" name="rating" id="rate10"><label for="rate10">10</label>
									<input type="radio" name="rating" id="rate9"><label for="rate9">9</label>
									<input type="radio" name="rating" id="rate8"><label for="rate8">8</label>
									<input type="radio" name="rating" id="rate7"><label for="rate7">7</label>
									<input type="radio" name="rating" id="rate6"><label for="rate6">6</label>
									<input type="radio" name="rating" id="rate5"><label for="rate5">5</label>
									<input type="radio" name="rating" id="rate4"><label for="rate4">4</label>
									<input type="radio" name="rating" id="rate3"><label for="rate3">3</label>
									<input type="radio" name="rating" id="rate2"><label for="rate2">2</label>
									<input type="radio" name="rating" id="rate1"><label for="rate1">1</label>
									
								</div>
							</div>
							
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