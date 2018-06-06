<!DOCTYPE html>
<html>
<head>
	<title>Monkedia: Member</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
	session_start();
	include 'sql.php';
	if (isset($_SESSION['username'])) {
		echo "<div class='loginbox'>Member: ".$_SESSION['username']."</div>";	
		?>
	<table width ="50%" cellspacing="0" cellpadding="0" border="0" >
	<th>ID</th>
	<th>Client Name </th>
	<?php
		$sql = "Select  * from clients ";
		$client_q = mysql_query($sql) or die('Error reading client table');

		// Mysql_num_row is counting table row
		if (mysql_num_rows($client_q) >= 1) {
			while ($row = mysql_fetch_array($client_q)) { ?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["client_name"]; ?></td>
				 </tr>
			<?php }
		}
		?>
		</table>
		<?php
	}
	else {
		header('location: index.php');
	}
	?>
</body>
</html>
