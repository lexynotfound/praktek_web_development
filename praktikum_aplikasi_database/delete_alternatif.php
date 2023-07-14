<?php
// Koneksi ke database
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("Location: login.php?pesan=Belum Login");
    exit;
}

// Mendapatkan id_alternatif yang akan dihapus
$id_alternatif = $_GET['id_alternatif'];

// Menghapus data alternatif dari tabel alternatif_kriteria
$queryDeleteAlternatifKriteria = "DELETE FROM alternatif_kriteria WHERE id_alternatif = '$id_alternatif'";
$resultDeleteAlternatifKriteria = mysqli_query($koneksi, $queryDeleteAlternatifKriteria);
if (!$resultDeleteAlternatifKriteria) {
    die("Error: " . mysqli_error($koneksi));
}

// Menghapus data alternatif dari tabel alternatif
$queryDeleteAlternatif = "DELETE FROM alternatif WHERE id_alternatif = '$id_alternatif'";
$resultDeleteAlternatif = mysqli_query($koneksi, $queryDeleteAlternatif);
if ($resultDeleteAlternatif) {
    // Redirect ke halaman alternatif setelah berhasil menghapus
    header("Location: alternatif.php");
    exit();
} else {
    die("Error: " . mysqli_error($koneksi));
}
