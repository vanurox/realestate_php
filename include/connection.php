<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "realestate";
// Create connection
$conn = mysqli_connect("localhost", "root", "", "simran_realestate");
 
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 


	function runQuery($query) {
		global $conn;
		return mysqli_query($conn,$query);
	}

	function rowCount($result){
		return mysqli_num_rows($result);
	}
?>