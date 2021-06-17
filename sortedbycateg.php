<?php 
include "config/db.php";
if (isset($_GET["key"])&&strlen($_GET["key"])>0) {
$key=$_GET["key"];

	$page=1;
if (isset($_GET["page"])&&strlen($_GET["page"])>0) {
$page=$_GET["page"];
}
$limit=20;
$skip=($page-1)*$limit;

$version=$db->query("SELECT * FROM version ");
$category=$db->query("SELECT * FROM category ");
$items=$db->query("SELECT * FROM item b LEFT OUTER JOIN users u ON b.user_id=u.id WHERE b.category='$key' order by b.id DESC LIMIT $skip,$limit");

$query2=$db->query("SELECT COUNT(id) as total FROM item");

$row2=$query2->fetch_object();
$pages=ceil($row2->total/$limit);



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cheto tam</title>
		<meta charset="utf-8"> 
		<meta name="description" content="Kluchevie slova, do 200 simvolov"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/all.css"> 
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
			 <a class="above-header-wordss" href="api/auth/logout.php">LogOut</a>
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
						<li><a href="">Material Library</a></li>
								<?php 

if (!isset($_SESSION["user_id"])) {
 ?>
 <li><a href="logreg.php">Upload Material</a></li>

			<?php 
}else{

			 ?>
			 <li><a href="add.php">Upload Material</a></li>
			<?php } ?>
						
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
			           		<a class="category-name"  href="sortedbycateg.php?key=<?php echo $row->category; ?>" name="sortcateg"><?php echo $row->category; ?></a>
			           		</div>
			           		
			           		<?php
						    	}
						   	 	}
						    ?>
						</div>
					</div>
				</div>

				<div class="right-side">
						<div class="top-content">
							
							<div class="number">
								<?php 
								    if ($query2->num_rows>0) {
								    while ($row=$query2->fetch_object()) {
							 	?>	
								<strong><?php echo $row->total ?></strong> materials found
								<?php
							    	}
							   	 	}
						    	?>
							</div>
							
							<div class="right-of-top">
								<ul>
									<li><p>Sort by:</p></li>
									<li><a class="sorting" href="">Name</a></li>
									<li><a class="sorting" href="">User</a></li>
									<li><a class="sorting" href="">Rating</a></li>
									<li><a class="sorting" href="">Downloads</a></li>
									<li><a class="sorting" href="">Date</a></li>
								</ul>
							</div>
						</div>
						<div class="materials-table">
							
							<div class="materials">


								<?php
										if($items->num_rows > 0){
											while ($row = $items->fetch_object()){
									?>
								<div class="itm">


							
									<div class="itm-in">
										<img src="<?php echo $row->img; ?>">
										<div class="itm-all">
										<div class="itm-title">
											<a href="item.php"><?php  echo $row->title;   ?></a>
										</div>
										<div class="itm-username">
											<p>by <a href="" class="foot-orange"><?php echo $row->name;?></a></p>
										</div> 
										<div class="rating">
											chto to tam
										</div>
										<div class="itm-info">
											<span class="type"><i class="fa fa-cog"></i><?php  echo $row->version;   ?></span>
											<span class="downloads"><i class="fas fa-cloud-download-alt"></i>190</span>
											<span class="comments"><i class="far fa-comments"></i>12</span>
										</div>
										</div>
									</div>
								</div>
								<?php
										}
										}
									?>
							</div>

							<ul class="page-selector">
								    <?php 
								if ($page>1) {
								     ?>


								<li style="display: inline-block;"><a href="?page=<?=($page-1); ?>"><i class="fas fa-chevron-left"></i></a></li>
								 <?php } ?>
								    <?php 
								for ($i=1; $i<=$pages; $i++) { 
								?>
								<li style="display: inline-block;"><a href="?page=<?=$i; ?>"><?=$i; ?></a></li>
								<?php } 
								if ($page<$pages) {
								?>
								<li style="display: inline-block;"><a href="?page=<?=($page+1); ?>"><i class="fas fa-chevron-right"></i></a></li>
								<?php 
								}
								 ?>

							</ul>


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
<?php } ?>