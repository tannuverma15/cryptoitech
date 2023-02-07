<?php

// if (isset($_POST['submit'])) {

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trial";



    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 



    // $Name = $_POST['updateName'];
    $Email = $_POST['updateEmail'];
    // $Mobile = $_POST['updateMobile'];
    // $City = $_POST['updateCity'];
    // $oldpass = $_POST('oldpass');

    // Update data into the database 
    $sql = "DELETE FROM signup WHERE Email='$Email'";

    if ($conn->query($sql) === TRUE) {
        // echo "Record updated successfully";
        echo "<script>window.location.href='display.php'</script>";
    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

        $conn->close();
    
?>
