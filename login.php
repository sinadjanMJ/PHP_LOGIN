<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	// function validate($data){
    //    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	$uname = $_POST['uname'];
	$pass = $_POST['password'];

		
		$sql = "SELECT * FROM user WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['fullname'] = $row['fullname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: sform.php?error=Incorect Email or password");
				
			}
		}else{
			header("Location: sform.php?error=Incorect Email or password");
	        exit();
		}
	}
	
else{
	header("Location: fb.php");
	exit();
}