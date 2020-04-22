<!DOCTYPE html>
<html>
<head>
	<title>Quan Li Sach</title>
	<link href="<?php echo BASE_URL ?>/assets/admin_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
			<form action="<?php echo BASE_URL ?>/index.php?controller=Home&action=insertBook" method="post" enctype="multipart/form-data">
				<div id="tittle"><h2>INSERT BOOK</h2></div>
				<br>
				<div id="form-insert-id">ID Sách: <input type="text" name="id"></div>
				<div id="form-insert-name">Tên Sách: <input type="text" name="book_name"></div>
				<div id="form-insert-mota">Mô Tả: <textarea name="description"></textarea></div><br>
				<div id="form-insert-gia">Giá: <input type="tetx" name="price"></div>
				<div id="form-insert-hinhanh">Chọn Ảnh: <input type="file" name="file[]" multiple="multiple"></div>
				<div id="form-insert-nxb">
					Nhà XB <select name="pub_id" style="width: 150px;">
						<?php 
							foreach($dataPublisher as $key => $value) {
								?>
									<option value="<?php echo $value['pub_id'] ?>"><?php echo $value['pub_name'] ?></option>
								<?php
							}
						 ?>
					</select>
				</div>
				<div id="form-insert-loai">
					Loại Sách <select name="cat_id" style="width: 150px;">
						<?php 
							foreach($dataCategory as $key => $value) {
								?>
									<option value="<?php echo $value['cat_id'] ?>"><?php echo $value['cat_name'] ?></option>
								<?php
							}
						 ?>
					</select>
				</div>
				<br>
				<div id="tittle"><input type="submit" value="Thêm Sách" name="insertBook"></div>
			</form>
		</div>
	</div>
</body>
</html>