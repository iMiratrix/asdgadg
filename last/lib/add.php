<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отправка</title>
</head>
<body>
<?php
require_once __DIR__ . '/dbConnection.php';
$name = trim($_POST['name']);
$fio = trim($_POST['fio']);
if (!empty($name) && !empty($fio)) {
    $sql = 'INSERT INTO books(name_book) VALUES(:name_book)';
    $params = ['name_book' => $name];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $sql = 'INSERT INTO authors(fio) VALUES(:fio)';
    $params = ['fio' => $fio];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    echo "Запись добавлена";
} else {
    echo "Некоторые поля пустые";

}
?>
<br>
<a href="http://last/main.php"> Посмотреть</a>
</body>
</html>
