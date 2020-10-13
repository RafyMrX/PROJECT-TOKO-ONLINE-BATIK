<?php 
include 'koneksi/koneksi.php';
$ukuran = $_POST['ukuran'];	
$kode = $_POST['kode'];	

$result = mysqli_query($conn, "SELECT * FROM produk WHERE kode_produk = '$kode'");
$row = mysqli_fetch_assoc($result);

$uk = explode(",", $row['ukuran']);
$hrg = explode(",", $row['harga']);
$jml = count($uk);

for ($i=0; $i < $jml ; $i++) { 
	if($ukuran == $uk[$i]){
		$hasil = $hrg[$i];
	}if($ukuran == "nul"){
		if(strpos($row['harga'], ",") == false){
			$hasil =  "Rp.".$row['harga']."";
		}else{
			$a = explode(",", $row['harga']);
			$hasil =  "Rp".$a[0]." - ".end($a);  

		}
	}
}

for ($a=0; $a < $jml ; $a++) { 
	if($ukuran == $uk[$a]){
		$hasil1 = "Rp. ".number_format($hrg[$a]);
	}if($ukuran == "nul"){
		if(strpos($row['harga'], ",") == false){
			$hasil1 =  "Rp.".number_format($row['harga'])."";
		}else{
			$a = explode(",", $row['harga']);
			$hasil1 =  "Rp".number_format($a[0])." - ".number_format(end($a));  

		}
	}
}

echo $hasil1."|".$hasil;


?>