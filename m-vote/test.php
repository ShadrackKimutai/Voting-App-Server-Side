<?php
	 $con=mysqli_connect("localhost","root","","m-vote");

   if (mysqli_connect_errno($con)) {
      echo 'e';
   }else{
		$password=$_POST['password'];
		$imei = $_POST['imei'];
		
		
		$get_result=$con->query("SElECT * FROM register Where password='$password' AND Imei='$imei'");
		$res = mysqli_num_rows($get_result);
		if ($res){
			echo 'true';
		} else{
			echo 'false';
		}
			
		}
?>