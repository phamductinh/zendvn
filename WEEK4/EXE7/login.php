<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/login.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="container">            
            <div class="login-form">
            <div id="form">
                <form action="process.php" method="post" name="add-form">            
                    <h1>Login</h1>
                    
                    <div class="input-box">
                        <input type="text" placeholder="Username" name="username"/>
                    </div>                   

                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password"/>
                    </div>

                    <div class="btn-box">
                        <input type="submit" value="Login" name="submit" name="submit" />                       
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
