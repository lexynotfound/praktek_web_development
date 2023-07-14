<?php
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("location:login.php?pesan= Belum Login");
    exit;
}

if (isset($_POST['button'])) {
    $nama_kriteria = $_POST['nama_alternatif'];
    $kepentingan = $_POST['deskripsi'];

    $query = "INSERT INTO kriteria (nama_alternatif, deskripsi) VALUES ('$nama_alternatif', '$deskripsi')";
    if (mysqli_query($koneksi, $query)) {
        header("location: alternatif.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
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

                <a href="/praktek_web_development/praktikum_aplikasi_database/admin.php">Home</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/kriteria.php">Kriteria</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif.php">Alternatif</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif_kriteria.php">Alternatif Kriteria</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/Laporan.php">Laporan</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/ganti_password.php">Ganti Password</a> |
                <a href="/praktek_web_development/praktikum_aplikasi_database/logout.php">Logout</a> | Anda Login Sebgaia : <?php echo $_SESSION['userlogin']; ?><span></span>

            </td>
        </tr>
        <tr>
            <!-- Pesan Selaamt Datang-->
            <td align="center" valign="top" bgcolor="FFFFFF" width="100%" border="0" cellspacing="0" cellpadding="0">
                <strong>
                    Data Alternatif
                </strong>
                <br />
                <br />
                <a href="add_alternatif.php">Tambah Data Alternatif</a>
                <table width="700" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
                    <tr>
                        <td width="79" bgcolor="FFFFFF">ID Alternatif</td>
                        <td width="196" bgcolor="FFFFFF">Nama</td>
                        <td width="129" bgcolor="FFFFFF">Deskripsi</td>
                        <td width="140" bgcolor="FFFFFF"><a href="edit_alternatif.php"></a>Edit</td>
                        <td width="140" bgcolor="FFFFFF"><a href="delete_alternatif.php"></a>Delete</td>
                    </tr>
                    <?php
                    include("connection/koneksi.php");

                    // Establish the database connection using MySQLi
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "dbpraktikum";

                    $mysqli = new mysqli($servername, $username, $password, $database);

                    // Check the connection
                    if ($mysqli->connect_error) {
                        die("Failed to connect to the database: " . $mysqli->connect_error);
                    }

                    // Fetch data using MySQLi
                    $querykriteria = $mysqli->query("SELECT * FROM alternatif ORDER BY id_alternatif");
                    while ($datakriteria = $querykriteria->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td bgcolor='FFFFFF'>" . $datakriteria['id_alternatif'] . "</td>";
                        echo "<td bgcolor='FFFFFF'>" . $datakriteria['nama_alternatif'] . "</td>";
                        echo "<td bgcolor='FFFFFF'>" . $datakriteria['deskripsi'] . "</td>";
                        echo "<td bgcolor='FFFFFF'><a href='edit_alternatif.php?id_alternatif=" . $datakriteria['id_alternatif'] . "'>Edit</a></td>";
                        echo "<td bgcolor='FFFFFF'><a href='delete_alternatif.php?id_alternatif=" . $datakriteria['id_alternatif'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    // Close the database connection
                    $mysqli->close();
                    ?>
                </table>
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