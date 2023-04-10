<?php
$conn = include('conn.php');
//get students details from the form
$FName = $_POST['FName'];
$RegNo = $_POST['RegNo'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$Year_Of_Study = $_POST['Year_Of_Study'];
$status = $_POST['status'];

// Create a SQL query to insert the new student user into the database
$sql = "INSERT INTO student (FName, RegNo, Email, Phone, gender, dob, Year_Of_Study, status) VALUES ('$FName', '$RegNo', '$Email', '$Phone', '$gender', '$dob', '$Year_Of_Study', '$status');";

// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "The Student added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Add students</title>
</head>

<style>
	/* Style inputs */
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
{
	background-color: powderblue;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<header class="header">
	<div class="container">
<div class="row">
<div class="col-md-12">

<center>
    <h1 class="text-center ">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>

<img id="mimg" src="images/Kibabii-Logo.png" class="img-responsive" style="width: 100px;" />

</center>


</div>
</div>
</div>
<br />
	
</header>
<body>
	<hr>
	<h4>Register Students</h4>
	<form>
		<label for="Fname">First Name</label>
		<input type="text" id="Fname" name="FName" placeholder="Student's First Name...">

		<label for="Lname">First Name</label>
		<input type="text" id="Lname" name="LName" placeholder="Student's Last Name...">

		<label for="RegNo">Registration Number</label>
		<input type="text" id="RegNo" name="RegNo" placeholder="Student's RegNo...">

		<label for="email">Email</label>
		<input type="text" id="Email" name="Email" placeholder="Student's email...">

		<label for="Phone">Student's Phone no.</label>
		<input type="text" id="Phone" name="Phone" placeholder="Student's Phone No....">

		<label for="gender">Gender</label>
		<select id="gender" name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>

		<label Year of study>Year Of Study</label>
		<select id="Year Of Study" name="Year_Of_Study">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		<label for="status">Student's status</label>
		<select name="status">
			<option value="In session">In session</option>
			<option value="Out of session">Out of session</option>
			<option value="Unknown<">Unknown</option>
		</select>

		<input type="submit" value="Submit">

	</form>

</body>
<footer class="footer">
		<div class="container-fluid">
    <div class="row">
        <div class="footer">
Copyright © 2022 Vouma. All rights reserved.
        </div>
    </div>
    </div>
	</footer>
</html>