<?php
		$db = "faculty";
		$ser = "localhost";
		$pass = "";
		$usr = "root";
		$dbname="faculty";
		$conn = mysqli_connect($ser,$usr,$pass);
		mysqli_connect($ser, $usr, $pass) or die ('Error connecting to mysql');
		mysqli_select_db($conn,$db) or die('error connection');
	//Start session
	session_start();
	
	
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	//$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error($myConnection)); 
		//$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	if(!$conn) {
		die('Failed to connect to server: ' . mysqli_error($conn));
	}
	
	//Select database
	$db1 = mysqli_select_db($conn,$db);
	if(!$db1) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection.
/*function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($conn,$str);
	}*/
	
	
	
	$username =$_POST["username"];
	$password =$_POST["password"];
	//$pass= SHA1($password);
	
	//echo $name;
	//echo $password;
	
	//Create query
	$qry="SELECT * FROM `user_details` WHERE `username` ='$username' AND `password`='$password' ";
	$result=mysqli_query($conn,$qry);
	
	//Check whether the query was successful or not
	
	if($result) {
		
		if(mysqli_num_rows($result) == 1) {
			//Login Successful

			session_regenerate_id();
			while($row = mysqli_fetch_assoc($result)){
				$email=$row["email"];
			}
			
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			
			session_write_close();
				header("location:index.php");
				exit();
			
			
		}else {
			//Login failed
			
			header("location: login-failed.php");
			exit();
		}
	}
     
       else {
		die("Query failed");
	}
?>
