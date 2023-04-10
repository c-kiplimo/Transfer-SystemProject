<?php
require('conn.php');
session_start();
if (isset($_POST['username'])) {
        $Username = stripslashes($_REQUEST['username']);    // removes backslashes
        $Username = mysqli_real_escape_string($con, $Username);
        $Password = stripslashes($_REQUEST['password']);
        $Password = mysqli_real_escape_string($con, $Password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$Username'
                     AND password='" . md5($Password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $Username;
            // Redirect to user dashboard page
            header("Location: admin_dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='admin_login.php'>Login</a> again.</p>
                  </div>";
        }
      }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer System</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<style type="text/css">
.footer{
    background: blue;
    margin-top: 50%;
    color: white;
}
</style>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="text-center">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>
                    <img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" style="width: 100px;" />
                </center>
            </div>
        </div>
    </div>
</header>
<body class="body">
    <hr class="hr">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Enter in to Admin Panel </h4>
                    <img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" style="width: 100px;" />
                </div>
            </div>
        </div>
        <div id="login_admin">
            <h1>Login</h1>
            <form name="F1" action="admin_dashboard.php" onsubmit="return validation()" method="post">
                <p>
                    <label>Username: </label>
                    <input type="text" id="user" name="username"/>
                    <label>Password: </label>
                    <input type="text" id="user" name="password"/>
                    <input type="submit" name="login" value="Login">
                    
            </p>
        </form></div>
    </div>
</body>
    </html>