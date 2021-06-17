<?php 
include "../../config/db.php";
include "../../config/config.php";
if (isset( $_POST["email"])&&strlen($_POST["email"])>0&&isset( $_POST["name"])&&strlen($_POST["name"])>0&&isset( $_POST["password"])&&strlen($_POST["password"])>0){

$email= $_POST["email"];
$name= $_POST["name"];
$password= $_POST["password"];

$exist=$db->query("SELECT * FROM users WHERE email='$email'");
if ($exist->num_rows>0) {
header("Location: $base_url/logreg.php?error=2");
}
else{

$password=sha1($password);
$db->query("INSERT INTO users (name,email,password) VALUES('$name','$email','$password')");

header("Location: $base_url/profile.php");
}

}
else{
header("Location: $base_url/logreg.php?error=1");

}



 ?>