<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Count pada array</title>
</head>
<body>
    <?php 
        $kota[] = "Medan";
        $kota[] = "Jakarta";
        $kota[] = "Bandung";
        $kota[] = "Denpasar";
        $kota[] = "Makassar";

        $jumlah = count($kota);
        for ($i = 0; $i < $jumlah; $i++)
            print("\$kota[$1] : $kota[$i] <br>\n");
    ?>
</body>
</html>