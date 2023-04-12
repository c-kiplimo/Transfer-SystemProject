<?php
$con = @mysqli_connect("localhost", "root", "", "transfer_system_database");
if(!$con){
  echo "Connection failed!".@mysqli_error($con);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer System</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style type="text/css">
      /* Styles for the dashboard container */
      .sidebar{
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
      <!-- Dashboard content here -->

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
    <div class="main">
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <center>
                <h1 class="text-center">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>
                <img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" />
              </center>
            </div>
          </div>
        </div>
      </header>


   <?php
if(isset($_REQUEST['FName'])){
  $FName =stripslashes($_REQUEST["FName"]);
  $FName = mysqli_real_escape_string($con,$FName);

  $LName =stripslashes($_REQUEST["LName"]);
  $LName = mysqli_real_escape_string($con,$LName); 

  $RegNo =stripslashes($_REQUEST["RegNo"]);
  $RegNo = mysqli_real_escape_string($con,$RegNo); 

  $password =stripslashes($_REQUEST["password"]);
  $password = mysqli_real_escape_string($con,$password);

  $Email =stripslashes($_REQUEST["Email"]);
  $Email = mysqli_real_escape_string($con,$Email);

  $Phone =stripslashes($_REQUEST["Phone"]);
  $Phone = mysqli_real_escape_string($con,$Phone);

  $gender =stripslashes($_REQUEST["gender"]);
  $gender = mysqli_real_escape_string($con,$gender);

  $dob =stripslashes($_REQUEST["dob"]);
  $dob = mysqli_real_escape_string($con,$dob);

  $yos =stripslashes($_REQUEST["yos"]);
  $yos = mysqli_real_escape_string($con,$yos);

  $Status =stripslashes($_REQUEST["Status"]);
  $Status = mysqli_real_escape_string($con,$Status);



 


// Create a SQL query to insert the form into the database
$sql = "INSERT INTO student ( FName, LName, RegNo, Email, Phone, password, gender, dob, yos, Status ) VALUES ('$FName', '$LName', '$RegNo', '$Email', '$Phone','$password', '$gender', '$dob', '$yos', '$Status')";
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
        <label for="Fname">Student's First Name:</label>
        <input type="text" id="FName" name="FName" placeholder="...">
        <label for="Lname">Student's Second Name</label>
        <input type="text" id="LName" name="LName" placeholder="...">
        <label for="RegNo"></label>Student's Registration Number:</label>
        <input type="text" id="RegNo" name="RegNo" placeholder="...">
        <label for="Email">Student's Email:</label>
        <input type="text" id="Email" name="Email" placeholder="...">
        <label for="Phone">Student's Phone Number:</label>
        <input type="text" id="Phone" name="Phone" placeholder="...">
        <label for="password">Student's Default Password:</label>
        <input type="text" id="password" name="password" placeholder="...">
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" placeholder="...">
        <label for="dob">Date Of Birth:</label>
        <input type="text" id="dob" name="dob" placeholder="...">
        <label for="yos">Year of Study:</label>
        <input type="text" id="yos" name="yos" placeholder="...">

           <input type="submit" class="btn btn-primary" value="Submit" id="cod_sbmt">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset" id="cod_rst">
        

    </form>

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
        
