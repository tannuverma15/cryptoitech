<?php
// Check if the form has been submitted
if(isset($_POST["submit"])) {
  // Get the form data
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile=$_POST['mobile'];
    $City=$_POST['city'];
    $Password=$_POST['password'];
    $file=$_FILES['image'];

  // Check if the file is an image
  $allowed_types = array("image/jpeg", "image/png");
  if(!in_array($file["type"], $allowed_types)) {
    die("Invalid file type");
  }

  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "trial");

  // Check the connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the image data
  $image_data = file_get_contents($file["tmp_name"]);

  // Get the file extension
  $extension = pathinfo($file["name"], PATHINFO_EXTENSION);

  // Prepare the INSERT statement
  $sql = "INSERT INTO signup (name, email, mobile,city,password, image, type, extension) VALUES (?,?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind the form data and the image data, type and extension
  mysqli_stmt_bind_param($stmt, "ssssbss", $Name, $Email, $Mobile, $City,$Password, $image_data, $file["type"], $extension);

  // Execute the query
  if (mysqli_stmt_execute($stmt)) {
    echo "Data inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
}
?>
