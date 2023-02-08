<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$database='trial';

$conn=new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
  die("connection failed:" .$conn->connect_error);
}

	$username = $_POST['username'];
	$pwd = $_POST['password'];

	$sql = "SELECT * FROM signup WHERE email='$username' && password ='$pwd'";

	// $data = mysqli_num_rows($query);
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
	 $_SESSION['username'] = $username;
	 echo '<script type="text/javascript">window.location="display.php"</script>';

	}
	else{
	 echo "Invalid Username or Password";
		
	}

?>