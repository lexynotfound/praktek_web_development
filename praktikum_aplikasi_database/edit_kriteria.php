<?php
/* Mengubah data kriteria per id */
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("location:login.php?pesan= Belum Login");
    exit;
}
if (isset($_POST['button'])) {
    $nama_kriteria = $_POST['nama_kriteria'];
    $kepentingan = $_POST['kepentingan'];
    $costbenefit = $_POST['costbenefit'];
    $id_kriteria = $_POST['id_kriteria'];

    $query = "UPDATE kriteria SET nama_kriteria = '$nama_kriteria', kepentingan = '$kepentingan', costbenefit = '$costbenefit' WHERE id_kriteria = '$id_kriteria'";
    if (mysqli_query($koneksi, $query)) {
        header("location: kriteria.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Retrieve criteria data for editing
if (isset($_GET['id_kriteria'])) {
    $id_kriteria = $_GET['id_kriteria'];
    $queryGetCriteria = "SELECT * FROM kriteria WHERE id_kriteria = '$id_kriteria'";
    $result = mysqli_query($koneksi, $queryGetCriteria);
    $datakriteria = mysqli_fetch_assoc($result);
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
                <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif.php">Alternatif</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif_kriteria.php">Alternatif Kriteria</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/ganti_password.php">Ganti Password</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/logout.php">Logout</a> | Anda Login Sebgaia : <?php echo $_SESSION['userlogin']; ?><span></span>

            </td>
        </tr>
        <tr>
            <!-- Pesan Selamat Datang-->
            <td align="center" valign="top" bgcolor="FFFFFF" width="100%" border="0" cellspacing="0" cellpadding="0">
                <strong>
                    Tambah Data Kriteria
                </strong>
                <br />
                <br />
                <form id="form1" name="form1" action="" method="post">
                    <table width="350" border="0" cellpadding="5" cellspacing="1" bgcolor="#F00099">
                        <tr>
                            <td width="128" bgcolor="#FFFFFF">ID Kriteria</td>
                            <td width="249" bgcolor="#FFFFFF"><input type="text" name="id_kriteria" id="id_kriteria" readonly value="<?php echo isset($datakriteria['id_kriteria']) ? $datakriteria['id_kriteria'] : ''; ?>"></td>
                            <td width="128" bgcolor="#FFFFFF">Nama</td>
                            <td width="249" bgcolor="#FFFFFF"><input type="text" name="nama_kriteria" id="nama_kriteria" value="<?php echo isset($datakriteria['nama_kriteria']) ? $datakriteria['nama_kriteria'] : ''; ?>"></td>
                            <td bgcolor="#FFFFFF">Kepentingan</td>
                            <td bgcolor="#FFFFFF"><input type="text" name="kepentingan" id="kepentingan" value="<?php echo isset($datakriteria['kepentingan']) ? $datakriteria['kepentingan'] : ''; ?>"></td>
                            <td bgcolor="#FFFFFF">Cost Benefit</td>
                            <td bgcolor="#FFFFFF">
                                <select name="costbenefit" id="costbenefit">
                                    <option value=""></option>
                                    <option value="cost" <?php if (isset($datakriteria['costbenefit']) && $datakriteria['costbenefit'] == 'cost') {
                                                                echo "selected";
                                                            } ?>>Cost</option>
                                    <option value="benefit" <?php if (isset($datakriteria['costbenefit']) && $datakriteria['costbenefit'] == 'benefit') {
                                                                echo "selected";
                                                            } ?>>Benefit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;</td>
                            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Update"></td>
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