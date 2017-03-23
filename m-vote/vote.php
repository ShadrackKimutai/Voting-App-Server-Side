<?php
	 $con=mysqli_connect("localhost","root","","m-vote");

   if (mysqli_connect_errno($con)) {
      echo 'e';
   }else{

	
		$name=$_POST['Candidate'];
		$votes=$_POST['votes'];
		$seat=$_POST['Seat'];
		$voterimei=$_POST['Voterimei'];
		$get_result=$con->query("SElECT * FROM voting Where Seat='$seat' AND vuniq='$voterimei'");
		$res = mysqli_num_rows($get_result);
		echo $res;
 
		if($res<1){
		$get_result=$con->query("UPDATE Candidates SET votes='$votes'  WHERE name='$name' AND seat='$seat'");
		if ($get_result==true){
			$get_result=$con->query("INSERT INTO Voting (VUNIQ,Choice,Seat) VALUES('$voterimei','$name','$seat')");
			if($get_result==true){
				echo 'Success';
			}else{
				echo 'Partial Success';
			}
				
	
		}
		else{
			echo 'fail!';
		}
			
	} else{
				 
				 echo 'already voted';
			 }
   }
	

?>