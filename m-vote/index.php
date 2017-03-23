<?php
   $con=mysqli_connect("localhost","root","","m-vote");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $imei = $_POST['imei'];
   
   $result = mysqli_query($con,"SELECT * FROM register where imei='$imei'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo '1';
   }else{
	   echo '0';
   }
   mysqli_close($con);
?>