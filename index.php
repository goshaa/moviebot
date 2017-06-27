<?php
require "vendor/autoload.php";
use Mpociot\BotMan\BotManFactory;
use Mpociot\BotMan\BotMan;

$config = [
    'telegram_token' => '391088343:AAHp8tEBheJSC9TQ-VB6WPxLZolPru-ZMKw',
];

echo "<pre>";
var_dump('asda');
echo "</pre>";
die();

// create an instance
$botman = BotManFactory::create($config);

// give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello fuck yourself.');
});

// start listening
$botman->listen();
