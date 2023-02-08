

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Tech Solution</title>

<style>
    header{
        background-image:url(../xampp/images/download.png) ;
        height: 150px;
        opacity: 0.8;
        background-repeat:no-repeat;
        background-size: cover;
        background-color: aqua;
    }

    nav{
        display:flex;
        justify-content: space-around;
        align-items: center;
        color:blue;
        flex-wrap: wrap;
        height: 50px;
        text-indent: 2em;
    
    }

    nav.logo{
        display: flex;
        justify-content: center;
        align-items:center;
        text-align: left;
    }

    nav ul{
        display: flex;
        list-style-type: none;
    }

    nav ul li{
        text-decoration: none;
        color: beige;
    }

    nav li a:hover{
        color:blue
    }

    header.content{
        background-color: rgb(9, 41, 70);
        height: 200px;
        opacity: 0.8;
        color: aqua;
        display: flex;
        flex-direction:column;
        margin-top: 200px;
        justify-content: center;
        align-items: center;
    }

    footer{
        background-color: aqua;
        display: flex;
        color: white;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    footer ul{
        list-style-type: none;
        display: flex;
    }

    footer ul a{
        text-decoration: none;
        color: blue;
        
        margin-left: 20px;
    }
</style>    
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
    
  <header>
    <nav>
        <div class="logo">
            <img src="/xampp/images/download.png" height="50px" width="50px">
            <h1>Crypto Tech Solution</h1>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="display.php">Display</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
  </header>

<?php
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
                
            </tr>";


    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["mobile"] . "</td>
                <td>" . $row["city"] . "</td>
               
            </tr>";
    }
    echo "</table></center>";
    
} 
else {
    echo "0 results";
}

mysqli_close($conn);
?>



  <a href="logout.php"><input type="submit" name="submit" value="Logout" style="background:blue; 
  color:white; height:auto; width:100px; margin-top: 20px;">
   <footer>
    <div class="left">
        <h2 style="color: blue;">Crypto Tech Solution</h2>    
    </div>
    <div class="right">
        <h3>Site Map</h3>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>


    </div>
   </footer>
</body>
</html>
