<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transfer System</title>
  <link rel="stylesheet" type="text/css" href="main.css">
   <style type="text/css">
      /* Styles for the dashboard container */
      .sidebar {
        background-color: #f8f9fa;
        height: 100vh;
        width: 200px;
        position: fixed;
        left: 0;
        top: 0;
      }
      
      /* Styles for the main content container */
      .main {
        margin-left: 200px;
        padding: 20px;
      }
      
      /* Styles for the form */
      .deptForm {
        width: 50%;
      }
      
      /* Styles for the header */
      .header {
        background-color: #007bff;
        color: white;
        padding: 20px;
      }
      
      /* Styles for the logo */
      #mimg {
        width: 100px;
      }

      .footer{
        background: blue;
        margin-top: 50%;
        color: white;

    }
    </style>
</head>
<body>
<div class="sidebar">
  <h3><strong>COD Dashboard</strong></h3>
  <a href="add_students.php">Add Students</a>
  <a href="add_courses.php">Add Courses</a>
  <hr>
  <a href="#">New Applications</a>
  <a href="#">Approved Applications</a>
  <a href="#">Rejected Applications</a>
  <hr>
  <a href="#">Reports</a>
  <a href="#">Settings</a>
  <a href="#">Logout</a>
</div>

<div class="main-content">
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

  <div class="content">

   <?php
if(isset($_REQUEST['depart_name'])){
  $depart_name =stripslashes($_REQUEST["depart_name"]);
  $depart_name = mysqli_real_escape_string($con,$depart_name);

  $Courses =stripslashes($_REQUEST["Courses"]);
  $Courses = mysqli_real_escape_string($con,$Courses); 

  $Cod =stripslashes($_REQUEST["Cod"]);
  $Cod = mysqli_real_escape_string($con,$Cod); 

 


// Create a SQL query to insert the form into the database
$sql = "INSERT INTO department ( depart_name, Courses, Cod ) VALUES ('$depart_name', '$Courses', '$Cod')";
// Execute the query and check if it was successful
$result=mysqli_query($con,$sql);

   if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
        } else 
?>

    <form method="post" action="" class="deptForm">
      <hr>
      <label for="depart_name">Department Name:</label>
      <input type="text" id="Employee_No" name="depart_name" placeholder="...">
      <label for="Courses">Courses under this Department</label>
      <input type="text" id="Courses" name="Courses" placeholder="...">
      <label for="cod">COD in charge of this Department</label>
      <input type="text" id="cod" name="cod" placeholder="...">
      <input type="submit" class="btn btn-primary" value="Submit" id="cod_sbmt">
      <input type="reset" class="btn btn-secondary ml-2" value="Reset" id="cod_rst">
    </form>
  </div>
</div>


</body>

<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div>
       <center>Copyright © 2022 Vouma. All Rights Reserved.</center> 
      </div>
    </div>
  </div>
</footer>

</html>
