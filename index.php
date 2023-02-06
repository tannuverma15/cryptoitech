

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
        height: 100vh;
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
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>
  </header>
  <a href="logout.php"><input type="submit" name="submit" value="Logout" style="background:blue; 
  color:white; height:35px; width:100px; margin-top: 20px;">
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
