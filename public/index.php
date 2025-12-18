<?php

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// ---------- MONOLOG ----------
$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../app.log', Logger::INFO));
$log->info('Проєкт запущено');

// ---------- VAR DUMPER ----------
dump('VarDumper працює');

// ---------- ЦІКАВИЙ ПАКЕТ (CARBON) ----------
echo "Сьогодні: " . Carbon::now()->toDateString();
