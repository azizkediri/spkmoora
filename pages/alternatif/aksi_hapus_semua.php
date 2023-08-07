<?php
$sql = "DELETE FROM tabel_alternatif";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'index.php?module=id_alternatif';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>