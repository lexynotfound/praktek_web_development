<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Konstanta Simbolis</title>
</head>

<body>
    <h1>Contoh PHP</h1>

    <?php
    define("PHI", 3.14);

    $jari_jari = 10;
    $keliling = 2 * PHI * $jari_jari;
    printf("PHI = %s<br>\n", PHI);
    printf("Jari-jari = %s<br>\n", $jari_jari);
    printf("Keliling = %s<br>\n", $keliling);

    ?>
</body>



</html>