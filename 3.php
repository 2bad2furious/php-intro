<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$simpleArray = ['1', 2, 'Three', "Four"];

echo "1. <br>";

for ($i = 0; $i < count($simpleArray); $i++) {
    echo $simpleArray[$i];
}

echo "<br><br>2. <br>";

foreach ($simpleArray as $part) {
    echo $part;
}

?>
<br>
<br>
3. <br>
<ul>
    <?php foreach ($simpleArray as $part){ ?>
        <li><?= $part ?></li>
    <?php } ?>
</ul>
4. <br>
<ul>
    <?php foreach ($simpleArray as $part): ?>
        <li><?= $part ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
