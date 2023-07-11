<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh For Each</title>
</head>

<body>
    <?php
    $gado_gado[0] = "Suzuki";
    $gado_gado[1] = "Honda";
    $gado_gado["Ford"] = "USA";
    $gado_gado["KIA"] = "Korea Selatan";
    $gado_gado["cc"] = 1600;

    foreach ($gado_gado as $indeks => $elemen)
        print("$indeks : $elemen <br>\n");
    ?>
</body>

</html>