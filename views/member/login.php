<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class= "header">
        <h2>Login</h2>
    </div>
    
    <from action= "login"> 
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
            <label for="password_2">Comfirm Password</label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="Login" name="login_user" class= "btn">Login</button>
        </div>
        <p>Don't have an accout?<a href= "register.php">Register here</a></p>
    </from>
    
</body>
</html>

