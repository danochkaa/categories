<?php  

$db = new mysqli("localhost", "root" , "", "materials");

if($db->connect_error){
	echo $db->connect_error;
}

?>