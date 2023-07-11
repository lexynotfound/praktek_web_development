<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>

<body>
    <h1>Membuat penjumlahan dua buah bilangan dan menampilkan bilangan ganjil dan genap menggunakan for dan do while</h1>

    <form method="POST" action="">
        <label for="bilangan1">Bilangan Pertama:</label>
        <input type="number" name="bilangan1" id="bilangan1">
        <br>
        <label for="bilangan2">Bilangan Kedua:</label>
        <input type="number" name="bilangan2" id="bilangan2">
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $hasil = $bilangan1 + $bilangan2;

        echo "Hasil penjumlahan: " . $hasil . "<br>";

        echo "Bilangan ganjil antara $bilangan1 dan $bilangan2 adalah: ";
        for ($i = $bilangan1; $i <= $bilangan2; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
        echo "<br>";

        echo "Bilangan genap antara $bilangan1 dan $bilangan2 adalah: ";
        for ($i = $bilangan1; $i <= $bilangan2; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        echo "<br>";
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $hasil = $bilangan1 + $bilangan2;

        echo "Hasil penjumlahan: " . $hasil . "<br>";

        $i = $bilangan1;
        echo "Bilangan ganjil antara $bilangan1 dan $bilangan2 adalah: ";
        do {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
            $i++;
        } while ($i <= $bilangan2);
        echo "<br>";

        $i = $bilangan1;
        echo "Bilangan genap antara $bilangan1 dan $bilangan2 adalah: ";
        do {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
            $i++;
        } while ($i <= $bilangan2);
        echo "<br>";
    }
    ?>
</body>

</html>