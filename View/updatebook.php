<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quan Li Sach</title>
	<link href="../assets/admin_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
			<form action="#" method="post">
				<div id="tittle"><h2>UPDATE BOOK ID: <?php echo $datasach['book_id'] ?></h2></div>
				<br>
				<div id="form-insert-name">Tên Sách: <input type="text" name="ten" value="<?php echo $datasach['book_id'] ?>"></div>
				<div id="form-insert-mota">Mô Tả: <textarea name="mota"><?php echo $datasach['description'] ?></textarea></div><br>
				<div id="form-insert-gia">Giá: <input type="tetx" name="gia" value="<?php echo $datasach['price'] ?>"></div>
				<div id="form-insert-hinhanh">Chọn Ảnh: <input type="file[]" name="hinhanh" multiple="multiple"></div>
				<br>
				<div id="tittle"><input type="submit" value="Cập Nhật"></div>
			</form>
		</div>
	</div>
</body>
</html>