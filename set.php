<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '227029803:AAH7-Jh8UJ7OL1mfHn_6NwvT-EiEWzwFDhE';
$BOT_NAME = '@realisasimantritkn_bot';
$hook_url = 'https://api.telegram.org/bot227029803:AAH7-Jh8UJ7OL1mfHn_6NwvT-EiEWzwFDhE/'
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
