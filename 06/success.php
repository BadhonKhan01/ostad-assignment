<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 5px;
			text-align: left;
		}
	</style>
</head>
<body>
	<h1>Users</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// read data from CSV file and display it in a table
			$file = fopen('users.csv', 'r');
			while (($data = fgetcsv($file)) !== FALSE) {
				echo "<tr>";
				echo "<td>" . $data[0] . "</td>";
				echo "<td>" . $data[1] . "</td>";
				echo "<td><img src='" . $data[2] . "' width='50'></td>";
				echo "</tr>";
			}
			fclose($file);
			?>
		</tbody>
	</
