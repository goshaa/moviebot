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
$keywords = new Keywords();
$words = $keywords->getKeywords();

// give the bot something to listen for.
foreach ($words as $word)
{
    $botman->hears($word, function (BotMan $bot, $word) {
        $process = new Process();
        $message = $process->processKeywords($word);
        $bot->reply($message);
    });
}

// start listening
$botman->listen();
