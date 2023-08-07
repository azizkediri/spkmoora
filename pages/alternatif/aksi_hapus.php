<?php
$sql = "DELETE FROM tabel_alternatif WHERE id_alternatif='$_GET[id_alternatif]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'index.php?module=id_alternatif';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>