<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nama Hari</title>
</head>

<body>
    <?= $kode_hari = date("w");
    switch ($kode_hari) {
        case 0:
            print("Minggu");
            break;
        case 1:
            print("Senin");
            break;
        case 2:
            print("Selasa");
            break;
        case 3:
            print("Rabu");
            break;
        case 4:
            print("Kamis");
            break;
        case 5:
            print("Jum'at");
            break;
        default:
            print("Sabtu");
    }
    ?>
</body>

</html>