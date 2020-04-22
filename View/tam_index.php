<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test - Tam</title>
</head>
<body>
	Hello....
	<table>
		<tr>
			<td>STT</td>
			<td>Ma</td>
			<td>Ten</td>
		</tr>
		<?php
		foreach ($dataLoai as $key => $value) {
		?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['cat_id'] ?></td>
			<td><?php echo $value['cat_name'] ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>