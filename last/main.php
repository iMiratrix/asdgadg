<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<?php
require_once 'lib/dbConnection.php';
$stmt = $pdo->query('select authors.fio, books.name_book, authors.id_author, books.id_book from merdge inner JOIN books on books.id_book = merdge.id_book INNER JOIN authors on authors.id_author= merdge.id_author;');
while ($data = $stmt->fetch()) {
    echo "<table>
<tr>
  <th>Название:</th>
  <th>Ф.И.О:</th>
  <th>".$data['id_author']." </th>
  <td>".$data['id_book']."</td>
  </tr>
 <tr>
  <td>" . $data['name_book'] . "</th></td> 
  <td>" . $data['fio'] . " </td>
  
  <td><a href='lib/del.php'>Удалить</a></td>
 </tr>
</table>";
}
?>
<br>
<a href="addform.php">Добавить запись</a>
</body>
</html>

