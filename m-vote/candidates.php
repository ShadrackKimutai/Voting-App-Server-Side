<?php
  $con=mysqli_connect("localhost","root","","m-vote");

   if (mysqli_connect_errno($con)) {
     // echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

  $seat = $_POST['seat'];
$sql = "select * from candidates where Seat='$seat'";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('cid'=>$row[0],
'name'=>$row[1],
'votes'=>$row[3]
));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>