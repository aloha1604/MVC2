<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quan Li Sach</title>
	<link href="<?php echo BASE_URL ?>/assets/admin_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
<<<<<<< HEAD
			<form action="index.php?controller=Home&action=updateBook" method="post">
				<div id="tittle"><h2>UPDATE BOOK ID: <?php echo $getBookById[0]['book_id'] ?> </h2></div>
				<br>

				<div id="form-insert-name">Tên Sách: <input type="text" name="ten" value="<?php echo $getBookById[0]['book_name'] ?>"></div>
				<div id="form-insert-mota">Mô Tả: <textarea name="mota"><?php echo $getBookById[0]['description'] ?></textarea></div><br>
				<div id="form-insert-gia">Giá: <input type="tetx" name="gia" value="<?php echo $getBookById[0]['price'] ?>"></div>
=======
			<form action="<?php echo BASE_URL ?>/index.php?controller=Home&action=updateBook&id=<?php echo $getBookById['book_id'] ?>" method="post" enctype="multipart/form-data">
				<div id="tittle"><h2>UPDATE BOOK ID</h2></div>
				<br>
				<div id="form-insert-name">Tên Sách: <input type="text" name="book_name" value="<?php echo $getBookById['book_name'] ?>"></div>
				<div id="form-insert-mota">Mô Tả: <textarea name="description"><?php echo $getBookById['description'] ?></textarea></div><br>
				<div id="form-insert-gia">Giá: <input type="tetx" name="price" value="<?php echo $getBookById['price'] ?>"></div>
>>>>>>> hoangan
				<div id="form-insert-hinhanh">Chọn Ảnh: <input type="file" name="file[]" multiple="multiple"></div>
				<br>
				<div id="tittle"><input type="submit" value="Cập Nhật" name="updateBook"></div>
			</form>
		</div>
	</div>
</body>
</html>