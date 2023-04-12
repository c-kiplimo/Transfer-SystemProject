<?php
$con = @mysqli_connect("localhost", "root", "", "transfer_system_database");
if(!$con){
  echo "Connection failed!".@mysqli_error($con);
}
else{
echo"Connection successful!";
}
?>
