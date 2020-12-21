<?php
require_once 'config/conection.php';

print_r($_GET);
$value_id = $_GET['id'];
$value = mysqli_query($connect, "SELECT * FROM `united` WHERE `id` = '$value_id'");
// створюєм масив значень з вибраних елементів бази даних ( це працює саме для одного елемента виводу, інакше потрібний цикл!)
$value = mysqli_fetch_assoc($value);
//print_r($value);
?>


<!doctype html>
<html lang="en">
<head>

    <title>vew</title>
</head>
<body>
<h2>
    Dispatcher: <?= $value['name']?>
</h2>
<h3>
    phone number: <?= $value['phone']?>
</h3>
<h3>
    Notes: <?= $value['description']?>
</h3>
</body>
</html>

