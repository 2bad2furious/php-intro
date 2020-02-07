<?php

$array = [1, 2];
$array = [0 => 1, 1 => 2];

$associativeArray = [
    'key' => 'someValue',
    1 => 3
];

?>
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
<ul>
    <?php foreach ($associativeArray as $key => $value) : ?>
        <li><?= $key ?> to <?= $value ?></li>
    <?php endforeach; ?>
</ul>
<?php array_key_exists('key', $associativeArray) ?>
Value for key 'key' is "<?= $associativeArray['key'] ?>"
<br>
<?php if (isset($associativeArray['key2'])): ?>
    Value for key 'key2' is "<?= $associativeArray['key2'] ?>"
<?php endif; ?>
<?php if (isset($associativeArray['key2'])) $associativeArray['key2']; else 'not here'; ?>
Value for key 'key2' is "<?= $associativeArray['key2'] ?? 'not here' ?>"
<br>
<br>
Value for key '1' as string and as a number is the same => "<?= $associativeArray['1'] ?>"<br>
Value for key '1' as a boolean is the same => "<?= $associativeArray[true] ?>"
</body>
</html>
