<?php
session_start();
include("connection/koneksi.php");
if (@$_SESSION['userlogin'] == "") {
    header("location:login.php?pesan= Belum Login");
    exit;
}
if (isset($_POST['button'])) {
    $id_alternatif = $_POST['id_alternatif'];
    $id_kriteria = $_POST['id_kriteria'];
    $nilai = $_POST['nilai'];

    $query = "INSERT INTO alternatif_kriteria (id_alternatif, id_kriteria, nilai) VALUES ('$id_alternatif', '$id_kriteria', '$nilai')";
    if (mysqli_query($koneksi, $query)) {
        header("location: alternatif_kriteria.php");
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
        <h1>Penilaian Data Alternatif dan Kriteria</h1>

        <div class="btn-container">
            <a href="/praktek_web_development/praktikum_aplikasi_database/admin.php" class="btn btn-primary">Home</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/kriteria.php" class="btn btn-primary">Kriteria</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif.php" class="btn btn-primary">Alternatif</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/alternatif_kriteria.php" class="btn btn-primary">Alternatif Kriteria</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/laporan.php" class="btn btn-primary">Laporan</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/ganti_password.php" class="btn btn-primary">Ganti Password</a>
            <a href="/praktek_web_development/praktikum_aplikasi_database/logout.php" class="btn btn-primary">Logout</a>
            <span>Anda Login Sebgaia : <?php echo $_SESSION['userlogin']; ?></span>
        </div>

        <form action="" method="POST" class="mt-3">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="id_alternatif" class="form-label">Data Alternatif:</label>
                        <select name="id_alternatif" id="id_alternatif" class="form-select" required>
                            <!-- Populate the select options from the database -->
                            <?php
                            $query = "SELECT * FROM alternatif";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['id_alternatif'] . "'>" . $row['nama_alternatif'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="id_kriteria" class="form-label">Data Kriteria:</label>
                        <select name="id_kriteria" id="id_kriteria" class="form-select" required>
                            <!-- Populate the select options from the database -->
                            <?php
                            $query = "SELECT * FROM kriteria";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['id_kriteria'] . "'>" . $row['nama_kriteria'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai:</label>
                <div class="numeric-input">
                    <input type="number" name="nilai" id="nilai" class="form-control" required>
                </div>
            </div>

            <div class="text-center">
                <input type="submit" name="button" value="Simpan" class="btn btn-primary">
            </div>
        </form>

        <?php
        // Query to retrieve data from the database
        $query = "SELECT a.id_alternatif, a.nama_alternatif, k.id_kriteria, k.nama_kriteria, ak.nilai FROM alternatif_kriteria ak 
        JOIN alternatif a ON ak.id_alternatif = a.id_alternatif 
        JOIN kriteria k ON ak.id_kriteria = k.id_kriteria";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<div class='table-container mt-3'>";
            echo "<h2>Hasil Penilaian</h2>";
            echo "<table class='table table-striped'>
                    <tr>
                        <th>ID Alternatif</th>
                        <th>Nama Alternatif</th>
                        <th>ID Kriteria</th>
                        <th>Nama Kriteria</th>
                        <th>Nilai</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['id_alternatif'] . "</td>
                        <td>" . $row['nama_alternatif'] . "</td>
                        <td>" . $row['id_kriteria'] . "</td>
                        <td>" . $row['nama_kriteria'] . "</td>
                        <td>" . $row['nilai'] . "</td>
                    </tr>";
            }

            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>

</body>

</html>