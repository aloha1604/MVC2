<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quan Li Sach</title>
	<link href="../assets/admin_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<a href="../view/insertbook.php"><button>Thêm Sách</button></a>
	<br>
	<table border="1">
		<tr>
			<td>ID Sách</td>
			<td>Tên</td>
			<td>Mô Tả</td>
			<td>Giá</td>
			<td>Hình Ảnh</td>
			<td>ID NXB</td>
			<td>ID Loại</td>
			<td colspan="2">Chức Năng</td>
		</tr>
		<!-- <?php 
			foreach ($datasach as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['book_id'] ?></td>
			<td><?php echo $value['book_name'] ?></td>
			<td><?php echo $value['description'] ?></td>
			<td><?php echo $value['price'] ?></td>
			<td><?php echo $value['img'] ?></td>
			<td><?php echo $value['pub_id'] ?></td>
			<td><?php echo $value['cat_id'] ?></td>
			<td><a href="#"><button>Xóa</button></a></td>
			<td><a href="#"><button>Sửa</button></a></td>
		</tr>
		<?php
			}
		?> -->

		<tr>
			<td>1</td>
			<td>Rau Sạch</td>
			<td>

</td>
			<td>69000</td>
			<td>abc.jpg</td>
			<td>1</td>
			<td>2</td>
			<td><a href=""><button>Xóa</button></a></td>
			<td><a href="../view/updatebook.php"><button>Sửa</button></a></td>
		</tr>

	</table>
</body>
</html>