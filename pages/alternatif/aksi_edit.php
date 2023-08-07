<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
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
$id_alternatif = $_GET['id_alternatif'];



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

 // echo $nKPS."<br>";
 // echo $nPKH."<br>";
 // echo $nStatus."<br>";
 // echo $nEkonomi."<br>";
 // echo $penghasilan."<br>";


	//mengambil id Alternatif terkahir yang baru saja dimasukan
              	
              	// insert data to table nilai.
              	$ssehat ="UPDATE tabel_nilai 
				SET nilai = '$nsehat' 
				WHERE id_kriteria='1' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($ssehat);

				$susia ="UPDATE tabel_nilai 
				SET nilai = '$nusia' 
				WHERE id_kriteria='2' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($susia);

				$sStatus ="UPDATE tabel_nilai 
				SET nilai = '$nStatus' 
				WHERE id_kriteria='3' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($sStatus);

				$sPenghasilan ="UPDATE tabel_nilai
                        SET nilai = '$npenghasilan'
                        WHERE id_kriteria='4' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($sPenghasilan);

				$spermasalahan ="UPDATE tabel_nilai 
				SET nilai = '$npermasalahan'
				 WHERE id_kriteria='5' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($spermasalahan);
				
				$sjujur ="UPDATE tabel_nilai 
				SET nilai = '$njujur'
				 WHERE id_kriteria='6' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($sjujur);
				
				$swni ="UPDATE tabel_nilai 
				SET nilai = '$nwni'
				 WHERE id_kriteria='7' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($swni);

				
				$sberdomisili_di_bojonegoro ="UPDATE tabel_nilai 
				SET nilai = '$nberdomisili_di_bojonegoro'
				 WHERE id_kriteria='8' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($sberdomisili_di_bojonegoro);
				
				$sjaminan ="UPDATE tabel_nilai 
				SET nilai = '$njaminan'
				 WHERE id_kriteria='9' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($sjaminan);
				
				$sbersedia_di_survei ="UPDATE tabel_nilai 
				SET nilai = '$nbersedia_di_survei'
				 WHERE id_kriteria='10' AND id_alternatif = '$id_alternatif'; ";
				$koneksi->query($sbersedia_di_survei);
                
                $sqlalternatif = "UPDATE tabel_alternatif 
				SET 
				nama= '$nama', 
				jenis_kelamin='$jenis_kelamin',
				alamat='$alamat',
				sehat='$sehat',
				usia='$usia',
				status='$status',
				penghasilan='$penghasilan',
				permasalahan='$permasalahan',
				jujur='$jujur',
				wni='$wni',
				berdomisili_di_bojonegoro='$berdomisili_di_bojonegoro',
				jaminan='$jaminan',
				bersedia_di_survei='$bersedia_di_survei'
				WHERE id_alternatif = '$id_alternatif' ";
                $koneksi->query($sqlalternatif);

				echo "<script>alert('Update berhasil');window.location = '../../index.php?module=id_alternatif';</script>";


				
				
// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>