
<?php 
$con = @mysqli_connect("localhost", "root", "", "transfer_system_database");
if(!$con){
  echo "Connection failed!".@mysqli_error($con);
}

?>


<!DOCTYPE html >
<head>

<link rel="stylesheet" href="main.css">


<title>Transfer System</title>
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
<br />
	
</header>

<body class="">

   <div style="">
    <p><strong>Please Do not ask for</strong> a transfer into a Programme that you do not qualify for in terms of subject requirements or and KUCCPS weighted cluster points compared to KIBU cut offs points for your year of admission. This form should be returned to the Registrar Academic Affairs immediately after completion. </p><br>
    <hr style="">

    </div>
    <?php
    // Get the student details from a form or other source
if(isset($_REQUEST['Name'])){
  $Name =stripslashes($_REQUEST["Name"]);
  $Name = mysqli_real_escape_string($con,$Name);

  $Reg_No =stripslashes($_REQUEST["Reg_No"]);
  $Reg_No = mysqli_real_escape_string($con,$Reg_No); 

  $Phone_No =stripslashes($_REQUEST["Phone_No"]);
  $Phone_No = mysqli_real_escape_string($con,$Phone_No); 

   $Current_Program =stripslashes($_REQUEST["Current_Program"]);
  $Current_Program = mysqli_real_escape_string($con,$Current_Program);

   $Program_Applied_For =stripslashes($_REQUEST["Program_Applied_For"]);
  $Program_Applied_For = mysqli_real_escape_string($con,$Program_Applied_For); 

  $KCSE_Index_No =stripslashes($_REQUEST["KCSE_Index_No"]);
  $KCSE_Index_No = mysqli_real_escape_string($con,$KCSE_Index_No);

  $KCPE_Index_No =stripslashes($_REQUEST["KCPE_Index_No"]);
  $KCPE_Index_No = mysqli_real_escape_string($con,$KCPE_Index_No);

  $Uploads =stripslashes($_FILES['Uploads']);
    $Uploads= mysqli_real_escape_string($con,$Uploads);
  




// Create a SQL query to insert the form into the database
$sql = "INSERT INTO tblstuddetails ( Name, Reg_No, Phone_No, Current_Program, Program_Applied_For, KCSE_Index_No, KCPE_Index_No, Uploads, ) VALUES ('$Name', '$Reg_No', '$Phone_No', '$Current_Program', '$Program_Applied_For', '$KCSE_Index_No', '$KCPE_Index_No', '$Uploads')";
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
        } else {
?>



 <form class="form1" method="post"action="">

    <fieldset class="fieldset">

 
    <legend><h5><strong>FILL IN THE FOLLOWING FORM</strong></h5></legend>


     <label>NAME OF THE CANDIDATE:&nbsp;&nbsp;<input type="text" name="Name" class="input"></label><br>

     <label>REGISTRATION NUMBER:&nbsp;&nbsp;<input type="text" name="Reg_No" class="input"></label><br>
     <label>PHONE NUMBER:&nbsp;&nbsp;<input type="text" name="Phone_No" class="input"></label><br>
     <label for="Programs">YOUR CURRENT PROGRAM:&nbsp;&nbsp;</label>
     <select name="  Current_Program" id="Program">
         <option value="IT">IT</option>
         <option value="Computer Science">Computer Science</option>
         <option value="Business Management">Business Management</option>
         <option value="Bachelors in Commerce">Bachelors in Commerce</option>
         <option value="Education Arts">Education Arts</option>
         <option value="Education Science">Education Science</option>
         <option value="Nursing">Nursing</option>
         <option value="Journalism">Journalism</option>
         <option value="Criminology">Criminology</option>
     </select><br>
     <label for="Programs">THE PROGRAM TOU ARE APPLLYING TO SWITCH TO:&nbsp;&nbsp;</label>

      <select name="Program_Applied_For" id="Program">
         <option value="IT">IT</option>
         <option value="Computer Science">Computer Science</option>
         <option value="Business Management">Business Management</option>
         <option value="Bachelors in Commerce">Bachelors in Commerce</option>
         <option value="Education Arts">Education Arts</option>
         <option value="Education Science">Education Science</option>
         <option value="Nursing">Nursing</option>
         <option value="Journalism">Journalism</option>
         <option value="Criminology">Criminology</option>
     </select><br>
     <label>KSCE INDEX NUMBER:<input type="text" name="KCSE_Index_No" class="input"></label><br>
     <label>KCPE INDEX NUMBER:<input type="text" name="KCPE_Index_No" class="input"></label><br>&nbsp;
      <label for="file-select">UPLOAD YOUR KCSE RESULT SLIP:</label>
     <input type="file" name="Uploads" id="file-select">


     <h5>SELECT THE GRADES OF SUBJECTS YOU DID IN KCSE AS THEY APPEAR ON YOUR RESULT SLIP:-</h5>
<div class="subject">



     
     <br>
     </div>
  
     <h5><b>WARNING:-</b></h5><br>
     <li>
         You will be disqualified if you submit application for transfer into more than one degree programme. </li>
        <li>It is a criminal offence, which shall lead to disciplinary action and may further lead to criminal proceedings<br> in a court of law if you give any falsified information of your KCSE Results
     </li><br>
     <h6><b>DECLARATION:-</b></h6>
     <p>I&nbsp;&nbsp;<input type="text" name="name" placeholder="Type Your Name Here........." class="input">declare that I have read and understood<br> the warning herein and that the information I have given in this form is true and correct. </p>
    <center> 
        <hr style="border-top: 1px dotted black;">

     <div class="cod_btns">
                <input type="submit" class="btn btn-primary" value="Submit" id="cod_sbmt">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset" id="cod_rst">
            </div>
     </center>
    

</fieldset>



 </form>
 <?php 
}
 ?>

    <hr class="hr">

	</body>
	<br>
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

