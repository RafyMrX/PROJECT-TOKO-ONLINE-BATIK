<?php 
include 'header.php';
// generate kode material
$kode = mysqli_query($conn, "SELECT kode_produk from produk order by kode_produk desc");
$data = mysqli_fetch_assoc($kode);
$num = substr($data['kode_produk'], 1, 4);
$add = (int) $num + 1;
if(strlen($add) == 1){
	$format = "P000".$add;
}else if(strlen($add) == 2){
	$format = "P00".$add;
}
else if(strlen($add) == 3){
	$format = "P0".$add;
}else{
	$format = "P".$add;
}
?>


<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Tambah Produk</b></h2>

	<form action="proses/tm_produk.php" method="POST" enctype="multipart/form-data">

		<div class="form-group">
			<label for="exampleInputFile">Pilih Gambar </label>
			<input type="file" id="exampleInputFile" name="files">
			<p class="help-block">Pilih Gambar untuk Produk</p>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Kode Produk</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" disabled value="<?= $format; ?>">
					<input type="hidden" name="kode" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk"  value="<?= $format; ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Produk</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" name="nama">
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-6">
				<div class="form-group form-check">
					<label for="exampleInputEmail1">Ukuran</label><br>
					<select name="ukuran[]" class="form-control">
						<option selected value="">-- Pilih Ukuran --</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Contoh : 12000" name="harga[]">
					<p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
				</div>
			</div>
		</div>

				<div class="row">

			<div class="col-md-6">
				<div class="form-group form-check">
					<label for="exampleInputEmail1">Ukuran</label><br>
					<select name="ukuran[]" class="form-control">
						<option selected value="">-- Pilih Ukuran --</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Contoh : 12000" name="harga[]">
					<p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
				</div>
			</div>
		</div>

				<div class="row">

			<div class="col-md-6">
				<div class="form-group form-check">
					<label for="exampleInputEmail1">Ukuran</label><br>
					<select name="ukuran[]" class="form-control">
						<option selected value="">-- Pilih Ukuran --</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Contoh : 12000" name="harga[]">
					<p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
				</div>
			</div>
		</div>

				<div class="row">

			<div class="col-md-6">
				<div class="form-group form-check">
					<label for="exampleInputEmail1">Ukuran</label><br>
					<select name="ukuran[]" class="form-control">
						<option selected value="">-- Pilih Ukuran --</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Contoh : 12000" name="harga[]">
					<p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-6">
				<div class="form-group form-check">
					<label for="exampleInputEmail1">Ukuran</label><br>
					<select name="ukuran[]" class="form-control">
						<option selected value="">-- Pilih Ukuran --</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Contoh : 12000" name="harga[]">
					<p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Berat (Gram)</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contoh : Masukkan dalam satuan Gram" name="berat">					
				</div>
			</div>
		</div>


		<div class="form-group">
			<label for="exampleInputPassword1">Deskripsi</label>
			<textarea name="desk" class="form-control" va>

			</textarea>
		</div>

		<div class="row">
			
			<div class="col-md-6">
				<button type="submit"  class="btn btn-success btn-block" ><i class="glyphicon glyphicon-plus-sign"></i> Tambah</button>
			</div>	
			<div class="col-md-6">
				<a href="m_produk.php" class="btn btn-danger btn-block">Cancel</a>
			</div>
		</div>
</form>
	
	</div>	




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>