<?php

session_start();

$newName = $_POST['name'] ?? null;
if (is_string($newName)) {
    $_SESSION['name'] = $newName;
}
$_SESSION['lastChange'] = new DateTime();

$name = $_SESSION['name'] ?? null;

if ($name) {
    echo "Your name is $name";
} else {
    echo "You have yet to choose your name";
}


?>
<form method="post">
    <label>Your name: <input name="name" value="<?= $name ?>"></label>
    <button type="submit">Save</button>
</form>
