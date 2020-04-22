<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quan Li Sach</title>
	<link href="<?php echo BASE_URL ?>/assets/admin_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<a href="<?php echo BASE_URL ?>/index.php?controller=Home&action=showInsert"><button>Thêm Sách</button></a>
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
		<?php 
			foreach ($dataBook as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['book_id'] ?></td>
			<td><?php echo $value['book_name'] ?></td>
			<td><?php echo $value['description'] ?></td>
			<td><?php echo $value['price'] ?></td>
			<td><?php echo $value['img'] ?></td>
			<td><?php echo $value['pub_id'] ?></td>
			<td><?php echo $value['cat_id'] ?></td>
<<<<<<< HEAD
			<td><a href="<?php echo BASE_URL ?>/view/updatebook.php?controller=Home&book_id=<?php echo $value['book_id'] ?>"><button>Xóa</button></a></td>
=======
			<td><a href="<?php echo BASE_URL ?>/index.php?controller=Home&action=deleteBook&id=<?php echo $value['book_id'] ?>"><button>Xóa</button></a></td>
>>>>>>> hoangan
			<td><a href="<?php echo BASE_URL ?>/index.php?controller=Home&action=showUpdate_view&id=<?php echo $value['book_id'] ?>"><button>Sửa</button></a></td>
		</tr>
		<?php
			}
<<<<<<< HEAD
		?> 

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

=======
		?>
>>>>>>> hoangan
	</table>
</body>
</html>