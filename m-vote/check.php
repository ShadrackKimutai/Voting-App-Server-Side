<?php
	 $con=mysqli_connect("localhost","root","","m-vote");

   if (mysqli_connect_errno($con)) {
      echo 'e';
   }else{

	
		$seat=$_POST['seat'];
		$voterimei=$_POST['Voterimei'];
		$get_result=$con->query("SElECT * FROM voting Where Seat='$seat' AND vuniq='$voterimei'");
		$res = mysqli_num_rows($get_result);
		echo $res;
		}
		?>