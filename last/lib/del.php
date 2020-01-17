<?php
require_once __DIR__ . '/dbConnection.php';
try {
        $id = $_GET['id'];
        $data = $pdo->prepare('DELETE FROM books WHERE id_book = :id_book');
        $data->bindParam(':id_book', $id);
        $data->execute();
        echo "Удалена запись №.$id.<br> <a href='http://last/main.php'>Проверить</a>";
} catch (PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}