<?php
include("connection/koneksi.php");

// Check if the $koneksi variable is defined
if (!isset($koneksi)) {
    echo "Error: Failed to establish database connection";
    exit();
}

if (isset($_POST['button'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $querylogin = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
    if ($datalogin = mysqli_fetch_array($querylogin)) {
        session_start();
        $_SESSION['userlogin'] = $datalogin['username'];
        header("location: admin.php");
        exit();
    } else {
        header("location: login.php?pesan=Login Gagal");
        exit();
    }
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
                <span class="style2">
                    <a href="/praktikum_aplikasi_database/index.php">Home</a> |
                    <a href="/praktikum_aplikasi_database/laporan.php">Laporan</a> |
                    <a href="login.php">Login</a>
                </span>
            </td>
        </tr>
        <tr>
            <!-- Pesan Selaamt Datang-->
            <td align="center" bgcolor="FFFFFF" width="100%" border="0" cellspacing="0" cellpadding="0">
                <strong>
                    Login
                </strong>
                <br />
                <br />
                <form id="form1" name="form1" action="" method="post">
                    <table width="300" border="0" cellpadding="5" cellspacing="1" bgcolor="#F00099">
                        <tr>
                            <td bgcolor="#FFFFFF">Username</td>
                            <td bgcolor="#FFFFFF"><input type="text" name="username" id="username"></td>
                            <td bgcolor="#FFFFFF">Password</td>
                            <td bgcolor="#FFFFFF"><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;</td>
                            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Login"></td>
                        </tr>
                    </table>
                </form>
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