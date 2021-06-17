<?php 
include "../../config/config.php";
	
	session_start();

$img_path=NULL;

if (isset( $_POST["title"])&&strlen($_POST["title"])>0&&isset( $_POST["category"])&&strlen($_POST["category"])>0&&isset( $_POST["version"])&&strlen($_POST["version"])>0&&isset( $_POST["file"])&&strlen($_POST["file"])>0&&isset( $_POST["description"])&&strlen($_POST["description"])>0&&isset($_SESSION["user_id"])) {

	$title= $_POST["title"];
	$category= $_POST["category"];
	$version= $_POST["version"];
	$description= $_POST["description"];
	$file= $_POST["file"];
	$user_id=$_SESSION["user_id"];

	include "../../config/db.php";

		if (isset($_FILES["image"])&&isset($_FILES["image"]["name"])) {
			$temp=explode(".", $_FILES["image"]["name"]);
			$file_name=time().".".end($temp);
			move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/blogs/$file_name");
			$img_path="images/blogs/$file_name";
			}
			$db->query("INSERT INTO item (title,category,version,img,file,description,user_id) VALUES('$title','$category','$version','$img_path','$file','$description','$user_id')");
			
				header("Location: $base_url/profile.php");


			}else{
				header("Location: $base_url/profile.php?error=1");
			}

 		?>