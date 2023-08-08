<?php
include '../../lib/koneksi.php';
$id_kriteria = $_GET['id_kriteria'];
$kriteria = $_POST['kriteria'];
$type = $_POST['type'];
$bobot = $_POST['bobot'];
$sql = "UPDATE tabel_kriteria SET kriteria='$kriteria',type='$type',bobot='$bobot' WHERE id_kriteria=$id_kriteria";

// $getNama = "SELECT kriteria FROM tabel_kriteria where id_kriteria='$id_kriteria'";
// $resultNama = $db->query($getNama);
// $namaLama ="";
// foreach($result as $key=>$value ){
// echo $resultNama = $result[0];
// }
// //-- menyiapkan variable penampung berupa array
// $kriteria=array();
// //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
// foreach ($result as $row) {
//    $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
// }

// $editTable = "ALTER TABLE tabel_alternatif CHANGE nama_lama $kriteria VARCHAR(5)";
// $db->query($editTable);

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('UPDATE berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>