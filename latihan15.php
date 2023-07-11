<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Fungsi</title>
</head>
<body>
    <?php function jumlah($x, $y){
        $hasil = $x + $y;
        return $hasil;
    }
    $z = jumlah(2,3);
    print($z);
    print("<BR>\n");
    print(jumlah(4,5));
     ?>
</body>
</html>