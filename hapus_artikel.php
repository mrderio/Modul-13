<?php

// Nama : Muhammad Derio
// Kelas : 06TPLE012

include "koneksi.php";
$articleID = $_GET['articleID'];
$perintah="DELETE FROM articles WHERE articleID =\"$articleID\"";
$hasil= mysql_query ($perintah);
if ($hasil) {
echo "Artikel berhasil dihapus<br>";
echo "<a href=\"edit_artikel.php\">Back</a>";
} else {
echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
ke database MySQL.";
}
?>