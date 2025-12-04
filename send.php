<?php

// Получаем токен и chat_id из переменных окружения Render
$token = getenv("8557269164:AAGvbJriNETY6zD4uTCWQ0ApzsWwsPPElw8");
$chat_id = getenv("8199279516");

// Получение данных формы
$name       = $_POST['name'];
$age        = $_POST['age'];
$country    = $_POST['country'];
$languages  = $_POST['languages'];
$profession = $_POST['profession'];
$method     = $_POST['method'];
$contact    = $_POST['contact'];

// Формирование текста сообщения
$message = "
📝 *New Lead Received*

👤 Name: $name
🎂 Age: $age
🌍 Country: $country
🗣 Languages: $languages
💼 Profession: $profession
📞 Preferred method: $method
🔗 Contact: $contact
";

// URL отправки
$url = "https://api.telegram.org/bot$token/sendMessage";

$params = [
    'chat_id' => $chat_id,
    'text'    => $message,
    'parse_mode' => 'Markdown'
];

// Отправка сообщения в Telegram
file_get_contents($url . '?' . http_build_query($params));

// Ответ пользователю
echo "Thank you for completing the form! Your personal manager will contact you soon.";
?>