<?php
$botToken = "8930350090:AAE177TZemqAdW5ooyk3SyqkdUnScaTD_X8";
$chatId = "8902018930";

$message =
    "New visitor!\n" .
    "IP: " . $_SERVER['REMOTE_ADDR'] . "\n" .
    "User Agent: " . $_SERVER['HTTP_USER_AGENT'];

$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text' => $message
];

$options = [
    'http' => [
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);
file_get_contents($url, false, $context);
?>
