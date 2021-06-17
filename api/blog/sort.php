<?php 
include "../../config/config.php";
	


if (isset( $_POST["sortcateg"])&&strlen($_POST["sortcateg"])>0) {

	$sortcateg= $_POST["sortcateg"];

	include "../../config/db.php";

			$db->query("SELECT * from item where category = '$sortcateg'");
			
				header("Location: $base_url/sortedbycateg.php?category=$sortcateg");


			}else{
				header("Location: $base_url/index.php?error=1");
			}

 		?>