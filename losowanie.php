<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczby = [];
    while (count($liczby) < 6) {
        $liczbarand = random_int(1,50);
        if (!in_array($liczbarand, $liczby)) {
            $liczby[] = $liczbarand;
        };
    }
    echo implode(", ", $liczby);
    ?>
</body>
</html>