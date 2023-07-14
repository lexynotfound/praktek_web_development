<?php
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK - Praktikum</title>
    <link rel="stylesheet" href="/praktikum_aplikasi_database/css/style.css">
</head>

<body>
    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000099">

        <tr height="50" bgcolor="#FFFFFF">
            <span class="style1">SPK - PRAKTIKUM</span>
        </tr>
        <tr>
            <!-- Tabel Informasi -->
            <td height="35" bgcolor="FFFFFF">

                <a href="/praktek_web_development/praktikum_aplikasi_database/admin.php">Home</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/kriteria.php">Kriteria</a> |
                <a href="/praktikum_aplikasi_database/alternatif_kriteria.php">Alternatif Kriteria</a> |
                <a href="/praktek_web_development/praktek_aplikasi_database/ganti_password.php">Ganti Password</a> |
                <a href="/praktek_web_development/praktek_aplikasi_database/logout.php">Logout</a> | Anda Login Sebgaia : <?php echo $_SESSION['userlogin']; ?><span></span>

            </td>
        </tr>
        <tr>
            <!-- Pesan Selaamt Datang-->
            <td align="center" bgcolor="FFFFFF" width="100%" border="0" cellspacing="0" cellpadding="0">
                <strong>
                    Halaman Admin
                </strong>
                <br />
                <br />
                <br />
                <strong>
                    Selamat Datang <?php echo $_SESSION['userlogin']; ?><span></span>
                </strong>
                <br />
                <br />
                <br />
            </td>
        </tr>
        <tr>
            <!-- Tabel Informasi -->
            <td bgcolor="FFFFFF">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="47%" height="35" align="left">
                            <strong>&copy; 2017-2023 Kurnia Raihan Ardian - 2122.01.0018</strong>
                        </td>
                        <td width="53%" height="35" align="right">
                            <strong>
                                <a href="" target="_blank">Kontak</a> |
                                <a href="" target="_blank">About</a>
                                <a href="" target="_blank"></a>
                            </strong>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>