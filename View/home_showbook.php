<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sach</title>
	<style type="text/css">
		table#book img{width:80px;}
		form>table td{border-style: solid; border-color: red; border-spacing: 0px; border-width: 1px }
		form>table{width:40%; }
	</style>
</head>
<body>
	<div id="menu">
		<table width="100%" border="1">
			<tr>
				<td>
					<a href="index.php">Trang chủ</a>
				</td>
				<td>
					<a href="index.php?controller=Home">Danh mục sách</a>
				</td>
				<td>
					<a href="#">Category</a>
				</td>
				<td> - </td>
				<td> - </td>
				<td> - </td>
				<td> 
				<form action="index.php?&action=searchBook">
				<input type="hidden" name="controller" value="Home">
				<input type="hidden" name="action" value="searchBook">
				Ten sach<input type="text" name="book_name"> <input type="submit" value="Search">
				</form>

				 </td>
			</tr>
		</table>
	</div>
	
	<table id='book' align="center">
	<?php  
		foreach ($data as $key => $value) {
			?>
			<tr>
				<td><?php echo $value['book_id'] ?></td>
				<td><?php echo $value['book_name'] ?></td>
				<td>
					<img src="images/book/<?php echo $value['img'] ?>" width200px></td>
				<td> 
					<a href="index.php?controller=Home&action=detail&book_id=<?php echo $value['book_id'] ?>">Chi tiết</a>
					
				</td>
			</tr>
			<?php
		}
	?>
	</table>
</body>
</html>