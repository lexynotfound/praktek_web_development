<?php
// Koneksi ke database
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("Location: login.php?pesan=Belum Login");
    exit;
}

// Mendapatkan id_kriteria yang akan dihapus
$id_kriteria = $_GET['id_kriteria'];

// Menghapus data alternatif dari tabel alternatif_kriteria
$queryDeleteAlternatifKriteria = "DELETE FROM alternatif_kriteria WHERE id_kriteria = '$id_kriteria'";
$resultDeleteAlternatifKriteria = mysqli_query($koneksi, $queryDeleteAlternatifKriteria);
if (!$resultDeleteAlternatifKriteria) {
    die("Error: " . mysqli_error($koneksi));
}

// Menghapus data alternatif dari tabel alternatif
$queryDeleteKriteria = "DELETE FROM kriteria WHERE id_kriteria = '$id_kriteria'";
$resultDeleteKriteria = mysqli_query($koneksi, $queryDeleteKriteria);
if ($resultDeleteKriteria) {
    // Redirect ke halaman alternatif setelah berhasil menghapus
    header("Location: kriteria.php");
    exit();
} else {
    die("Error: " . mysqli_error($koneksi));
}
