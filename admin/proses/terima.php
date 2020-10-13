<?php 
include '../../koneksi/koneksi.php';
$inv = $_GET['inv'];

		$terima = mysqli_query($conn, "UPDATE produksi SET terima = '1', status = '0' WHERE invoice = '$inv'");

		if($terima){

			echo "
			<script>
			alert('PESANAN BERHASIL DITERIMA');
			window.location = '../produksi.php';
			</script>
			";
		}


?>