
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
      <!-- Dashboard content here -->

       <h3><strong>Admin Dashboard</strong></h3>
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
if(isset($_REQUEST['faculty_name'])){
  $faculty_name =stripslashes($_REQUEST["faculty_name"]);
  $faculty_name = mysqli_real_escape_string($con,$faculty_name);


  $dean =stripslashes($_REQUEST["dean"]);
  $dean = mysqli_real_escape_string($con,$dean); 

 


// Create a SQL query to insert the form into the database
$sql = "INSERT INTO faculty ( faculty_name, dean ) VALUES ('$faculty_name', '$dean')";
// Execute the query and check if it was successful
$result=mysqli_query($con,$sql);

   if ($result) {
            echo "<div class='form'>
                  <h3>Faculty has been created successfully!</h3><br/>
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


     <form method="post" action="" class="deptForm" >

    <hr>


        <label for="faculty_name">Faculty Name:</label>
        <input type="text" id="" name="faculty_name" placeholder="...">

        <label for="dean">Dean incharge of this Faculty</label>
        <input type="text" id="dean" name="dean" placeholder="...">


        
     
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
        
