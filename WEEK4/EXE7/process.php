<!DOCTYPE html>
<html>
    <head>
        <title>Process</title>
        <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/login.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="container">            
            <div class="login-form">
            <div id="form">
                <h1>Process</h1>
                <?php
                    require_once 'functions.php';
                    if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
                        $username   = $_POST['username'];
                        $password   = md5($_POST['password']);
                        $data       = parse_ini_file('user.ini');
                        $userInfo   = explode('|', $data[$username]);

                        if($userInfo[0] == $username && $userInfo[1] == $password){
                            session_start();
                            $_SESSION['fullName']           = $userInfo[2];
                            $_SESSION['flagPermission']     = true;
                            $_SESSION['timeout']            = time();
                            if($_SESSION['timeout'] + 15 > time()){
                                echo '<h3>Hello: '.$_SESSION['fullName']. '</h3>';
                                echo '<a href = "logout.php">Logout</a>';
                            }else{
                                session_unset();
                                header('location: login.php');
                            }
                        }else{
                            header('location: login.php');
                        }
                    }else{
                        header('location: login.php');
                    }
                ?>
                
            </div>
            </div>
            </div>
        </div>
    </body>
</html>
