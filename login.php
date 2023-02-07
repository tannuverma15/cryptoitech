<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Login Page</title>
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

    .form-group {
        margin: 20px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .form-control-container {
        display: flex;
        align-items: center;
        width: 100px;
      }
      .form-control {
        width: 28%;
        padding: 2px;
        font-size: 16px;
        border: 1px solid gray;
        border-radius: 0px;
        margin-top: 10px;
      }
      .show-password-btn121 {
        width: 30px;
        height: 30px;
      
        background-size: contain;
        background-repeat: no-repeat;
        cursor: pointer;
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
        <table>
        <form action="loginverify.php" method="post" style="margin-left: -30px;
            cursor: pointer;">
        
          Username
          <input type="text" name="username" autofocus="" autocapitalize="none" autocomplete="username" required="" id="username">
          Password
          <input type="password" name="password" autocomplete="current-password" required="" id="password">
          <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
          <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </table>
           
           
            <!-- <tr><td>Usernmae: <input type="text" name="username" id="username"></td></tr>
            <div class="form-group">
            <div class="form-control-container">
            <tr><td>Password: <input type="password" name="password" id="password" class="form-control"></td></tr>
                
            </div></div>
            <center><tr><th colspan="2"><button type="Login">Login Now!!</button></th></tr></center>
            <tr><td colspan="2">Forget Username or password?<button><a href="signup.php">Signup Now!!</a></button></td></tr>
         </form>
        </table> -->
    </center>
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
<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var currentType = passwordInput.getAttribute("type");
        if (currentType === "password") {
          passwordInput.setAttribute("type", "text");
        } else {
          passwordInput.setAttribute("type", "password");
        }
      }

  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
</body>
</html>

