<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Break</title>
</head>
<body>
    <?php for ($i =0; $i <= 10; $i++){
        print("$i :");
        for ($j = 0; $j <= 6; $j++){
            if ($i == 5)
                break 2;
                print($j);
        }
        print("<br>\n");
    } ?>
</body>
</html>