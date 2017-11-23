<html>
<head>





</head>
<body>

<?php
include "db.php";


if ($_SERVER['REQUEST_METHOD']=="GET"){

	$email = $_GET["email"];
	$sql = "SELECT * FROM users WHERE uemail = '$email'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);


	if($count == 1){

			echo "<script>console.log(parent);parent.parentfun('Not Available');</script>";
		}
	else
    {

    echo "<script>console.log(parent);parent.parentfun('Available');</script>";
    }



}




?>



</body>
</html>
