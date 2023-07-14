<?php
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("location:login.php?pesan=Belum Login");
    exit;
}
if (isset($_POST['button'])) {
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO laporan (tanggal, keterangan, jumlah, kategori) VALUES ('$tanggal', '$keterangan', '$jumlah', '$kategori')";
    if (mysqli_query($koneksi, $query)) {
        header("location: laporan.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>SPK - Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="s.css">
    <style>
        /* Custom styles for input field */
        .numeric-input input[type="number"]::-webkit-inner-spin-button,
        .numeric-input input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .numeric-input input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
</head>

<body>
    <div class="container-md">

        <nav class="navbar bg-body mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/praktek_web_development/praktikum_aplikasi_database/admin.php">
                    Kurnia Raihan Ardian - 2122.01.0018
                </a>
            </div>
        </nav>
        <h1>Laporan SPK Praktikum</h1>

        <div class="btn-container">
            <a href="/praktek_web_development/praktikum_aplikasi_database/admin.php" class="btn btn-primary">Home</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/kriteria.php" class="btn btn-primary">Kriteria</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif.php" class="btn btn-primary">Alternatif</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif_kriteria.php" class="btn btn-primary">Alternatif Kriteria</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/laporan.php" class="btn btn-primary">Laporan</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/ganti_password.php" class="btn btn-primary">Ganti Password</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/logout.php" class="btn btn-primary">Logout</a>
            <span>Anda Login Sebagai: <?php echo $_SESSION['userlogin']; ?></span>
        </div>

        <form action="" method="POST" class="mt-3">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" required>
            </div>

            <div class="mb-3 numeric-input">
                <label for="jumlah" class="form-label">Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori:</label>
                <input type="text" name="kategori" id="kategori" class="form-control" required>
            </div>

            <div class="text-center">
                <input type="submit" name="button" value="Simpan" class="btn btn-primary">
            </div>
        </form>

        <?php
        // Query to retrieve data from the database
        $query = "SELECT * FROM laporan";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<div class='table-container mt-3'>";
            echo "<h2>Daftar Laporan SPK Praktikum</h2>";
            echo "<table class='table table-striped'>
                    <tr>
                        <th>ID Laporan</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['id_laporan'] . "</td>
                        <td>" . $row['tanggal'] . "</td>
                        <td>" . $row['keterangan'] . "</td>
                        <td>" . $row['jumlah'] . "</td>
                        <td>" . $row['kategori'] . "</td>
                    </tr>";
            }

            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>

</body>

</html>