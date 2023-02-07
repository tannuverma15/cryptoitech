<?php
$servername='localhost';
$username='root';
$password='';
$database='trial';

$conn=mysqli_connect($servername, $username, $password, $database);

if($conn->connect_error){
  die("connection failed:" .$conn->connect_error);
}
// echo "connected sucessfully";

    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile=$_POST['mobile'];
    $City=$_POST['city'];
    $Password=$_POST['password'];
  


$sql="INSERT INTO signup Values('$Name', '$Email', '$Mobile', '$City', '$Password')";

if(mysqli_query($conn, $sql)){
  echo "new recorded successfully";
}
else{
  echo "Error!!";

}   
mysqli_close($conn); 
?>


