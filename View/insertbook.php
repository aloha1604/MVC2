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
			<form action="#" method="post">
				<div id="tittle"><h2>INSERT BOOK</h2></div>
				<br>
				<div id="form-insert-name">Tên Sách: <input type="text" name="ten"></div>
				<div id="form-insert-mota">Mô Tả: <textarea name="mota"></textarea></div><br>
				<div id="form-insert-gia">Giá: <input type="tetx" name="gia"></div>
				<div id="form-insert-hinhanh">Chọn Ảnh: <input type="file" name="hinhanh"></div>
				<div id="form-insert-nxb">
					Nhà XB <select name="nhaxb" style="width: 150px;">
						<?php 
							foreach ($nxb as $key => $value) {
								?>
									<option value="<?php echo $value['pub_id'] ?>"><?php echo $value['pub_name'] ?></option>
								<?php
							}
						 ?>
					</select>
				</div>
				<div id="form-insert-loai">
					Loại Sách <select name="loaisach" style="width: 150px;">
						<?php 
							foreach ($loaisach as $key => $value) {
								?>
									<option value="<?php echo $value['cat_id'] ?>"><?php echo $value['cat_name'] ?></option>
								<?php
							}
						 ?>
					</select>
				</div>
				<br>
				<div id="tittle"><input type="submit" value="Thêm Sách"></div>
			</form>
		</div>
	</div>
</body>
</html>