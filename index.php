<?php

require "vendor/autoload.php";
use Mpociot\BotMan\BotManFactory;
use Mpociot\BotMan\BotMan;
use \Bot\Models\Keywords;
use \Bot\Controllers\Process;

$config = [
    'telegram_token' => '391088343:AAHp8tEBheJSC9TQ-VB6WPxLZolPru-ZMKw',
];

// create an instance
$botman = BotManFactory::create($config);

$process = new Process();
$keywords = new Keywords();
$words = $keywords->getKeywords();

// give the bot something to listen for.
foreach ($words as $word)
{
    $message = $process->processKeywords($word);

    $botman->hears($word, function (BotMan $bot) use ($message) {
        $bot->reply($message);
    });
}

// start listening
$botman->listen();
