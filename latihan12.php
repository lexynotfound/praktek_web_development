<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Break</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 20; $i += 2) {
        if ($i == 10)
            break;

        echo "$i<br>\n";
    }
    ?>
</body>

</html>