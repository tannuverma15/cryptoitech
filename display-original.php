<?php
session_start();
if(!isset($_SESSION['username']))
{
    echo '<script>window.location="login.php"</script>';
    exit;
}


$servername='localhost';
$username='root';
$password='';
$database='trial';

$conn=mysqli_connect($servername, $username, $password, $database);

if($conn->connect_error){
  die("connection failed:" .$conn->connect_error);
}


$sql= "SELECT * FROM signup";
$data=mysqli_query($conn, $sql);
?>


<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
    <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>City</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          while ($row = mysql_fetch_assoc( $data ) )
           {
            echo
            "<tr>
              <td>{$row['Name']}</td>
              <td>{$row['Email']}</td>
              <td>{$row['Mobile']}</td>
              <td>{$row['City']}</td>
             
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
    </body>
    </html>

// $total=mysqli_num_rows($data); 
// $result=mysqli_fetch_assoc($data);


// echo $result['Name'];
// echo $result['Email'];
// echo $result['Mobile'];
// echo $result['City'];


// if($total!=0)
// {
//     // echo "Table Has Records";
// }
// else{
//     echo "No Records Found";
// }

// ?>

