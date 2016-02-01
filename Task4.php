<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style type="text/css">
	html, body, table, tr, td {
		margin: 0;
		padding: 0;
	}
		#S1 {
			color: #F11212;
		}
		#S2 {
			color: #D50AB6;
		}
		#S3 {
			color: #4D0FD9;
		}
		#S4 {
			color: #088F7A;
		}
		#P1 {
			color: #0AA427;
		}
		#P2 {
			color: #5FDAE2;
		}
		#P3 {
			color: #DD833A;
		}
		#P4 {
			color: #5BF138;
		}
	</style>
</head>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
echo "<table border='1'>
	<tr>
		<td>	
			Фигури
		</td>
		<td>
			Лице, см2
		</td>
		<td>
			Периметър, см3
		</td>
	</tr>
	<tr>
		<td>	
			Правоъгълник
		</td>
		<td id='S1'>
			S = a.b
		</td>
		<td id='P1'>
			P = 2.a + 2.b
		</td>
	</tr>
	<tr>
		<td>
			Триъгълник	
		</td>	
		<td id='S2'>
			S = (a.ha)/2
		</td>
		<td id='P2'>
			P = a + b + c
		</td>
	</tr>
	<tr>
		<td>
			Кръг	
		</td>
		<td id='S3'>
			S = П.r.r
		</td>
		<td id=P3>
			P = 2.П.r
		</td>
	</tr>
	<tr>
		<td>
			Трапец
		</td>
		<td id='S4'>
			S = ((a+b).h)/2
		</td>
		<td id='P4'>
			P = a + b + c + d
		</td>
	</tr>	
</table>"
?>
</body>
</html>
