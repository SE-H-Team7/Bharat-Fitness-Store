<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
  $sql="select  count(*) from users ";
  $run_query = mysqli_query($con,$sql);
  $rows = mysqli_fetch_array($run_query)["count(*)"]+1;
  echo $rows;
	extract($_POST);
	$sql = "insert into users(uid,uname,uphoneno,uemail,uaddress,upwd) values ('$rows', '$uname', '$uphoneno', '$uemail', '$uaddress', '$upwd')";
echo $sql;

	if(mysqli_query($con,$sql)){

			echo "<script>window.alert('Successful');</script>";
		}
	else
		echo "<script>window.alert('UnSuccessful');</script>";


}




?>
