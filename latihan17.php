<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Indeks Campuran</title>
</head>

<body>
    <?php
    $gado_gado[0] = "Suzuki";
    $gado_gado[1] = "Honda";
    $gado_gado["Ford"] = "USA";
    $gado_gado["KIA"] = "Korea Selatan";
    $gado_gado["cc"] = 1600;

    print($gado_gado[0] . "<br>\n");
    print($gado_gado[1] . "<br>\n");
    print($gado_gado["Ford"] . "<br>\n");  // Corrected "FORD" to "Ford"
    print($gado_gado["KIA"] . "<br>\n");
    print($gado_gado["cc"] . "<br>\n");
    ?>
</body>

</html>