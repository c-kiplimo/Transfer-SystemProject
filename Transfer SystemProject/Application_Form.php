<?php
  $conn = include('conn.php');
// Get the student details from a form or other source
$Details_Id = isset($_POST["Details_ID"]) ? $_POST["Details_ID"] : "";
$Name = isset($_POST["Name"]) ? $_POST["Name"] : "";
$Reg_No = isset($_POST["Reg_No"]) ? $_POST["Reg_No"] : "";
$Phone_No = isset($_POST["Phone_No"]) ? $_POST["Phone_No"] : "";
$Current_Program = isset($_POST["Current_Program"]) ? $_POST["Current_Program"] : "";
$Program_Applied_For = isset($_POST["Program_Applied_For"]) ? $_POST["Program_Applied_For"] : "";
$KCSE_Index_No = isset($_POST["KCSE_Index_No"]) ? $_POST["KCSE_Index_No"] : "";
$KCPE_Index_No = isset($_POST["KCPE_Index_No"]) ? $_POST["KCPE_Index_No"] : "";
$Uploads = isset($_POST["Uploads"]) ? $_POST["Uploads"] : "";
$Mat = isset($_POST["Mat"]) ? $_POST["Mat"] : "";
$Eng = isset($_POST["Eng"]) ? $_POST["Eng"] : "";
$Kis = isset($_POST["Kis"]) ? $_POST["Kis"] : "";
$Chem = isset($_POST["Chem"]) ? $_POST["Chem"] : "";
$Bio = isset($_POST["Bio"]) ? $_POST["Bio"] : "";
$Phy = isset($_POST["Phy"]) ? $_POST["Phy"] : "";
$Geog = isset($_POST["Geog"]) ? $_POST["Geog"] : "";
$CRE = isset($_POST["CRE"]) ? $_POST["CRE"] : "";
$Histrory = isset($_POST["History"]) ? $_POST["History"] : "";
$Agric = isset($_POST["Agric"]) ? $_POST["Agric"] : "";
$Bus = isset($_POST["Bus"]) ? $_POST["Bus"] : "";
$French = isset($_POST["French"]) ? $_POST["French"] : "";
$Music = isset($_POST["Music"]) ? $_POST["Music"] : "";
$Home_Sci= isset($_POST["Home_Sci"]) ? $_POST["Home_Sci"] : "";
$Computer_Studies = isset($_POST["Computer_Studies"]) ? $_POST["Computer_Studies"] : "";
$Student_ID = isset($_POST["Student_ID"]) ? $_POST["Student_ID"] : "";

// Create a SQL query to insert the form into the database
$sql = "INSERT INTO tblstuddetails (Details_Id, Name, Reg_No, Phone_No, Current_Program, Program_Applied_For, KCSE_Index_No, KCPE_Index_No, Uploads, Mat, Eng, Kis, Chem, Bio, Phy, Geog, CRE, Histrory, Agric, Bus, French, Music, Home_Sci, Computer_Studies, Student_Id) VALUES ('$Details_Id', '$Name', '$Reg_No', '$Phone_No', '$Current_Program', '$Program_Applied_For', '$KCSE_Index_No', '$KCPE_Index_No', '$Uploads', '$Mat', '$Eng', '$Kis', '$Chem', '$Bio', '$Phy', '$Geog', '$CRE', '$Histrory', '$Agric', '$Bus', '$French', '$Music', '$Home_Sci', '$Computer_Studies', '$Student_ID')";
// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "The form is submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
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

 <form class="form1">

    <fieldset class="fieldset">

 
    <legend><h5><strong>FILL IN THE FOLLOWING FORM</strong></h5></legend>


     <label>NAME OF THE CANDIDATE:&nbsp;&nbsp;<input type="text" name="" class="input"></label><br>

     <label>REGISTRATION NUMBER:&nbsp;&nbsp;<input type="text" name="" class="input"></label><br>
     <label>PHONE NUMBER:&nbsp;&nbsp;<input type="text" name="" class="input"></label><br>
     <label for="Programs">YOUR CURRENT PROGRAM:&nbsp;&nbsp;</label>
     <select name="Program" id="Program">
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

      <select name="Program" id="Program">
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
     <label>KSCE INDEX NUMBER:<input type="text" name="" class="input"></label><br>
     <label>KCPE INDEX NUMBER/BIRTH CERTIFICATE NO:<input type="text" name="" class="input"></label><br>&nbsp;
      <label for="file-select">UPLOAD YOUR KCSE RESULT SLIP:</label>
     <input type="file" name="Upload" id="file-select">
 </form>

     <h5>SELECT THE GRADES OF SUBJECTS YOU DID IN KCSE AS THEY APPEAR ON YOUR RESULT SLIP:-</h5>
<div class="subject">


    <form class="form2"> 
        <label for="MATHS">MATHS:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

      <label for="ENGLISH">ENGLISH:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

      <label for="Programs">KISWAHILI:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select><br>

      <label for="Programs">CHEMISTRY:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>
          <label for="Programs">BIOLOGY:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

          <label for="Programs">PHYSICS:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
         <option value="-">-</option>
     </select>
     <br>

        <label for="Programs">GEOGRAPHY:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

        <label for="Programs">CRE:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

        <label for="Programs">HISTORY:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select><br>

        <label for="Programs">AGRICULTURE:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

        <label for="Programs">BUSINESS STUDIES:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>

        <label for="Programs">FRENCH LANGUAGE:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>
     <br>

      <label for="Programs">MUSIC:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>
      <label for="Programs">HOME SCIENCE:</label>

      <select name="Program" id="Program">
         <option value="A">A</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B Plain">B Plain</option>
         <option value="B- Minus">B Minus</option>
         <option value="C+ Plus">C Plus</option>
         <option value="C Plain">C Plain</option>
         <option value="C- Minus">C Minus</option>
         <option value="D+ Plus">D+ Plus</option>
         <option value="D Plus">D Plain</option>
         <option value="D- Plus">D- Minus</option>
         <option value="E">E</option>
         <option value="-">-</option>
     </select>
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

     <input type="submit" name="Submit" value="SUBMIT" id="btn1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset" name="Reset" value="RESET" id="btn2">
     </center>
    

</fieldset>



 </form>

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
