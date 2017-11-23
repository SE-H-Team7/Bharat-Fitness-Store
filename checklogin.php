<?php
include "db.php";

session_start();

if ($_SERVER['REQUEST_METHOD']=="POST"){

	$email = $_POST["email"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM users WHERE uemail = '$email' AND upwd = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["uid"] = $row["uid"];
		$_SESSION["uname"] = $row["uname"];

			echo "<script>parent.check('".$row["uname"]."');</script>";
		}
	else
		echo "<script>parent.check('false');</script>";


}




?>
