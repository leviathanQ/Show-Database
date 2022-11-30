<?php
session_start();
require "db_conn.php"; // Making sure this file has the connection to our database
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Show selector</title>
			<style>
				table
				{
					border: 1px solid;
					text-align: center;
				}
				th, td
				{
					padding-right: 15px;
				}
			</style>
	</head>
	<body>
		<form action="insertData.php" method="POST">
			<label name="inputLabel">Input show name: </label>
			<input name="userInput" type="text" placeholder="show name">
			<button id="submit">Submit</button>
		</form>
		
		<form action="clearUserTable.php" method="POST">
			<input type="submit" name="clearTable" value="Clear Table" />
		</form>
		<br>
	
		<form method="GET">
			<table>
				<tr style="text-align: center">
					<th colspan="6" style="font-size: 32px">User's Table</th>
				</tr>
        			<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Anime Season</th>
					<th>Anime Year</th>
					<th>Cartoon Network</th>
					<th>Cartoon Release</th>
				</tr>
				<tr>
					<?php
					$search_result = mysqli_query($conn,"SELECT * FROM user_table");
              				while($data = mysqli_fetch_array($search_result)) 
		                	{ ?>
                				<tr>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['show_Type']; ?></td>
							<td><?php echo $data['anime_Season']; ?></td>
							<td><?php echo $data['anime_Year']; ?></td>
							<td><?php echo $data['cartoon_Network']; ?></td>
							<td><?php echo $data['cartoon_Release']; ?></td>
						</tr>
					<?php } ?>
				</tr>
			</table>
		</form>
		<br>
		
		<form method="GET">	
			<table>
				<tr style="text-align: center">
					<th colspan="6" style="font-size: 32px"; >Show Table</th>
				</tr>
				<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Anime Season</th>
					<th>Anime Year</th>
					<th>Cartoon Network</th>
					<th>Cartoon Release</th>
				</tr>
				<tr>
					<?php
					$search_result = mysqli_query($conn, "SELECT * FROM show_table ORDER BY show_Type ASC, name");
					while($data = mysqli_fetch_array($search_result)) 
					{ ?>
						<tr>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['show_Type']; ?></td>
							<td><?php echo $data['anime_Season']; ?></td>
							<td><?php echo $data['anime_Year']; ?></td>
							<td><?php echo $data['carton_Network']; ?></td>
							<td><?php echo $data['cartoon_Release']; ?></td>
						</tr>
					<?php } ?>
				</tr>
			</table>
		</form>
	</body>
</html>
