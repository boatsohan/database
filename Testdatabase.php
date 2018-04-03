<!DOCTYPE html>
<html>

	<head>
		<title>TestDataBase</title>
	</head>

	<style type="text/css">
		td,tr{
			width: 50px;
			height: 50px;
		}
		table,td,tr	{
			border: 1px solid black;
    		border-collapse: collapse;
		}
		button{
			margin: 10px;
			width: 100px;
			height: 50px;
			border: 1px solid black;
		}
		a{
			margin: 10px;
			width: 50px;
			height: 50px;
			border: 1px solid black;
		}
	</style>
	
	<?php
		$conn = new mysqli("127.0.0.1", "root", "", "testbot");
		if (!$conn)
		{
    		die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
	?>

    <body>
    	<?php
			$query = "SELECT bot.ID,bot.Type,bot.Value FROM `bot` WHERE 1";
			$result = mysqli_query($conn, $query);
			//echo"<br><br><table><tr>";
			echo "<br><br>";
			$num=0;
			
			echo "<form action='editBot.php?' method='get'>";
			echo "<button type='submit' formaction='addBot.html' >";
			echo "+CreateMybot</button>";
			while($row = mysqli_fetch_assoc($result)) {
				$num+=1;
				$id=$row["ID"];
				echo "<button type='submit' name='ID' value='$id'>";
				echo $row["Type"]."</button>";
			}
			echo "</form>";
		?>
		<!-- <a href="action_page.php?name=0 t"></a> -->
		<!-- <a href="action_page.php?name=1"></a> -->
	</body>
</html>
