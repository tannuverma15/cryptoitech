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

    
      .show-password-btn121 {
        width: 30px;
        height: 30px;
      
        background-size: contain;
        background-repeat: no-repeat;
        cursor: pointer;
      }




      form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/
     
    input[type=text],
    input[type=password] {
        width: auto;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
     
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: auto;
    }
    /* set a hover effect for the button*/
     
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
     
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        
    }
    
     
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
    span.psw {
        float: center;
        padding-top: 16px;
    }
    span.psw {
        float: right;
        padding-top: 16px;
    }

    .input-group-text {
  margin-left: -115px;
}
.fa-eye {
  color: #000;
}

.fa-eye-slash {
  color: #000;
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
        <!-- <table>
        <form action="loginverify.php" method="post" style="margin-left: -30px;
            cursor: pointer;">
        
          Username
          <input type="text" name="username" autofocus="" autocapitalize="none" autocomplete="username" required="" id="username">
          Password
          <input type="password" name="password" autocomplete="current-password" required="" id="password">
          <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
          <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </table> -->
    <h2>Login</h2>
    <!--Step 1 : Adding HTML-->
    <form action="loginverify.php" method="post">
    
 
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
 
            <button type="submit">Login</button>
            <!-- <input type="checkbox" onclick="togglePassword()"> Show password -->
            <span class="input-group-text" onclick="togglePassword()">
          <i class="fa fa-eye" id="eye-icon"></i>
        </span>
        </div>
 
        <div class="container" style="background-color:#f1f1f1">
            <span class="cancelbtn">Forgot <a href="#">password?</a></span>
        </div>
    </form>
           
           
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
  let passwordInput = document.getElementById("password");
  let eyeIcon = document.getElementById("eye-icon");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeIcon.className = "fa fa-eye-slash";
  } else {
    passwordInput.type = "password";
    eyeIcon.className = "fa fa-eye";
  }
}


</script>
</body>
</html>

