<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mua bán</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="banner">
				<img src="../../images/banner/Banner_dongphucthethao.gif" alt="loading...">
			</div>
			<div id="menu_top">
				<ul>
					<li><a href="?act=home">Trang chủ</a></li>
					<li><a href="?act=info">Giới thiệu</a></li>
					<li><a href="?act=insert-product">Thêm sản phẩm</a></li>
					<li><a href="?act=guest">Khách hàng</a></li>
					<li><a href="?act=contact">Liên hệ</a></li>
				</ul>
			</div>
		</div>

		<div id="main">
			<?php
			if($_GET['act']=='home'){
				include('home.php');
			}else if($_GET['act']=='insert-product'){
				include('insertProduct.php');
			}else if($_GET['act']=='contact'){
				include('contact.php');
			}else if($_GET['act']=='guest'){
				include('guest.php');
			}else if($_GET['act']=='info'){
				include('info.php');
			}
			?>
		</div>
		
		<div id="footer">
			<p id="company">Công ty Topica Fashion</p>
			<p id="address_company">Address: 75 Phương Mai - Đống Đa - Hà Nội; Website: http://topica.edu.vn</p>
		</div>
	</div>

	<script src="../../js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
	
	<script src="../../js/main.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>