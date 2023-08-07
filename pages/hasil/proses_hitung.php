<?php
//-- konfigurasi database
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

// PROSES PENGALMBILAN KRITERIA DARI DB

$sql = 'SELECT * FROM tabel_kriteria';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$kriteria=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
}

// MENAMPILKAN KRITERIA
//print_r($kriteria);
echo "<h2>Proses Hitung</h2>";
echo "<br><br> Tampilan Kriteria<br><br>";
foreach ($kriteria as $id_kriteria => $value) {
   echo $kriteria[$id_kriteria][0]." ".$kriteria[$id_kriteria][1]." = ".$kriteria[$id_kriteria][2]."<br>";
}

//proses pengambilan nilai

$sql = 'SELECT * FROM tabel_alternatif';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$alternatif=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $alternatif[$row['id_alternatif']]=array(
      $row['nama'],
		$row['jenis_kelamin'],
		$row['alamat'],
		$row['penghasilan'],
		$row['sehat'],
		$row['jujur'],
		$row['permasalahan'],
		$row['status'],
		$row['usia'],
		$row['wni'],
		$row['berdomisili_di_bojonegoro'],
		$row['jaminan'],
		$row['bersedia_di_survei']);

     
}

//MENAMPILKAN NILAI ALTERNATIF
echo "<br> INPUTAN ALTERNATIF <br>===================<br>";
foreach ($alternatif as $id_alternatif => $value) {
   for ($i=0; $i <=12 ; $i++) { 
      echo $alternatif[$id_alternatif][$i]." ";
   }
   echo "<br>";
}

//proses merubah nilai ke angka

//-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
$sql = 'SELECT * FROM tabel_nilai ORDER BY id_alternatif, id_kriteria';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$sample=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
   //-- $row['id_alternatif'] adalah id kandidat/alternatif
   if (!isset($sample[$row['id_alternatif']])) {
      $sample[$row['id_alternatif']] = array();
   }
    $sample[$row['id_alternatif']][$row['id_kriteria']] = $row['nilai'];
    
}

//MeNAMPILKAN PERUBAHAN NILAI KE ANGKA
echo "<br> KONVERSI NILAI ANGKA <br>==================<br>";
foreach ($sample as $id_sample => $value) {
   foreach ($kriteria as $id_kriteria => $value) {
      echo $sample[$id_sample][$id_kriteria]." ";
   }
   echo "<br>";
}


//PROSES NORMALISASI MATRIX
//-- inisialisasi nilai normalisasi dengan nilai dari $sample
$normal=$sample;
foreach($kriteria as $id_kriteria=>$k){
   //-- inisialisasi nilai pembagi tiap kriteria
   $pembagi=0;
   foreach($alternatif as $id_alternatif=>$a){
      $pembagi+=pow($sample[$id_alternatif][$id_kriteria],2);
   }
   foreach($alternatif as $id_alternatif=>$a){
      $normal[$id_alternatif][$id_kriteria]/=sqrt($pembagi);
   }
}

//MENAMPILKAN NORMALISASI MATRIX
echo "<br> NORMALISASI MATRIX <br>==================<br>";

foreach ($normal as $id_normal => $value) {
   $i=1;
   foreach ($kriteria as $id_kriteria => $value) {
      echo "(C".$i.") ".$normal[$id_normal][$id_kriteria]." | ";
$i++;   
}

   echo "<br>";
}


//MENGHITUNG NILAI OPTIMASI
echo "<br> Nilai OPTIMASI <br>==================<br>";
$optimasi=array();
$nilaiYi=array();
$j=1;
foreach($alternatif as $id_alternatif=>$a){
   $optimasi[$id_alternatif]=0;
   $max[$id_alternatif]=0;
   $min[$id_alternatif]=0;
   echo "(A".$j.") ";
   $i=1;
   foreach($kriteria as $id_kriteria=>$k){
      
      // echo $optimasi[$id_alternatif];
      echo "<br>";
      
      
      // echo $optimasi[$id_alternatif]=$normal[$id_alternatif][$id_kriteria];
      // echo "-*-";
      // echo ($k[1]=='benefit'?1:1);
      // echo "-*-";
      // echo $k[2];
      
      //CARI NILAI Y
      echo $optimasi[$id_alternatif]=$normal[$id_alternatif][$id_kriteria]*($k[1]=='benefit'?1:1)*$k[2];
      echo "(C".$i.") ";
      $i++;  
      $max[$id_alternatif] += $normal[$id_alternatif][$id_kriteria]*($k[1]=='benefit'?1:0)*$k[2];
      $min[$id_alternatif] += $normal[$id_alternatif][$id_kriteria]*($k[1]=='cost'?1:0)*$k[2];
      // echo "||";
   }
   $j++;  
   echo "<br>=============<br>";
   echo "Nilai Max = ".$max[$id_alternatif];
   echo "<br>";
   echo "Nilai Min = ".$min[$id_alternatif];
   echo "<br>";
   echo "Nilai Y = ".$nilaiYi[$id_alternatif]= $max[$id_alternatif]-$min[$id_alternatif];
   echo "<br>=============<br>";
}


////menampilkan NILAI OPTIMASI

// echo "<br> NILAI OPTIMASI <br>==================<br>";
// foreach ($optimasi as $id_optimasi => $value) {
//       echo $alternatif[$id_optimasi][0].$id_optimasi."<br>".$optimasi[$id_optimasi];
//    echo "<br>=======<br>";
// }

// //MERANGKING

// //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
// arsort($optimasi);

// //-- mendapatkan key/index item array yang pertama
// $index=key($optimasi);

// //-- menampilkan hasil akhir
// echo "<br> NILAI OPTIMASI URUT <br>==================<br>";
// foreach ($optimasi as $id_optimasi => $value) {
//       echo $alternatif[$id_optimasi][0].$id_optimasi."<br>".$optimasi[$id_optimasi];
//    echo "<br>=======<br>";
// }

 echo "<br> HASIL 3 TERTINGGI <br>==================<br>";
$rank = 1;
$terima = $_POST['jalternatif'];
$tanggal =  date("Y-m-d h:i:s");
foreach ($optimasi as $id_optimasi => $value) {
      echo $alternatif[$id_optimasi][0]."-".$id_optimasi."<br> ".$optimasi[$id_optimasi];
      $nama_simpan = $alternatif[$id_optimasi][0];
      if ($rank <= $terima) {
        $sqlInput = "INSERT INTO tabel_hasil (nama, nilai,tanggal,status)
        VALUES ('$nama_simpan','$optimasi[$id_optimasi]','$tanggal','rekomendasi')";
        $db->query($sqlInput);
      }else{
        $sqlInput = "INSERT INTO tabel_hasil (nama, nilai,tanggal,status)
        VALUES ('$nama_simpan','$optimasi[$id_optimasi]','$tanggal','tidak rekomendasi')";
        $db->query($sqlInput);
      }
      echo "<br>=======<br>";
      $rank++;
      echo "<br>";
}

echo "<a type='button' class='btn btn-primary' href='index.php?module=list_hasil'>Lihat Peringkat</a>";

// echo "<script>alert('data berhasil di hitung');window.location = '../../index.php?module=list_hasil';</script>";

?>