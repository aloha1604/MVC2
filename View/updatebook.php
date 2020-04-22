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

			<form action="index.php?controller=Home&action=updateBook" method="post" enctype="multipart/form-data">
				<div id="tittle"><h2>UPDATE BOOK ID: <?php echo $getBookById[0]['book_id'] ?> </h2></div>
				<input type="text" name="id" value="<?php echo $getBookById[0]['book_id'] ?>" hidden>
				<br>
				
				<div id="form-insert-name">Tên Sách: <input type="text" name="book_name" value="<?php echo $getBookById[0]['book_name'] ?>"></div>
				<div id="form-insert-mota">Mô Tả: <textarea name="description"><?php echo $getBookById[0]['description'] ?></textarea></div><br>
				<div id="form-insert-gia">Giá: <input type="tetx" name="price" value="<?php echo $getBookById[0]['price'] ?>"></div>
			
				<div id="form-insert-hinhanh">Chọn Ảnh: <input type="file" name="file[]"  multiple="multiple"></div>
				<input type="text" name="hinhanh" value="<?php echo $getBookById[0]['img'] ?>" hidden>
				<img style=" width: 200px; height: 200px" src="<?php echo BASE_URL ?>/assets/images<?php echo $getBookById[0]['img']?>" alt="">
				<br>
				<div id="tittle"><input type="submit" value="Cập Nhật" name="updateBook"></div>
			</form>
		</div>
	</div>
</body>
</html>