<?php
declare(strict_types=1);
error_reporting(-1);

//$filePath = "C:/OSPanel/domains/users/users/users.txt";
$filePath = "../../users/users.txt";
if (isset($_POST) && !empty($_POST['registry']) ) {

$userName = $_POST['user_name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$userId = $_POST['userId'];

$text = "ID: {$userId}\n Имя: {$userName}\n Пароль: {$password}\n Телефон: {$phone}\n почта: {$email}\n";

    try {
        if (is_writeable($filePath)) {
            if (!$handler = fopen($filePath, 'a+')) {
                echo 'Не удалось открыть файл!';
                exit;
            }
            if (fwrite($handler, $text) === FALSE) {
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




