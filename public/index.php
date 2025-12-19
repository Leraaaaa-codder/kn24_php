<?php

require __DIR__ . '/../vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;
use Classes\AboutMeController;
use Carbon\Carbon;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../app.log', Logger::INFO));
$log->info('Проєкт запущено');

SimpleRouter::get('/', function() {
    return "Головна сторінка"; 
});

SimpleRouter::get('/aboutme', [AboutMeController::class, 'showAboutPage']);


SimpleRouter::start();


dump('VarDumper працює');
echo "Сьогодні: " . Carbon::now()->toDateString();