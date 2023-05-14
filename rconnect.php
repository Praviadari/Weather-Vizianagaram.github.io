<?php
    $rname=$_POST['rname'];
    $remail=$_POST['remail'];
    $rpassword=$_POST['rpassword'];

    
	// Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(rname, remail, rpassword) values(?, ?, ?)");
		$stmt->bind_param("sss", $rname, $email, $password, );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
