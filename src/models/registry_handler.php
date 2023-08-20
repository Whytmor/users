<?php
declare(strict_types=1);
error_reporting(-1);

$filePath = __DIR__ . "../../users/user.txt";

if (isset($_POST) && !empty($_POST) ) {
$userId = 0;
$userName = $_POST['user_name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$text = "ID: {$userId}\n Имя: {$userName}\n Пароль: {$password}\n Телефон: {$phone} почта: {$email}";

    try {
        if (is_writable($filePath)) {
            if (!$handler = fopen($filePath, 'a+')) {
                echo 'Не удалось открыть файл!';
                exit;
            }
            if (fwrite($handler, $text) === false ) {
                echo 'Запись в файл не произведена!';
                exit;
            }
            echo 'Данные пользователя были успешно добавлены в файл!';
        
            fclose($handler);
        } else {
            echo 'Файл недоступен для записи!';
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
}   




