<?php
// mengambil data koneksi
// include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_moora';
//-- koneksi ke database server dengan extension mysqli
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
//-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
if ($db->connect_error) {
   die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
}



$sehat = $_POST['sehat'];
$usia = $_POST['usia'];
$status = $_POST['status'];
$penghasilan = $_POST['penghasilan'];
$permasalahan = $_POST['permasalahan'];
$jujur = $_POST['jujur'];
$wni = $_POST['wni'];
$berdomisili_di_bojonegoro = $_POST['berdomisili_di_bojonegoro'];
$jaminan = $_POST['jaminan'];
$bersedia_di_survei = $_POST['bersedia_di_survei'];






// ---------

if ($penghasilan>10000000) {
	$npenghasilan=5;
}elseif($penghasilan<=10000000 && $penghasilan>=5000000){
   $npenghasilan=4;
}elseif($penghasilan<=5000000 && $penghasilan>=3500000){
   $npenghasilan=3;
}elseif($penghasilan<=3500000 && $penghasilan>=1000000){
   $npenghasilan=2;
}elseif($penghasilan>1000000){
   $npenghasilan=1;
}
else{
   echo "NO";
}

if ($sehat == 'ya') {
	$nsehat = 1;
}else{
	$nsehat = 0;
}
if ($usia == 'ya') {
	$nusia = 1;
}else{
	$nusia = 0;
}
if ($status == 'ya') {
	$nStatus = 1;
}else{
	$nStatus = 0;
}

if ($permasalahan == 'ya') {
	$npermasalahan = 1;
}else{
	$npermasalahan = 0;
}
if ($jujur == 'ya') {
	$njujur = 1;
}else{
	$njujur = 0;
}
if ($wni == 'ya') {
	$nwni = 1;
}else{
	$nwni = 0;
}
if ($berdomisili_di_bojonegoro == 'ya') {
	$nberdomisili_di_bojonegoro = 1;
}else{
	$nberdomisili_di_bojonegoro = 0;
}
if ($jaminan == 'ya') {
	$njaminan = 1;
}else{
	$njaminan = 0;
}
if ($bersedia_di_survei == 'ya') {
	$nbersedia_di_survei = 1;
}else{
	$nbersedia_di_survei = 0;
}
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
// // sql
$sql = "INSERT INTO tabel_alternatif (nama, jenis_kelamin, alamat, penghasilan, sehat, jujur, permasalahan, status,usia,wni,berdomisili_di_bojonegoro,jaminan,bersedia_di_survei)
VALUES (
'$nama',
'$jenis_kelamin',
'$alamat',
'$penghasilan',
'$sehat',
'$jujur',
'$permasalahan',
'$status',
'$usia',
'$wni',
'$berdomisili_di_bojonegoro',
'$jaminan',
'$bersedia_di_survei')";




if ($db->query($sql) === TRUE) {
	$sql = 'SELECT * FROM tabel_kriteria';
        $result = $db->query($sql);
        //-- menyiapkan variable penampung berupa array
        $kriteria=array();
		$input_kriteria=array();
		$nilai=array();
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($result as $row) {
             $kriteria[$row['id_kriteria']]=array($row['id_kriteria'],$row['kriteria'],$row['type'],$row['bobot']);
        }
		foreach($kriteria as $id_kriteria =>$value){
			if($kriteria[$id_kriteria][1]=='Penghasilan'){
			 $penghasilan = $_POST['penghasilan'];
			 "<br>";
			 $input_kriteria[$kriteria[$id_kriteria][0]] = 1;
			 "=";
			if ($penghasilan>10000000) {
	 $nilai[$kriteria[$id_kriteria][0]]=5;
}elseif($penghasilan<=10000000 && $penghasilan>=5000000){
	$nilai[$kriteria[$id_kriteria][0]]=4;
}elseif($penghasilan<=5000000 && $penghasilan>=3500000){
	$nilai[$kriteria[$id_kriteria][0]]=3;
}elseif($penghasilan<=3500000 && $penghasilan>=1000000){
	$nilai[$kriteria[$id_kriteria][0]]=2;
}elseif($penghasilan>1000000){
	$nilai[$kriteria[$id_kriteria][0]]=1;
}
else{
	echo "NO";
}

		 $input_kriteria[$kriteria[$id_kriteria][0]] = $nilai[$kriteria[$id_kriteria][0]];
		 "<br>";
			}
			else{
		 $kriteria[$id_kriteria][0]."=";
         $input_kriteria[$kriteria[$id_kriteria][0]] =  $_POST[$kriteria[$id_kriteria][0]];
		 "<br>";

		if ($input_kriteria[$kriteria[$id_kriteria][0]] == 'ya') {
	$nilai[$kriteria[$id_kriteria][0]] = 1;
}else{
	$nilai[$kriteria[$id_kriteria][0]] = 0;
}
			}
			
        }

		
		foreach($nilai as $n =>$value){
			 echo $nilai[$n];
			 echo "<br>";
		}
		


// 	//mengambil id Alternatif terkahir yang baru saja dimasukan
	$sqlIdakhir = "SELECT id_alternatif FROM tabel_alternatif ORDER BY id_alternatif DESC limit 1";
          $resultIdakhir = mysqli_query($db, $sqlIdakhir);
              $hasil = mysqli_fetch_assoc($resultIdakhir);
              	$id_alternatif = $hasil['id_alternatif'];
              	
//               	//insert data to table nilai.
				// $sPenghasilan = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
				// 		VALUES ('1', 1, '$npenghasilan')";
				// $db->query($sPenghasilan);
				 $i=1;
				 $id_kriteria_n = 0;
				 $nilai_n=0;
				foreach($nilai as $n =>$value){
					$id_kriteria_n = $kriteria[$n][0];
					$nilai_n = $nilai[$n];
					$enter = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
			 		VALUES ('$id_kriteria_n', '$id_alternatif', '$nilai_n')";
					$db->query($enter);
					
				}
				
//               	$ssehat = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('2', '$id_alternatif', '$nsehat')";
// 				$koneksi->query($ssehat);
				
// 				$sjujur = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('3', '$id_alternatif', '$njujur')";
// 				$koneksi->query($sjujur);
				
// 				$spermasalahan = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('4', '$id_alternatif', '$npermasalahan')";
// 				$koneksi->query($spermasalahan);
				
// 				$sStatus = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('5', '$id_alternatif', '$nStatus')";
// 				$koneksi->query($sStatus);
				
// 				$susia = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('6', '$id_alternatif', '$nusia')";
// 				$koneksi->query($susia);
				
// 				$swni = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('7', '$id_alternatif', '$nwni')";
// 				$koneksi->query($swni);

// 				$sberdomisili_di_bojonegoro = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('8', '$id_alternatif', '$nberdomisili_di_bojonegoro')";
// 				$koneksi->query($sberdomisili_di_bojonegoro);

// 				$sjaminan = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('9', '$id_alternatif', '$njaminan')";
// 				$koneksi->query($sjaminan);

// 				$sbersedia_di_survei = "INSERT INTO tabel_nilai (id_kriteria, id_alternatif, nilai)
// 						VALUES ('10', '$id_alternatif', '$nbersedia_di_survei')";
// 				$koneksi->query($sbersedia_di_survei);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=id_alternatif';</script>";
// }

// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
}

?>