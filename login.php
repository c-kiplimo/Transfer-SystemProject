<?php
include 'conn.php';
if (isset($_POST['login.php'])) {
    // code...
    $username = 
    mysqli_real_escape_string($db, $_POST['username']);

    $password = 
    mysqli_real_escape_string($db, $_POST['password']);

    if (empty ($username)){
        array_push($errors, "Username is required!");
    }


    if (empty ($password)){
        array_push($errors, "Password is required!");
    }

    if (count($errors) == 0){

        $password = md5($password);

        $query = "SELECT * FROM users WHERE 
        username = '$username'  AND
        password = '$password'";


        if (mysqli_num_rows($results) == 1 ) {

            $_SESSION['username'] = $username;

            $_SESSION['success'] == "Logged in Successfully";

            header('location: Student_Dashboard.php');
        }
        else{
            array_push($errors, "Wrong Username/password!");
        }

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
            <form name="F1" action="student_dashboard.php" onsubmit="return validation()" method="post">
                <p>
                    <label>Username: </label>
                    <input type="text" id="user" name="username"/>
                    <label>Password: </label>
                    <input type="text" id="user" name="password"/>
                    <input type="submit" class="btn btn-primary" value="Submit" id="sbmt">
                    
            </p>
        </form></div>
    </div>
</body>
    </html>



