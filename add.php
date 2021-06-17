<?php
	include "config/db.php";
	include "config/config.php";
	
	session_start();

$category=$db->query("SELECT * FROM category ");
$category2=$db->query("SELECT * FROM category ");
$version=$db->query("SELECT * FROM version ");


if (isset($_SESSION["user_id"])) {
	$id=$_SESSION["user_id"];
	$query=$db->query("SELECT * FROM users WHERE id=$id");

if ($query->num_rows>0) {

$user=$query->fetch_object();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cheto tam</title>
		<meta charset="utf-8"> 
		<meta name="description" content="Kluchevie slova, do 200 simvolov"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/alladd.css"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<div class="above-header">
		<div class="above-header-inner">
			<div class="above-header-words">
			<i class="fas fa-user"></i>
					<?php 

if (!isset($_SESSION["user_id"])) {
 ?>
		<a class="above-header-wordss" href="logreg.php">Login // Register</a>	
			<?php 
}else{

			 ?>
			 <a class="above-header-wordss" href="profile.php"><?php echo $user->name; ?></a>
			 <a class="above-header-wordss" href="api/auth/logout.php"><i class="fas fa-sign-out-alt"></i> LogOut</a>
			<?php } ?>
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
						<li><a href="">Upload Material</a></li>
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
					<h2>Upload Material</h2>
					<form class="uploadmat" method="POST" action="api/blog/save.php" enctype="multipart/form-data">
						<label>Material Name*</label>
						<br>
						<input class="form-control" type="name" required name="title" placeholder="">
						<br>
						<label>Category*</label>
						<br>
						<select class="form-control" required aria-required="true" name="category" >


							<?php 
								    if ($category2->num_rows>0) {
								    while ($row=$category2->fetch_object()) {
								 ?>	
							<option value="<?php echo $row->category ?>"><?php echo $row->category; ?></option>
							
							<?php
							    }
							   	}
							?>

						</select>
						<br>
						<label>Corona Version*</label>
						<br>
						<select class="form-control" required aria-required="true" name="version" >


							<?php 
								    if ($version->num_rows>0) {
								    while ($row=$version->fetch_object()) {
								 ?>	
							<option value="<?php echo $row->short ?>"><?php echo $row->version; ?></option>
							
							<?php
							    }
							   	}
							?>
						</select>
						<br>
						<div class="input-button">	
						<div class="preview">
						<label>Material preview (jpg, png, tif)*</label>
						</div>
						<br>
						<span class="fileinput-button">
							<i class="fas fa-plus"></i>
							<span class="orange-input">Select a picture file</span>
							<input type="file" name="image" class="file-inp">
						</span>
						</div>
						<br>
						<div class="input-button">
						<label>Material link*</label>
						<br>
						<input class="form-control" type="text" required name="file" placeholder="">
						</div>
						<br>
						<div class="description-block">	
							<label>Description [optional]</label>
							<br>
							<textarea maxlength="5000" rows="10" class="form-control" name="description" style="height: 138px"></textarea>
						</div>
						<button type="submit" class="upload-button">Upload Material</button>
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
<?php 

}} ?>