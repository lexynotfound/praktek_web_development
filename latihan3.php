<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <?= 
        $kota = "yogya";
        ${$kota} = 120000;
        
        print("\$kota = $kota <br>\n");
        print("\${\$kota} = ${$kota} <br>\n");
        print("\$yogya = $yogya <br>\n");
        
        $yogya = 100000;
        print("\${\$kota} = ${$kota} <br>\n");
        print("\$yogya = $yogya <br>\n");
    
    ?>
</body>
</html>