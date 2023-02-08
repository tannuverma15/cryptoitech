
<?php
session_start();
if(!isset($_SESSION['username']))
{
    echo '<script>window.location="login.php"</script>';
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";                       
$dbname = "trial";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, email, mobile, city FROM signup";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        echo "<center><table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Actions</th>
            </tr>";


    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["mobile"] . "</td>
                <td>" . $row["city"] . "</td>
                <td> <input type='button' name='update' Value='Update' class='btn btn-primary' data-toggle='modal' data-target='#updateModal'>
                <input type='button' name='delete' Value='Delete' class='btn btn-primary' data-toggle='modal' data-target='#deleteModal'>
                </td>
            </tr>";
    }
    echo "</table></center>";
    
} 
else {
    echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 75%;
    margin-top:5%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>      
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalLabel">Update your Email, Mobile and City</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="update.php" method="POST">
                <input type="text" placeholder="Name" name="updateName" id="updateName">
                <input type="email" placeholder="Email" name="updateEmail" id="updateEmail">
                <input type="text" placeholder="Mobile" name="updateMobile" id="updateMobile">
                <input type="text" placeholder="City" name="updateCity" id="updateCity">
                <br><br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div> -->
          </div>
        </div>
      </div>





      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalLabel">Verify your email to delete your data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="delete.php" method="POST">
                <!-- <input type="text" placeholder="Name" name="updateName" id="updateName"> -->
                <input type="email" placeholder="Email" name="updateEmail" id="updateEmail">
                <!-- <input type="text" placeholder="Mobile" name="updateMobile" id="updateMobile">
                <input type="text" placeholder="City" name="updateCity" id="updateCity"> -->
                <br><br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Delete</button>
              </form>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div> -->
          </div>
        </div>
      </div>
      
</body>
</html>