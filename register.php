<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css">
    </head>
    
    <body>
        <h2>Register</h2>
        <p>Please fill in this form to  create an account.</p>
        
        <form action="/action_page.php" method="post">
            <div class="container">
                
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <label for="psw-repaet"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repaet" required>
                <hr>
                
                <p>By creating an account you agree to our <a href="#">Terns & Privacy</a>.</p>
                
                <button type="submit">Register</button>
            </div>
            
            <div  class="container" style="background-color:#f1f1f1">
                <p>Already have an account? <a href="login.html">Sign in</a>.</p>
            </div>
            
        </form>
    </body>
</html>