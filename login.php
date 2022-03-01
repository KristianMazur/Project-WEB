<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <link rel="stylesheet" href="login_style.css">    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    </head>
    
    <body>
        <h2>Login</h2>
        
        <form action="/action_page.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                
                <label for="pasw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">Remember me
                </label>
            </div>
            
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="reg">Do not have an account? <a href="register.html">Register</a>.</span>
                <br><span class="psw">Forget <a href="#">password</a>?</span><br/>
            </div>
                
        </form>
    </body>
</html>