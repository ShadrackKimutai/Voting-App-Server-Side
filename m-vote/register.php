<?php
	 $con=mysqli_connect("localhost","root","","m-vote");

   if (mysqli_connect_errno($con)) {
      echo 'e';
   }else{

	
		$id=$_POST['id'];
		$imei=$_POST['imei'];
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		
		$passWord=$_POST['passWord'];
		
		$get_result=$con->query("INSERT INTO register (IMEI, firstName, lastName, passWord, NationalID) VALUES ('$imei','$firstName','$lastName','$passWord','$id')");
		if ($get_result==true){
			echo 's';
		}
		else{
			echo 's';
		}
			
	}
	

?>