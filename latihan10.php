<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh if-else</title>
</head>
<body>
    <?= $kode_hari = date("w");
    if ($kode_hari == 0)
    print("Hari ini hari minggu");
    else
    print("hari ini bukan hari minggu") ;
    ?>
</body>
</html>