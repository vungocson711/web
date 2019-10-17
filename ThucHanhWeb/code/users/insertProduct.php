<div id="page_insert_product">
	<div id="form_insert">
		<p>Quản lý sản phẩm - Thêm sản phẩm</p>
		<div>
			<form action="" method="POST">
				<div class="form_item">
					<p>Tên đồng phục</p>
					<input type="text" name="product_name" id="product_name" placeholder="Nhập tên đồng phục" size="52px" required>
				</div>
				<div class="form_item">
					<p>Loại đồng phục</p>
					<select name="" id="">
						<option value="">Áo - quần thể thao</option>
					</select>
				</div>
				<div class="form_item">
					<p>Công ty cung cấp</p>
					<select name="" id="">
						<option value="">Adidas</option>
					</select>
				</div>
				<div class="form_item">
					<p>Giá</p>
					<input type="text" name="" id="" placeholder="Nhập giá tiền" required>
				</div>
				<div class="form_item">
					<p>Mô tả</p>
					<textarea name="" id="" cols="70" rows="8" placeholder="Nhập mô tả"></textarea>
				</div>
				<div class="form_item">
					<p>Hình đại diện</p>
					<input type="file" name="image" id="image">
				</div>
				<div class="form_item" id="last">
					<button type="submit" name="submit" id="insert_product">Thêm mới</button>
					<button type="reset" name="reset" id="reset">Nhập lại</button>
				</div>
			</form>
		</div>
	</div>
	<div id="table_product">
		<table border="1px">
			<thead>
				<tr>
					<th class="text_center">STT</th>
					<th class="text_center">Tên sản phẩm</th>
					<th class="text_center">Giá sản phẩm</th>
					<th class="text_center">Mô tả</th>
					<th class="text_center">Loại đồng phục</th>
					<th class="text_center">Công ty cung cấp</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text_center">1</td>
					<td>Áo thể thao</td>
					<td class="text_right">600 000 vnđ</td>
					<td>Chất liệu cactong</td>
					<td>Áo - quần thể thao</td>
					<td>Nike</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
