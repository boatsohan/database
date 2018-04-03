 <html> 
 <body>
 Hotel_name:<?php echo $_POST["hname"];?>
 <br>
 Check_in:<?php echo $_POST["datein"];?>
 <br>
 Check_out:<?php echo $_POST["dateout"];?>
 <br>
 Adults:<?php echo $_POST["Adults"];?>
 <br>
 Child:<?php echo $_POST["Child"];?>
 <br>
 Room_ID:<?php echo $_POST["roomid"];?>
 <br>
 Member_ID:<?php echo $_POST["mem_ID"];?>
<?php 
$con=mysqli_connect("127.0.0.1","root","","test");
if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$hname = $_POST["hname"];
$datein = $_POST["datein"];
$dateout = $_POST["dateout"];
$Adults = $_POST["Adults"];
$Child = $_POST["Child"];
$RoomID = $_POST["roomid"];
$mem_ID = $_POST["mem_ID"];
$sql="INSERT INTO tb_reserve (room_ID,check_in,check_out,mem_ID) 
VALUES ($RoomID,'$datein','$dateout','$mem_ID')";
if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error($con)); } 
mysqli_close($con);
?>
</body> 
</html>


