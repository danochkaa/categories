<?php 
include "../../config/db.php";
include "../../config/config.php";

if (isset( $_POST["email"])&&strlen($_POST["email"])>0&&isset( $_POST["password"])&&strlen($_POST["password"])>0) {

$email= $_POST["email"];
$password= $_POST["password"];


$exist=$db->query("SELECT * FROM users WHERE email='$email'");

if ($exist->num_rows==0) {
header("Location: $base_url/index.php?error=2");
}
else{

$row=$exist->fetch_object();


if ($row->password!=sha1($password)) {
header("Location: $base_url/index.php?error=3");
}
else{

session_start();

$_SESSION["user_id"]=$row->id;
header("Location: $base_url/profile.php");

}
}
}
else{
header("Location: $base_url/index.php?error=1");

}


 ?>
