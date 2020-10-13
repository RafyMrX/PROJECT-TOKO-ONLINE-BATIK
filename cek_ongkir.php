<?php
$id_kabupaten = $_POST['kab_id'];
$kurir = $_POST['kurir'];
$berat = $_POST['berat'];

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "origin=441&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
	CURLOPT_HTTPHEADER => array(
		"content-type: application/x-www-form-urlencoded",
		"key: 8883c249d80d8bccfb0f18077e1ff594"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {	  echo "cURL Error #:" . $err;
} else {
	$result = json_decode($response,true);

	$hasil = $result['rajaongkir']['results']['0']['costs'];
		echo "<option>-- Pilih Paket --</option>";
	foreach ($hasil as $key => $value) {
		echo "
			<option
			paket = '".$value['service']."'
			ongkir = '".$value['cost']['0']['value']."'
			etd = '".$value['cost']['0']['etd']."'>
				".$value['service']." ".number_format($value['cost']['0']['value'])." ".$value['cost']['0']['etd']." Hari
			</option>
		";
	}
}

?>