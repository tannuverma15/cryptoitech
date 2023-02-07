<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        

        
    header{
        height: 10vh;
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

    table{
            background-image:url(/xampp/images/download.png) ;
            size: 5em;
            background-repeat: no-repeat;
            margin-top: 4em;
            margin-bottom: 4em;
            background-size: cover;
            width: 50%;
            border: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px 5px;
            border-radius: 20px;
            text-align: center;
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
                <li><a href="index.php">home</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
      </header>
    <center>
        <form method="post" action="database.php" >
            <table>
                <tr><th colspan="2">User Signup</th></tr>
                <tr><td>Name:<input type="text" name="name" id="name" value=""></td></tr>
                <tr><td>Email:<input type="text" name="email" id="email"></td></tr>
                <tr><td>Mobile:<input type="text" name="mobile" id="mobile"></td></tr>
                <tr><td>City:<input type="text" name="city" id="city"></td></tr>
                <tr><td>Password:<input type="password" name="password" id="password"></td></tr>
                <tr><td>Photo:<input type="file" name="photo" id="photo"></td></tr>
                <center><tr><th colspan="2"><a href="/database.php"><button type="submit" name="submit" value="submit" >Signup Now</button></th></tr></center>
              
                <tr><td colspan="2">Already Registered?<button><a href="login.html">Login Now!!</a></button></td></tr>

                <button><a href="admin.php"></a>View</button>
            </table>
        </form>

    </center>
    </center>
    </center>
    <footer>
        <div class="left">
            <h2 style="color: blue;">Crypto Tech Solution</h2>    
        </div>
        <div class="right">
            <h3>Site Map</h3>
            <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="signup.html">Signup</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
    
    
        </div>
       </footer>
       <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>--> 
</body>
</html>
