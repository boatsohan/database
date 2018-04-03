<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("127.0.0.1", "root", "", "test");
$result = $conn->query("SELECT mem_ID,confirmation_no, room_ID,check_in, check_out FROM tb_reserve;");
$outp = "[";
while($rs = mysqli_fetch_assoc($result)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"mem_ID":"'	. $rs["mem_ID"]. '",';
    $outp .= '"confirmation_no":"'   . $rs["confirmation_no"]. '",';
    $outp .= '"room_ID":"'   . $rs["room_ID"]. '",';
    $outp .= '"check_in":"'. $rs["check_in"]. '",'; 
	$outp .= '"check_out":"'. $rs["check_out"]. '"}'; 
}
$outp .="]";
$conn->close();
echo($outp);
?>