<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transfer Sysrem</title>
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
<header class="header">
    <div class="container">
<div class="row">
<div class="col-md-12">

<center>
    <h1 class="text-center ">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>

     <img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" style="width: 100px;" />

</center>
</div>
</div>
</div>

</header>

  <?php
if(isset($_REQUEST['FName'])){
  $fName =stripslashes($_REQUEST["fName"]);
  $fName = mysqli_real_escape_string($con,$fName);

  $LName =stripslashes($_REQUEST["LName"]);
  $LName = mysqli_real_escape_string($con,$LName); 

  $Employee_No =stripslashes($_REQUEST["Employee_No"]);
  $Employee_No = mysqli_real_escape_string($con,$Employee_No); 

  $email =stripslashes($_REQUEST["Email"]);
  $email = mysqli_real_escape_string($con,$Email);

  $phone =stripslashes($_REQUEST["Phone"]);
  $phone = mysqli_real_escape_string($con,$Phone);



 


// Create a SQL query to insert the form into the database
$sql = "INSERT INTO cod ( Employee_No, fName, LName, Email, Phone_No, ) VALUES ('$Employee_No' '$fName', '$LName',  '$email', '$phone_No')";
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

<body>


<div class="sidebar">
      <!-- Dashboard content here -->

       <h3><strong>Admin Dashboard</strong></h3>
  <a href="add_students.php">Register New Students</a>
  <a href="add_courses.php">Register COD</a>
  <a href="add_department.php">Add Department</a>
  <hr>
  <a href="#">New Applications</a>
  <a href="#">Approved Applications</a>
  <a href="#">Rejected Applications</a>
  <hr>
  <a href="#">Reports</a>
  <a href="#">Settings</a>
  <a href="#">Logout</a>
  
    </div>
<div class="cod_form">

	 <hr>
	<h4><strong>Add CODs</strong></h4>
	<form method="post" action="" >


		<label for="Employee_No">Employee Number</label>
		<input type="text" id="Employee_No" name="Employee_No" placeholder="Empoyee's Number...">

		<label for="fname">First Name</label>
		<input type="text" id="fname" name="fName" placeholder="Employee's First Name...">

		<label for="Lname">First Name</label>
		<input type="text" id="Lname" name="LName" placeholder="Employee's's Last Name...">


		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Employee's email...">

		<label for="phone_No">Employees's Phone no.</label>
		<input type="text" id="phone_No" name="phone_No" placeholder="Employee's Phone No....">

		
		<input type="submit" class="btn btn-primary" value="Submit" id="cod_sbmt">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset" id="cod_rst">

	</form>
</div>
</body>


        <div class="footer">
<center>Copyright © 2022 Vouma. All rights reserved.</center>
        </div>
    </div>
    </div>
  </footer>
</html>